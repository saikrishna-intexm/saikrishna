<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <!-- Include Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link rel="icon" href="<?php echo base_url(); ?>/assets/website/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include jQuery and DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS for additional styling -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #495057;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 25px;
        }

        .filters {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .filters label {
            display: block;
            margin-bottom: 5px;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .btn-download {
            background-color: #28a745;
            color: white;
        }

        .btn-download:hover {
            background-color: #218838;
        }

        .btn-back {
            background-color: #343a40;
            color: white;
        }

        .btn-back:hover {
            background-color: #23272b;
        }

        .tables-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .table-wrapper {
            flex: 1;
            min-width: 300px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.5em 1em;
            border-radius: 5px;
            border: 1px solid #dee2e6;
            margin: 0 0.1em;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }

        /* Table Header Styling */
        th {
            background-color: #007bff;
            /* Blue background for headers */
            color: white;
            /* White text color for better contrast */
            padding: 12px;
            /* Padding for more spacing */
            text-align: left;
            /* Align text to the left */
        }

        th:first-child {
            border-top-left-radius: 8px;
            /* Rounded top-left corner */
        }

        th:last-child {
            border-top-right-radius: 8px;
            /* Rounded top-right corner */
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 768px) {
            .tables-container {
                flex-direction: column;
            }
        }

        .form-label {
            font-weight: 600;
            margin-top: 20px;
        }

        .col-form-label {
            font-weight: 600;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .top-inputs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .top-input {
            width: 48%;
        }

        .counts-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: bold;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
            margin-left: 20px;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-item {
            padding-right: 20px;
        }

        .dropdown-menu {
            right: 0;
            left: auto;
        }

        .header-wrapper {
            padding: 20px 0;
        }

        .card-title {
            font-size: 30px;
            color: #000;
            font-weight: 700;
            text-align: center;
        }

        .username {
            color: #ffffff;
            font-weight: bold;
            margin-right: 20px;

        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            var dataTable = $('#leadsTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?php echo base_url('leads/fetchResults'); ?>",
                    "type": "POST"
                },
                "columns": [{
                        "data": "mobile"
                    },
                    {
                        "data": "utm_source"
                    }
                ],
                "responsive": true
            });

            fetchSummarizedResults();

            function fetchSummarizedResults() {
                $.ajax({
                    url: "<?php echo base_url('leads/fetchSummarizedData'); ?>",
                    method: "POST",
                    success: function(data) {
                        populateSummarizedTable(data.data);
                    },
                    error: function() {
                        alert("An error occurred while fetching the summarized results.");
                    }
                });
            }

            function populateSummarizedTable(data) {
                var summarizedTable = $('#summarizedTable').DataTable({
                    "destroy": true,
                    "data": data,
                    "columns": [{
                            "data": "utm_source"
                        },
                        {
                            "data": "count"
                        }
                    ],
                    "responsive": true
                });
            }
        });

        function goBack() {
            window.history.back();
        }

        function downloadResults(button) {
            button.disabled = true;
            window.location.href = "<?php echo base_url('leads/downloadAll'); ?>";
        }
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownLeads" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $table; ?>
            </a>    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $username; ?> <!-- Display username -->
                        </a>
                        <ul class="dropdown-menu" style="--bs-dropdown-min-width: 5rem;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-back" onclick="goBack();"><i class="fas fa-arrow-left"></i> Back</button>
            <button class="btn btn-download" onclick="downloadResults(this);"><i class="fas fa-download"></i> Download Data</button>
        </div>

        <div class="tables-container">
            <div class="table-wrapper">
                <h2>TOTAL LEADS</h2>
                <div class="filters">
                    <strong>Filters:</strong>
                    <?php if (!empty($filters['validRdOfferIds'])) : ?>
                        <label>RD Offer IDs: <?php echo implode(', ', $filters['validRdOfferIds']); ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['validLeadIds'])) : ?>
                        <label>Lead IDs: <?php echo implode(', ', $filters['validLeadIds']); ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['fromDate'])) : ?>
                        <label>From Date: <?php echo $filters['fromDate']; ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['toDate'])) : ?>
                        <label>To Date: <?php echo $filters['toDate']; ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['incomeType'])) : ?>
                        <?php if ($filters['incomeType'] === 'Fixed' && !empty($filters['income'])) : ?>
                            <label>Income: <?php echo $filters['income']; ?></label>
                        <?php elseif ($filters['incomeType'] === 'Above' && !empty($filters['income'])) : ?>
                            <label>Income Above: <?php echo $filters['income']; ?></label>
                        <?php elseif ($filters['incomeType'] === 'Below' && !empty($filters['income'])) : ?>
                            <label>Income Below: <?php echo $filters['income']; ?></label>
                        <?php elseif ($filters['incomeType'] === 'Between' && !empty($filters['incomeFrom']) && !empty($filters['incomeTo'])) : ?>
                            <label>Income From: <?php echo $filters['incomeFrom']; ?> To: <?php echo $filters['incomeTo']; ?></label>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <table id="leadsTable" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="background-color: #9ea6df;">Mobile</th>
                            <th style="background-color: #9ea6df;">UTM Source</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="table-wrapper">
                <h2>SOURCE WISE COUNT</h2>
                <div class="filters">
                    <strong>Filters:</strong>
                    <?php if (!empty($filters['validRdOfferIds'])) : ?>
                        <label>RD Offer IDs: <?php echo implode(', ', $filters['validRdOfferIds']); ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['validLeadIds'])) : ?>
                        <label>Lead IDs: <?php echo implode(', ', $filters['validLeadIds']); ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['fromDate'])) : ?>
                        <label>From Date: <?php echo $filters['fromDate']; ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['toDate'])) : ?>
                        <label>To Date: <?php echo $filters['toDate']; ?></label>
                    <?php endif; ?>
                    <?php if (!empty($filters['incomeType'])) : ?>
                        <?php if ($filters['incomeType'] === 'Fixed' && !empty($filters['income'])) : ?>
                            <label>Income: <?php echo $filters['income']; ?></label>
                        <?php elseif ($filters['incomeType'] === 'Above' && !empty($filters['income'])) : ?>
                            <label>Income Above: <?php echo $filters['income']; ?></label>
                        <?php elseif ($filters['incomeType'] === 'Below' && !empty($filters['income'])) : ?>
                            <label>Income Below: <?php echo $filters['income']; ?></label>
                        <?php elseif ($filters['incomeType'] === 'Between' && !empty($filters['incomeFrom']) && !empty($filters['incomeTo'])) : ?>
                            <label>Income From: <?php echo $filters['incomeFrom']; ?> To: <?php echo $filters['incomeTo']; ?></label>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <table id="summarizedTable" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="background-color: #9ea6df;">UTM Source</th>
                            <th style="background-color: #9ea6df;">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>