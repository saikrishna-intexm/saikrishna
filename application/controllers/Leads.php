<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

        // Restrict access if not logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }


    public function index()
    {
        $this->load->library('session');

        // Get the selected value from the AJAX request
        $selectedValue = $this->input->post('selectedValue');

        // Determine the table and columns based on the selected value
        switch ($selectedValue) {
            case 'leads':
                $table = 'leads';
                $dateColumn = 'created_at'; // Adjust this if needed
                break;
            case 'leads_creditcard':
                $table = 'leads_creditcard';
                $dateColumn = 'created_at'; // Adjust this if needed
                break;
            default:
                $table = 'leads'; // Default table
                $dateColumn = 'created_at'; // Default column
                break;
        }

        // Fetch total count from the selected table
        $totalCount = $this->db->count_all($table);

        // Fetch today's count based on a date column
        $todayCount = $this->db
            ->where('DATE(' . $dateColumn . ') = CURDATE()')
            ->count_all_results($table);

        // Fetch loan offers for the view
        $data['offer_names'] = $this->db->get('loan_offers')->result_array();
        $username = $this->session->userdata('username');

        // Pass counts to the view
        $data['totalCount'] = $totalCount;
        $data['todayCount'] = $todayCount;
        $data['username'] = $username;

        // Check if the request is an AJAX request
        if ($this->input->is_ajax_request()) {
            // Return data as JSON response for AJAX requests
            $response = array(
                'totalCount' => $totalCount,
                'todayCount' => $todayCount,
            );
            echo json_encode($response);
        } else {
            // Load the view based on the selected value for non-AJAX requests
            $this->load->view('leads/index', $data);
        }
    }

    public function submitForm()
    {
        $this->load->library('session');
        $this->load->helper('url');
    
            // Prepare filters
            $filters = $this->prepareFilters();
    
            // Get the selected table from the form input
            $selectedTable = $this->input->post('selectedDropdownValue');
            
            // Set session data
            $this->session->set_userdata('filters', $filters);
            $this->session->set_userdata('selectedTable', $selectedTable);
            
            // Redirect to results page
            redirect('leads/displayResults');
        } 
    
    
    


    public function displayResults()
    {
        $this->load->library('session');
        $this->load->helper('url');

        // Get filters and selected table from session
        $filters = $this->session->userdata('filters');
        $selectedTable = $this->session->userdata('selectedTable');

        if (!$filters || !$selectedTable) {
            $this->session->set_flashdata('error_message', 'No filters found or table not selected. Please apply filters before viewing results.');
            redirect('leads');
            return;
        }

        $username = $this->session->userdata('username');

        $data['filters'] = $filters;
        $data['totalRecords'] = $this->countFilteredRecords($selectedTable, $filters);
        $data['username'] = $username;

        if ($selectedTable == 'leads') {
            $data['table'] = 'Leads';
        } elseif ($selectedTable == 'leads_creditcard') {
            $data['table'] = 'Leads Credit Card';
        }
        $this->load->view('leads/results_view', $data);
    }


    public function fetchResults()
    {
        $this->load->library('session');
        $filters = $this->session->userdata('filters');
        $selectedTable = $this->session->userdata('selectedTable');
        $draw = $this->input->post('draw');
        $start = $this->input->post('start');
        $length = $this->input->post('length');

        $results = $this->getFilteredResults($selectedTable, $filters, $start, $length);
        $totalFilteredRecords = $this->countFilteredRecords($selectedTable, $filters);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalFilteredRecords,
            'recordsFiltered' => $totalFilteredRecords,
            'data' => $results,
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    private function getFilteredResults($table, $filters, $start, $length)
    {
        $this->db->select('mobile, utm_source')->from($table);
        $this->applyFilters($filters);
        $this->db->limit($length, $start);
        $results = $this->db->get()->result_array();

        // Mask mobile numbers
        foreach ($results as &$result) {
            $result['mobile'] = $this->maskMobileNumber($result['mobile']);
        }

        return $results;
    }


    private function maskMobileNumber($mobileNumber)
    {
        // Show only the last 4 digits of the mobile number
        return str_repeat('*', strlen($mobileNumber) - 4) . substr($mobileNumber, -4);
    }

    private function countFilteredRecords($table, $filters)
    {
        $this->db->from($table);
        $this->applyFilters($filters);
        return $this->db->count_all_results();
    }

    public function downloadAll()
    {
        ini_set('max_execution_time', 6000);
        ini_set('memory_limit', '4G');
        $this->load->library('session');
        $filters = $this->session->userdata('filters');

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="leads_export_' . date('Y-m-d_H-i-s') . '.csv"');

        $output = fopen('php://output', 'w');
        fputcsv($output, array('Mobile', 'UTM Source'));

        $this->outputCSVInChunks($filters, $output);
        fclose($output);
    }

    private function outputCSVInChunks($filters, $output)
    {
        $chunkSize = 2000000;
        $offset = 0;
        $selectedTable = $this->session->userdata('selectedTable');

        do {
            $results = $this->getFilteredResultsForDownload($selectedTable, $filters, $offset, $chunkSize);
            foreach ($results as $row) {
                fputcsv($output, $row);
            }
            $offset += $chunkSize;
        } while (count($results) === $chunkSize);
    }


    private function getFilteredResultsForDownload($table, $filters, $start, $length)
    {
        $this->db->select('mobile, utm_source','income', 'rd_offer_id','employee_type','pincode','created_at')->from($table);
        $this->applyFilters($filters);
        $this->db->limit($length, $start);
        return $this->db->get()->result_array(); // Do not mask mobile numbers here
    }


    private function applyFilters($filters)
    {
        if (!empty($filters['validPincodes'])) $this->db->where_in('pincode', $filters['validPincodes']);
        // if (!empty($filters['validRdOfferIds'])) $this->db->where_in('rd_offer_id', $filters['validRdOfferIds']);
        if (!empty($filters['validLeadIds'])) $this->db->where_in('lead_id', $filters['validLeadIds']);
        if (!empty($filters['fromDate'])) $this->db->where('created_at >=', $filters['fromDate']);
        if (!empty($filters['toDate'])) $this->db->where('created_at <=', $filters['toDate']);
        // if (!empty($filters['employeeTypes'])) $this->db->where_in('employee_type', $filters['employeeTypes']);
        // Handle employee_type filtering
        if (isset($filters['employeeTypes'])) {
            $employeeTypes = $filters['employeeTypes'];
            if (in_array('NULL', $employeeTypes)) {
                $this->db->group_start();
                if (count(array_filter($employeeTypes, function ($type) {
                    return $type !== 'NULL';
                })) > 0) {
                    $this->db->where_in('employee_type', array_filter($employeeTypes, function ($type) {
                        return $type !== 'NULL';
                    }));
                }
                $this->db->or_where('employee_type IS NULL');
                $this->db->group_end();
            } else {
                $this->db->where_in('employee_type', $employeeTypes);
            }
        }
        if (!empty($filters['incomeType'])) {
            switch ($filters['incomeType']) {
                case 'Fixed':
                    if (!empty($filters['income'])) $this->db->where('income', $filters['income']);
                    break;
                case 'Above':
                    if (!empty($filters['income'])) $this->db->where('income >', $filters['income']);
                    break;
                case 'Below':
                    if (!empty($filters['income'])) $this->db->where('income <', $filters['income']);
                    break;
                case 'Between':
                    if (!empty($filters['incomeFrom']) && !empty($filters['incomeTo'])) {
                        $this->db->where('income >=', $filters['incomeFrom']);
                        $this->db->where('income <=', $filters['incomeTo']);
                    }
                    break;
            }
        }
    }


    private function prepareFilters()
    {
        // Define the upload directory
        $uploadDir = __DIR__ . '/../uploads/'; // Adjust path if necessary
        $filteredPincodes = [];
    
        // Ensure the file upload was successful
        if (isset($_FILES['pincodeFile']) && $_FILES['pincodeFile']['error'] === UPLOAD_ERR_OK) {
            // Create the upload directory if it doesn't exist
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
    
            // Define the path for the uploaded file
            $fileName = basename($_FILES['pincodeFile']['name']);
            $filePath = $uploadDir . $fileName;
    
            // Move the uploaded file to the desired directory
            if (move_uploaded_file($_FILES['pincodeFile']['tmp_name'], $filePath)) {
                // Read the file content
                $fileContent = file_get_contents($filePath);
    
                // Normalize line breaks and separate pincodes
                $pincodeInput = preg_replace('/[\r\n]+/', ',', $fileContent); // Replace new lines with commas
                $pincodes = array_filter(array_map('trim', explode(',', $pincodeInput)), function ($pincode) {
                    return $this->isValidPincode($pincode);
                });
    
                // Break down pincodes into smaller chunks if needed
                $chunks = array_chunk($pincodes, 1000); // Adjust chunk size as needed
                foreach ($chunks as $chunk) {
                    $filteredPincodes = array_merge($filteredPincodes, $chunk); // Combine results
                }
            } else {
                error_log('Failed to move uploaded file to: ' . $filePath);
            }
        } else {
            error_log('File upload error: ' . $_FILES['pincodeFile']['error']);
        }
    
        // Debugging: Log the received POST and FILE data
        error_log(print_r($_POST, true));
        error_log(print_r($_FILES, true));
    
        // Process other input fields
        return [
            'validPincodes' => $filteredPincodes,
            'validRdOfferIds' => array_filter(array_map('trim', (array) $this->input->post('rd_offer_ids')), 'strlen'),
            'validLeadIds' => array_filter(array_map('trim', explode(',', $this->input->post('leadId'))), function ($leadId) {
                return preg_match('/^\d+$/', $leadId);
            }),
            'fromDate' => $this->input->post('from_date'),
            'toDate' => $this->input->post('to_date'),
            'employeeTypes' => $this->input->post('employee_type'),
            'incomeType' => $this->input->post('income_type'),
            'income' => $this->input->post('income'),
            'incomeFrom' => $this->input->post('income_from'),
            'incomeTo' => $this->input->post('income_to'),
        ];
    }
    
    

    

    function isValidPincode($pincode)
    {
        return strlen($pincode) === 6 && ctype_digit($pincode);
    }
    




    public function fetchSummarizedData()
    {
        $this->load->library('session');
        $filters = $this->session->userdata('filters');
        $selectedTable = $this->session->userdata('selectedTable');

        $results = $this->getSummarizedData($selectedTable, $filters);

        $response = [
            'data' => $results,
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    private function getSummarizedData($table, $filters)
    {
        $this->db->select('utm_source, COUNT(*) as count')
            ->from($table);
        $this->applyFilters1($filters);
        $this->db->group_by('utm_source');

        return $this->db->get()->result_array();
    }

    private function applyFilters1($filters)
    {
        // if (!empty($filters['validRdOfferIds'])) $this->db->where_in('rd_offer_id', $filters['validRdOfferIds']);
        if (!empty($filters['validLeadIds'])) $this->db->where_in('lead_id', $filters['validLeadIds']);
        if (!empty($filters['fromDate'])) $this->db->where('created_at >=', $filters['fromDate']);
        if (!empty($filters['toDate'])) $this->db->where('created_at <=', $filters['toDate']);
        // if (!empty($filters['employeeTypes'])) $this->db->where_in('employee_type', $filters['employeeTypes']);

        if (!empty($filters['incomeType'])) {
            switch ($filters['incomeType']) {
                case 'Fixed':
                    if (!empty($filters['income'])) $this->db->where('income', $filters['income']);
                    break;
                case 'Above':
                    if (!empty($filters['income'])) $this->db->where('income >', $filters['income']);
                    break;
                case 'Below':
                    if (!empty($filters['income'])) $this->db->where('income <', $filters['income']);
                    break;
                case 'Between':
                    if (!empty($filters['incomeFrom']) && !empty($filters['incomeTo'])) {
                        $this->db->where('income >=', $filters['incomeFrom']);
                        $this->db->where('income <=', $filters['incomeTo']);
                    }
                    break;
            }
        }
    }
}
