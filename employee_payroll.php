<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
</head> 
<body class="cbp-spmenu-push">
    <div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!-- Sidebar Content -->
       <?php include('sidebar.php')?>
    </div>

    <!-- Content Wrapper -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Your Content Goes Here -->
            <div class="container">
        <form method="post" action="config/payroll_employee.php">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="employeeNumber" class="col-sm-4 col-form-label">Referrence Number:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="ReferNumber" id="employeeNumber" placeholder="Automatically generated" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
    <div class="form-group row">
        <label for="date" class="col-sm-4 col-form-label">Date:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="date" id="date" placeholder="Automatically generated" readonly>
        </div>
    </div>
</div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="employeeNumber" class="col-sm-4 col-form-label panel-heading">Employee Number:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="employeeNumber" placeholder="Enter employee number">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="employeeNumber" class="col-sm-4 col-form-label panel-heading">Full Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="employeeNumber" name="fullName" placeholder="Enter employee number">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="employeeNumber" class="col-sm-4 col-form-label panel-heading">Position</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="employeeNumber" name="position" placeholder="Enter employee number">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="employeeNumber" class="col-sm-4 col-form-label panel-heading">Department</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="employeeNumber" name="department" placeholder="Enter employee number">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <!-- First Card -->
            <div class="col-md-4">                       
    <div class="card">   
        <h5 class="card-title panel-heading bg-primary text-white" style="height:50px;">Salary Information</h5>
        <div class="card-body">                                 
            <div class="row">
                <div class="col-md-6">
                    <label for="basicSalary">Basic Salary:</label>
                    <input type="text" class="form-control" id="basicSalary" name="basicSalary"  placeholder="Enter basic salary">
                </div>
                <div class="col-md-6">
                    <label for="thirteenthMonthPay">13th Month Pay:</label>
                    <input type="text" class="form-control" id="thirteenthMonthPay" name="thirteenthMonthPay"  placeholder="Enter 13th month pay">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="overtimeHours">Total Hours of Overtime:</label>
                    <input type="text" class="form-control" id="overtimeHours" name="overtimeHours"  placeholder="Enter number of overtime hours">
                </div>
                <div class="col-md-6">
                    <label for="regularOvertimeRate">Regular Overtime Rate:</label>
                    <input type="text" class="form-control" id="regularOvertimeRate" name="regularOvertimeRate"  value="100" readonly>
                </div>
               
            </div>
        </div>
    </div>
</div>
            <!-- Second Card -->
            <div class="col-md-4">
    <div class="card">
        <h5 class="card-title panel-heading bg-primary text-white" style="height:50px;">Deductions</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="absentCount">No. of Absent:</label>
                    <input type="text" class="form-control" id="absentCount" name="absentCount" placeholder="Enter number of absent">
                </div>
                <div class="col-md-6">
                    <label for="absentRate">Rate of Absent:</label>
                    <input type="text" class="form-control" id="absentRate" name="absentRate" value="500" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="lateMinutes">Total Minutes of Late:</label>
                    <input type="text" class="form-control" id="lateMinutes" name="lateMinutes" placeholder="Enter total minutes of late">
                </div>
                <div class="col-md-6">
                    <label for="lateRate">Rate of Late per Minute:</label>
                    <input type="text" class="form-control" id="lateRate" name="lateRate" value="1.08333333333" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="philhealth">Philhealth:</label>
                    <input type="text" class="form-control" id="philhealth" name="philhealth" placeholder="Enter Philhealth deduction">
                </div>
                <div class="col-md-6">
                    <label for="sss">SSS:</label>
                    <input type="text" class="form-control" id="sss" name="sss" placeholder="Enter SSS deduction">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="pagibig">Pag-Ibig:</label>
                    <input type="text" class="form-control" id="pagibig" name="pagibig" placeholder="Enter Pag-Ibig deduction">
                </div>
               
            </div>
        </div>
    </div>
</div>

            <!-- Third Card -->
<div class="col-md-4">
    <div class="card">
        <h5 class="card-title panel-heading bg-primary text-white" style="height:50px;">Salary</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="grossPay">Gross Pay</label>
                    <input type="hidden" name="totalGross">
                    <span class="form-control" id="totalGrossPay" name="totalGross" placeholder="Enter gross pay" readonly>
                </div>
                <div class="col-md-6">
                    <label for="totalDeductionInput">Total Deduction</label>
                    <input type="hidden" name="totalDeduction">
                    <span id="totalDeductionDisplay" class="form-control" id="totalDeductionInput" name="totalDeduction"  placeholder="Enter total deduction" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="totalSalary">Total Salary</label>
                    <input type="hidden" name="totalSalary">
                    <span class="form-control" id="totalSalary" name="totalSalary"  placeholder="Enter gross pay" readonly>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">Print Payslip</button>
                </div>
            </div>
        </form>                   
        </div>
    </div>
</div>

        </div>
    </div>
        </div>
    <!-- End Content Wrapper -->
</div>

<!-- new added graphs chart js-->
<script src="js/Chart.bundle.js"></script>
<script src="js/utils.js"></script>
<!-- new added graphs chart js-->

