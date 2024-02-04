<?php
  session_start();
    include("../components/connection.php");
    include("../components/functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Include DataTables CSS and JS -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css"> -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="../styles/reset.css" />
    <link rel="stylesheet" href="../assets/css/dashboard.css" />
    <link rel="stylesheet" href="../assets/css/data.css" />
    <link rel="stylesheet" href="../assets/css/datatables.css" />

    <style>
      @media print {
        body * {
          visibility: hidden;
        }

        #datatable_wrapper,
        #datatable_wrapper * {
          visibility: visible;
        }

        #datatable_wrapper {
          position: static;
        }

        br {
          display: none;
        }
      }

      .dataTables_wrapper {
        padding: 1rem;
      }

      /* h2 {
        display: flex;
        justify-content: center;
        margin-top: 2.5rem;
        margin-bottom: 0;
      } */
    </style>

    <title>Dashboard</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="header-wrapper">
        <div class="header">
          <img src="../assets/images/logo-dark.png" alt="" />
          <h1>ARC SYSTEM</h1>
        </div>
        <div class="title">
          <h2>DATA</h2>
        </div>
      </div>
      <div class="content">
        <!--<canvas id="myChart"></canvas>-->
        <table id="datatable" class="display compact">
          <thead>
            <tr>
              <th>DO</th>
              <th>NTU</th>
              <th>TDS</th>
              <th>Temp</th>
              <th>Date</th>
            </tr>
          </thead>

          <tbody>
            <?php 
                  $query = "SELECT * FROM sensordata";
                  $result = mysqli_query($con, $query);
                ?>

            <?php foreach ($result as $row) : ?>
            <tr>
              <td>
                <?= $row['oxygen']; ?>
              </td>
              <td>
                <?= $row['turbidity']; ?>
              </td>
              <td>
                <?= $row['tds']; ?>
              </td>
              <td>
                <?= $row['temperature']; ?>
              </td>
              <td>
                <?= $row['created_at']; ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <!-- <button id="printButton">Print Data</button> -->

        <script>
             const ctx = document.getElementById('myChart');

             // Fetch data from MySQL using PHP
             <?php
                 // Replace 'your_username', 'your_password', and 'your_database' with your MySQL credentials

                 $query = "SELECT * FROM sensordata";
                 $result = mysqli_query($con, $query);

                 $labels = [];
                 $data = [];

                 foreach($result as $row){
          	$labels[] = $row['created_at'];
          	$data[] = $row['oxygen'];
          }
             ?>

             new Chart(ctx, {
                 type: 'line',
                 data: {
                     labels: <?php echo json_encode($labels); ?>,
                     datasets: [{
                         label: 'Dissolved Oxygen',
                         data: <?php echo json_encode($data); ?>,
                         borderWidth: 1
                     }]
                 },
                 options: {
                     scales: {
                         y: {
                             beginAtZero: true
                         }
                     }
                 }
             });
        </script>

        <script>
          $(document).ready(function () {
            var dataTable = $("#datatable").DataTable({
              order: [[4, "asc"]], // Sort by the fourth column (date) in descending order
            });

            var yearFilter = $("#yearFilter");

            yearFilter.append('<option value="">All Years</option>'); // Add an option for all years

            for (
              var year = 2023;
              year <= new Date().getFullYear() + 1;
              year++
            ) {
              yearFilter.append(
                '<option value="' + year + '">' + year + "</option>"
              );
            }

            // Add a change event listener to the year filter select element
            yearFilter.on("change", function () {
              var selectedYear = $(this).val();

              // Clear any existing filtering
              dataTable.search("").columns().search("").draw();

              // Apply the selected year as a filter
              if (selectedYear !== "") {
                dataTable.column(3).search(selectedYear, true, false).draw();
              }
            });

            document
              .getElementById("printButton")
              .addEventListener("click", function () {
                window.print();
              });
          });
        </script>
      </div>
      <div class="nav-bar">
        <nav>
          <li class="default">
            <a href="dashboard.php">
              <hr />
              <span class="material-symbols-outlined">dashboard</span>
              <h3>Dashboard</h3>
            </a>
          </li>
          <li class="default">
            <a href="control.php">
              <hr />
              <span class="material-symbols-outlined">valve</span>
              <h3>Control</h3>
            </a>
          </li>
          <li class="active">
            <a href="data.php">
              <hr />
              <span class="material-symbols-outlined">monitoring</span>
              <h3>Data</h3>
            </a>
          </li>
          <li class="default">
            <a href="menu.php">
              <hr />
              <span class="material-symbols-outlined">menu</span>
              <h3>Menu</h3>
            </a>
          </li>
        </nav>
      </div>
    </div>
  </body>
</html>
