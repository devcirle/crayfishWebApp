<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />

    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="logo-container">
      <img src="assets/images/logo.png" alt="" />
      <h1>ARC SYSTEM</h1>
    </div>

    <div class="input-fields">
      <input
        class="input-bottom"
        type="text"
        name="username"
        id="username"
        placeholder="Username"
      />

      <input
        class="input-bottom"
        type="password"
        name="pwd"
        id="pwd"
        placeholder="Password"
      />
    </div>

    <div class="input-btns">
      <a href="views/dashboard.php">
        <button>Log in</button>
      </a>
      <a href="">Forgot Password?</a>
    </div>
  </body>
</html>