<script>
         // Function to generate automatic reference number
         function generateReferenceNumber() {
            // Get current date and time
            var date = new Date();
            var timestamp = date.getTime(); // Get timestamp

            // Generate random number between 1000 and 9999
            var random = Math.floor(Math.random() * 9000) + 1000;

            // Combine timestamp and random number to create reference number
            var referenceNumber = 'REF' + timestamp + random;

            // Set the generated reference number to the input field
            document.getElementById('employeeNumber').value = referenceNumber;
        }

        // Call the function to generate reference number on page load
        generateReferenceNumber();
    // Compute Gross Pay
    function calculateGrossPay() {
        var basicSalary = parseFloat(document.getElementById('basicSalary').value) || 0;
        var thirteenthMonthPay = parseFloat(document.getElementById('thirteenthMonthPay').value) || 0;
        var overtimeHours = parseFloat(document.getElementById('overtimeHours').value) || 0;
        var regularOvertimeRate = parseFloat(document.getElementById('regularOvertimeRate').value) || 0;

        var overtimePay = overtimeHours * regularOvertimeRate;
        var grossPay = basicSalary + thirteenthMonthPay + overtimePay;

        // Update total gross pay span
        document.getElementById('totalGrossPay').textContent = grossPay.toFixed(2);

        // Call calculateSalary function when both gross pay and total deduction are not empty
        if (grossPay && document.getElementById('totalDeductionDisplay').textContent) {
            calculateSalary();
        }
    }

    // Attach the function to input fields' onchange event
    document.getElementById('basicSalary').onchange = calculateGrossPay;
    document.getElementById('thirteenthMonthPay').onchange = calculateGrossPay;
    document.getElementById('overtimeHours').onchange = calculateGrossPay;
    document.getElementById('regularOvertimeRate').onchange = calculateGrossPay;

    // Calculate initial gross pay
    calculateGrossPay();

    function calculateTotalDeduction() {
        var absentCount = parseFloat(document.getElementById('absentCount').value) || 0;
        var absentRate = parseFloat(document.getElementById('absentRate').value) || 0;
        var lateMinutes = parseFloat(document.getElementById('lateMinutes').value) || 0;
        var lateRate = parseFloat(document.getElementById('lateRate').value) || 0;
        var philhealth = parseFloat(document.getElementById('philhealth').value) || 0;
        var sss = parseFloat(document.getElementById('sss').value) || 0;
        var pagibig = parseFloat(document.getElementById('pagibig').value) || 0;

        var absentDeduction = absentCount * absentRate;
        var lateDeduction = lateMinutes * lateRate;
        var totalDeduction = absentDeduction + lateDeduction + philhealth + sss + pagibig;

        // Update total deduction span
        document.getElementById('totalDeductionDisplay').textContent = totalDeduction.toFixed(2);

        // Call calculateSalary function when both gross pay and total deduction are not empty
        if (document.getElementById('totalGrossPay').textContent && totalDeduction) {
            calculateSalary();
        }
    }

    // Attach the function to input fields' onchange event
    document.getElementById('absentCount').onchange = calculateTotalDeduction;
    document.getElementById('absentRate').onchange = calculateTotalDeduction;
    document.getElementById('lateMinutes').onchange = calculateTotalDeduction;
    document.getElementById('lateRate').onchange = calculateTotalDeduction;
    document.getElementById('philhealth').onchange = calculateTotalDeduction;
    document.getElementById('sss').onchange = calculateTotalDeduction;
    document.getElementById('pagibig').onchange = calculateTotalDeduction;

    // Calculate initial total deduction
    calculateTotalDeduction();

    // Function to calculate total salary
  // Function to calculate total salary and set the values of hidden input fields
function calculateSalary() {
    var grossPay = parseFloat(document.getElementById('totalGrossPay').textContent) || 0;
    var totalDeduction = parseFloat(document.getElementById('totalDeductionDisplay').textContent) || 0;

    var totalSalary = grossPay - totalDeduction;

    // Update total salary span
    document.getElementById('totalSalary').textContent = totalSalary.toFixed(2);
    
    // Set the values of hidden input fields
    document.getElementsByName('totalGross')[0].value = grossPay.toFixed(2);
    document.getElementsByName('totalDeduction')[0].value = totalDeduction.toFixed(2);
    document.getElementsByName('totalSalary')[0].value = totalSalary.toFixed(2);

    // Function to format the date as YYYY-MM-DD
    function formatDate(date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1).toString().padStart(2, '0');
        var day = date.getDate().toString().padStart(2, '0');
        return year + '-' + month + '-' + day;
    }

    // Get the current date
    var currentDate = new Date();

    // Format the date
    var formattedDate = formatDate(currentDate);

    // Set the value of the input field to the formatted date
    document.getElementById('date').value = formattedDate;


    
}

// Call calculateSalary function to display date automatically
calculateSalary();

</script>
<!-- Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->

<!-- side nav js -->
<script src='js/SidebarNav.min.js' type='text/javascript'></script>
<script>
  $('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
<!-- //Bootstrap Core JavaScript -->

</body>
</html>
