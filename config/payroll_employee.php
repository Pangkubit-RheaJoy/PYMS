<?php
session_start();
include('dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Employee Details
    $employeeNumber = $_POST['employeeNumber'];
    $fullName = $_POST['fullName'];
    $position = $_POST['position'];
    $department = $_POST['department'];

    // Salary Details
    $referenceNumber = $_POST['ReferNumber'] ?? ''; // Assigns reference_number from POST data
    $basicSalary = $_POST['basicSalary'];
    $thirteenthMonthPay = $_POST['thirteenthMonthPay'];
    $overtimeHours = $_POST['overtimeHours'];
    $regularOvertimeRate = $_POST['regularOvertimeRate'];

    // Total Salary
    $totalGross = $_POST['totalGross'];
    $totalDeduction = $_POST['totalDeduction'];
    $totalSalary = $_POST['totalSalary'];
    $date = $_POST['date'];

    // Deduction Details
    $absentCount = $_POST['absentCount'];
    $absentRate = $_POST['absentRate'];
    $lateMinutes = $_POST['lateMinutes'];
    $lateRate = $_POST['lateRate'];
    $philhealth = $_POST['philhealth'];
    $sss = $_POST['sss'];
    $pagibig = $_POST['pagibig'];

    // Insert into employee_details table
    $stmt_employee_details = $conn->prepare("INSERT INTO employee_details (employee_number, full_name, position, department) VALUES (?, ?, ?, ?)");
    $stmt_employee_details->bind_param("isss", $employeeNumber, $fullName, $position, $department);
    $stmt_employee_details->execute();
    $stmt_employee_details->close();

    // Get the last inserted employee ID
    $employee_id = $conn->insert_id;

    // Insert into salary_details table
    $stmt_salary_details = $conn->prepare("INSERT INTO salary_details (reference_number, basic_salary, thirteenth_month_pay, overtime_hours, regular_overtime_rate, employee_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt_salary_details->bind_param("iddddi", $referenceNumber, $basicSalary, $thirteenthMonthPay, $overtimeHours, $regularOvertimeRate, $employee_id);
    $stmt_salary_details->execute();
    $stmt_salary_details->close();

    // Insert into total_salary table
    $stmt_total_salary = $conn->prepare("INSERT INTO total_salary ( total_gross, total_deduction, total_salary, date, employee_id) VALUES ( ?, ?, ?, ?, ?)");
    $stmt_total_salary->bind_param("dddsi",  $totalGross, $totalDeduction, $totalSalary, $date, $employee_id);
    $stmt_total_salary->execute();
    $stmt_total_salary->close();

    // Insert into deduction_details table
    $stmt_deduction_details = $conn->prepare("INSERT INTO deduction_details (absent_count, absent_rate, late_minutes, late_rate, philhealth, sss, pagibig, employee_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt_deduction_details->bind_param("iidiiddi", $absentCount, $absentRate, $lateMinutes, $lateRate, $philhealth, $sss, $pagibig, $employee_id);
    $stmt_deduction_details->execute();
    $stmt_deduction_details->close();

 

    // Redirect to the receipt page with the ID of the newly inserted record
    $last_id = $conn->insert_id;
    header("Location: ../employee_receipt.php?id=$last_id");
    exit(); // Ensure that code execution stops after redirection
} else {
    // If the request method is not POST, handle the error
    echo "Error: Form data not submitted via POST method";
}
   // Close the database connection
   $conn->close();
?>
