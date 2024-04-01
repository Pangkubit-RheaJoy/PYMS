<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipt</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: darkgrey; /* Grey background */
    }
    
    @media print {
      /* Hide buttons when printing */
      .hide-on-print {
        display: none !important;
      }
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h5 class="card-title text-center">Receipt</h5>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tbody>
            <?php
            // Include database connection script
            include('config/dbcon.php');

            // Check if the ID parameter is set in the URL
            if (isset($_GET['id'])) {
                // Retrieve ID from URL parameter
                $submitted_id = $_GET['id'];

                // SQL query to fetch data for the submitted ID
                $sql = "SELECT * 
        FROM employee_details
        INNER JOIN salary_details ON salary_details.employee_id = employee_details.employee_id
        INNER JOIN total_salary ON total_salary.employee_id = employee_details.employee_id
        INNER JOIN deduction_details ON deduction_details.employee_id = employee_details.employee_id
        WHERE employee_details.employee_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $submitted_id);
$stmt->execute();
$result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Output data of the fetched record
                    $row = $result->fetch_assoc();
                    echo "<tr>";
                    echo "<tr>";
    echo "<tr><td>Referrence Number: ".$row['reference_number']."</td><td>Date:".$row['date']."</td></tr>";
                    echo "<tr><td>Employee Number:</td><td>".$row['employee_number']."</td></tr>";
                    echo "<tr><td>Full Name:</td><td>".$row['full_name']."</td></tr>";
                    echo "<tr><td>Position:</td><td>".$row['position']."</td></tr>";
                    echo "<tr><td>Department:</td><td>".$row['department']."</td></tr>";
                    echo "<tr><th colspan='2' class='bg-info text-white'>Financial Details</th></tr>";
                    echo "<tr><td>Basic Salary:</td><td class='text-success'>₱".$row['basic_salary']."</td></tr>";
                    echo "<tr><td>Thirteenth Month Pay:</td><td class='text-success'>+₱".$row['thirteenth_month_pay']."</td></tr>";
                    echo "<tr><td>Overtime Hours:</td><td>".$row['overtime_hours']." hours</td></tr>";
                    echo "<tr><td>Regular Overtime Rate:</td><td>₱".$row['regular_overtime_rate']."/hour</td></tr>";
                    echo "<tr><td>Absent Count:</td><td>".$row['absent_count']." days</td></tr>";
                    echo "<tr><td>Absent Rate:</td><td class='text-danger'>-₱".$row['absent_rate']."</td></tr>";
                    echo "<tr><td>Late Minutes:</td><td>".$row['late_minutes']." minutes</td></tr>";
                    echo "<tr><td>Late Rate:</td><td class='text-danger'>-₱".$row['late_rate']."</td></tr>";
                    echo "<tr><td>PhilHealth:</td><td class='text-danger'>-₱".$row['philhealth']."</td></tr>";
                    echo "<tr><td>SSS:</td><td class='text-danger'>-₱".$row['sss']."</td></tr>";
                    echo "<tr><td>Pagibig:</td><td class='text-danger'>-₱".$row['pagibig']."</td></tr>";
                    echo "<tr><th>Total Gross:</th><td>₱".$row['total_gross']."</td></tr>";
                    echo "<tr><th>Total Deduction:</th><td class='text-danger'>-₱".$row['total_deduction']."</td></tr>";
                    echo "<tr><th>Total Salary:</th><td>₱".$row['total_salary']."</td></tr>";
                    // Output other financial details and totals as needed
                } else {
                    echo "<tr><td colspan='2'>No records found for ID: ".$submitted_id."</td></tr>";
                }

                // Close statement
                $stmt->close();
            } else {
                // If the ID parameter is not set in the URL, handle the error
                echo "<tr><td colspan='2'>Error: ID parameter not set in URL</td></tr>";
            }

            // Close database connection
            $conn->close();
            ?>
          </tbody>
        </table>
        <!-- Buttons for printing receipt and canceling -->
        <div class="row mt-3 hide-on-print">
          <div class="col-md-6 text-center">
            <form action="employee_payroll.php" method="post">
              <button type="submit" class="btn btn-danger">No Receipt</button>
            </form>
          </div>
          <div class="col-md-6 text-center">
            <button onclick="window.print();" class="btn btn-success">Print Receipt</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
