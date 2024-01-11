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
    <link rel="stylesheet" href="../styles/reset.css" />
    <link rel="stylesheet" href="../assets/css/dashboard.css" />
    <link rel="stylesheet" href="../assets/css/dropdown.css">
    <link rel="stylesheet" href="../assets/css/menu.css" />

    <title>Dashboard</title>
  </head>
  <body>
    <div class="container">
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
        <li class="default">
          <a href="data.php">
            <hr />
            <span class="material-symbols-outlined">monitoring</span>
            <h3>Data</h3>
          </a>
        </li>
        <li class="active">
          <a href="">
            <hr />
            <span class="material-symbols-outlined">menu</span>
            <h3>Menu</h3>
          </a>
        </li>
      </nav>
      <div class="content">
        <img src="../assets/images/logo.png" alt="" />
        <h1>ARC SYSTEM</h1>
        <div class="dropdown">
          <div class="select">
            Customize
            <div class="caret"></div>
          </div>
          <ul class="menu">
            <li onclick="window.location.href='#'">Set Current Parameters</li>
            <li onclick="window.location.href='customize.php'">Add Custom Parameters</li>
          </ul>
        </div>
        <div class="dropdown">
          <div class="select">
            Account
            <div class="caret"></div>
          </div>
          <ul class="menu">
            <li onclick="window.location.href='addAccount.php'">Add Account</li>
            <li onclick="window.location.href='changePass.php'">Change Password</li>
          </ul>
        </div>
        <button>About</button>

        <a href="logout.php"><button class="logout-btn">Log Out</button></a>
      </div>
    </div>

    <!-- javascript -->
    <script>
      document.addEventListener('DOMContentLoaded', () => {
      const dropdowns = document.querySelectorAll('.dropdown');

      dropdowns.forEach(dropdown => {
        const select = dropdown.querySelector('.select');
        const caret = dropdown.querySelector('.caret');
        const menu = dropdown.querySelector('.menu');
        const options = dropdown.querySelectorAll('.menu li');
        const selected = dropdown.querySelector('.selected');

        select.addEventListener('click', () => {
          select.classList.toggle('select-clicked');
          caret.classList.toggle('caret-rotate');
          menu.classList.toggle('menu-open');
        });

        options.forEach(option => {
          option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');
            options.forEach(option => {
              option.classList.remove('activeSel');
            });
            option.classList.add('activeSel');
          });
        });
      });
    });

    </script>
  </body>
</html>
