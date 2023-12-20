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
        <button>Notifications</button>
        <button>Customize</button>
        <button>Account</button>
        <button>About</button>
        <button class="logout-btn">Log out</button>
      </div>
    </div>
  </body>
</html>
