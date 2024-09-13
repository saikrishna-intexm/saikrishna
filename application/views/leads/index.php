<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads</title>
    <!-- Vendor CSS Files -->
    <link rel="icon" href="<?php echo base_url(); ?>/assets/website/img/favicon.ico" type="image/x-icon">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/select2.min.css" rel="stylesheet" />
    <style>
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
            font-size: 25px;
            color: #000;
            font-weight: 700;
            text-align: center;
        }

        .username {
            color: #ffffff;
            font-weight: bold;
            margin-right: 20px;
        }

        .card-container {
            padding: 60px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        @media (max-width: 768px) {

            .card-container {
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 8px;
                background-color: #fff;
            }
        }

        .card-header {
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Ensure dropdown toggle looks like a regular link */
        .nav-link.dropdown-toggle {
            font-size: 1.2rem;
            /* Adjust font size if needed */
            padding: 0.5rem 1rem;
            /* Adjust padding for better spacing */
            cursor: pointer;
            /* Change cursor to pointer to indicate clickable */
        }

        /* Style for the dropdown menu */
        .dropdown-menu {
            background-color: #343a40;
            /* Background color of the dropdown menu */
            border: none;
            /* Remove border */
        }

        /* Style for dropdown items */
        .dropdown-item {
            color: #ffffff;
            /* Text color of dropdown items */
        }

        /* Change background color of dropdown items on hover */
        .dropdown-item:hover {
            background-color: #495057;
            /* Background color on hover */
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownLeads" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Leads
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownLeads">
                    <li><a class="dropdown-item" data-value="leads" onclick="handleDropdownClick('leads')">Leads</a></li>
                    <li><a class="dropdown-item" data-value="leads_creditcard" onclick="handleDropdownClick('leads_creditcard')">Leads Credit Card</a></li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function handleDropdownClick(value) {
            // Set the selected value in a hidden input field
            document.querySelector('#selectedDropdownValue').value = value;

            $.ajax({
                url: '<?php echo base_url('leads/index'); ?>',
                type: 'POST',
                data: {
                    selectedValue: value,
                },
                dataType: 'json',
                success: function(response) {
                    // Update the dropdown button text with the selected value
                    var button = document.querySelector('#dropdownLeads');
                    if (value === 'leads') {
                        button.innerHTML = 'Leads';
                    } else if (value === 'leads_creditcard') {
                        button.innerHTML = 'Leads Credit Card';
                    }

                    // Update the counts on the page
                    document.querySelector('#totalCount').textContent = 'Total Leads: ' + response.totalCount;
                    document.querySelector('#todayCount').textContent = 'Today\'s Leads: ' + response.todayCount;
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>




    <section class="header-wrapper">
        <div class="container">
            <div class="card-container card">
                <div class="card-header">
                    <div class="counts-container">
                        <div id="totalCount">Total Leads: <?php echo $totalCount; ?></div>
                        <div id="todayCount">Today's Leads: <?php echo $todayCount; ?></div>
                    </div>
                    <h1 class="card-title">GET MOBILE NUMBERS /<br> GET UTM SOURCE COUNT</h1>
                </div>
                <?php if ($this->session->flashdata('error_message')) : ?>
                    <div class="error-message" style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
                        <?php echo $this->session->flashdata('error_message'); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo base_url('leads/submitForm'); ?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <input type="hidden" name="selectedDropdownValue" id="selectedDropdownValue" value="leads">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="pincodeFile" class="col-form-label">Pincode File<span style="font-size: 12px;"> (Optional)</span></label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="pincodeFile" id="pincodeFile" accept=".txt,.csv">
                                <span style="font-size: 12px;"> (Upload a file with pincodes separated by commas or new lines)</span>
                                <div id="pincode-error" class="error-message"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label for="leadId" class="col-form-label">Lead Id's<span style="font-size: 12px;"> (Optional)</span></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="leadId" id="leadId">
                                <span style="font-size: 12px;"> (e.g., 5, 54, 6) or (e.g., 5)</span>
                                <div id="leadId-error" class="error-message"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="col-sm-4">
                                <label for="inputFromDate" class="col-form-label">From Date<span style="font-size: 12px;"> (Optional)</span></label>
                            </div>
                            <div class="col-sm">
                                <input type="date" class="form-control" id="inputFromDate" name="from_date">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-sm-4">
                                <label for="inputToDate" class="col-form-label">To Date<span style="font-size: 12px;"> (Optional)</span></label>
                            </div>
                            <div class="col-sm">
                                <input type="date" class="form-control" id="inputToDate" name="to_date">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-form-label">Income<span style="font-size: 12px;"> (Optional)</span></label>
                        <div class="col-sm-6">
                            <select id="inputState" class="form-select" name="income_type" onchange="toggleIncomeFields(this.value)">
                                <option value="Fixed" selected>Exactly</option>
                                <option value="Above">Above</option>
                                <option value="Below">Below</option>
                                <option value="Between">Between</option>
                            </select>
                        </div>
                        <div class="col-sm-6" id="inputContainer">
                            <input type="number" class="form-control" name="income" id="income" placeholder="Enter income">
                            <div id="betweenFields" class="row" style="display: none;">
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="income_from" id="income_from" placeholder="From">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="income_to" id="income_to" placeholder="To">
                                </div>
                            </div>
                            <div id="income-error" class="error-message"></div>
                        </div>
                    </div>

                    <div class="row mb-3" style="margin-top: 40px;">
                        <legend class="col-form-label col-lg-4 col-sm-2 pt-0">Employee Type<span style="font-size: 12px;"> (Optional)</span></legend>
                        <div class="col-lg-8 col-sm-4 d-flex">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" name="employee_type[]" value="SELF-EMPLOYEE" checked>
                                <label class="form-check-label" for="gridCheck1">
                                    Self-Employee
                                </label>
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="checkbox" id="gridCheck2" name="employee_type[]" value="SALARIED" checked>
                                <label class="form-check-label" for="gridCheck2">
                                    Salaried
                                </label>
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="checkbox" id="gridCheck3" name="employee_type[]" value="NULL">
                                <label class="form-check-label" for="gridCheck3">
                                    NULL
                                </label>
                            </div>
                        </div>
                        <div id="checkbox-error" class="error-message"></div>
                    </div>

                    <div class="text-left">
                        <button type="submit" class="btn btn-primary" id="proceedBtn">Get Details</button>
                    </div>
                </form>

                <script>
                    function toggleIncomeFields(value) {
                        var betweenFields = document.getElementById('betweenFields');
                        var incomeField = document.getElementById('income');
                        if (value === 'Between') {
                            betweenFields.style.display = 'block';
                            incomeField.style.display = 'none';
                        } else {
                            betweenFields.style.display = 'none';
                            incomeField.style.display = 'block';
                        }
                    }

                    function validateForm() {
                        var isValid = true;
                        var pincodeFile = document.getElementById('pincodeFile').files[0];
                        var leadId = document.getElementById('leadId').value;
                        var incomeType = document.getElementById('inputState').value;
                        var income = document.getElementById('income').value;
                        var incomeFrom = document.getElementById('income_from').value;
                        var incomeTo = document.getElementById('income_to').value;
                        var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

                        // Clear previous error messages
                        document.getElementById('pincode-error').innerText = '';
                        document.getElementById('leadId-error').innerText = '';
                        document.getElementById('income-error').innerText = '';
                        document.getElementById('checkbox-error').innerText = '';

                        // Validate pincode file
                        if (pincodeFile) {
                            console.log('true'); // Log 'true' if a file is attached
                            if (!['text/plain', 'text/csv'].includes(pincodeFile.type)) {
                                document.getElementById('pincode-error').innerText = 'Please upload a valid text or CSV file.';
                                isValid = false;
                            }
                        }

                        // Validate lead ID
                        if (leadId && !/^\d+(,\d+)*$/.test(leadId)) {
                            document.getElementById('leadId-error').innerText = 'Please enter valid lead ID(s).';
                            isValid = false;
                        }

                        // Validate income range
                        if (incomeType === 'Between') {
                            if (incomeFrom === '' || incomeTo === '' || parseInt(incomeFrom) >= parseInt(incomeTo)) {
                                document.getElementById('income-error').innerText = 'Please enter a valid income range.';
                                isValid = false;
                            }
                        }

                        // Validate checkboxes
                        if (checkboxes.length === 0) {
                            document.getElementById('checkbox-error').innerText = 'Please select at least one employee type.';
                            isValid = false;
                        }

                        return isValid;
                    }
                </script>

            </div>
        </div>
    </section>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>

</body>

</html>