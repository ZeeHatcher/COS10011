<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | Login</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
  <link rel="stylesheet" type="text/css" href="styles/style-mobile.css"/>
</head>

<body>
  <?php
    include_once("header.php");
  ?>

  <?php
    require("create_db.php");

    function sanitise_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      return $data;
    }

    create_db();
    create_db_users();

    $err_msg = "";
    $valid = true;

    if (isset($_POST["login"])) {
      if (isset($_POST["username"]) && !empty($_POST["username"])) {
        $username = $_POST["username"];
        $username = sanitise_input($username);
      } else {
        $err_msg .= "Please enter a username<br/>";
        $valid = false;
      }

      if (isset($_POST["password"]) && !empty($_POST["password"])) {
        $password = $_POST["password"];
        $password = sanitise_input($password);
      } else {
        $err_msg .= "Please enter a password<br/>";
        $valid = false;
      }

      if ($valid) {
        $conn = @mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        $sql = "SELECT username, password, privilege FROM users";
        $results = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($results)) {
          if ($username == $row["username"] && password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["privilege"] = $row["privilege"];

            break;
          }
        }

        mysqli_close($conn);

        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
          header("location: index.php");
        } else {
          $err_msg .= "Invalid username or password<br/>";
        }
      }
    } else if (isset($_POST["register"])) {
      header("location: register.php");
    }
  ?>

  <main>
    <section>
      <div class="seperator">
        <h1 class="seperator__title">Logi<span class="no-letter-spacing">n</span></h1>
      </div>
    </section>

    <section>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
          <div class="form__grid">
            <label for="username">Username: </label>
            <input type="text" name="username" />

            <label for="password">Password: </label>
            <input type="password" name="password">
          </div>
        </fieldset>

        <?php
          if (isset($err_msg) && !empty($err_msg)) {
            echo "<p class='info__text'>";
            echo $err_msg;
            echo "</p>";
          }
        ?>

        <div class="form__btns">
          <input class="btn form__btn" type="submit" name="login" value="Login">
          <input class="btn form__btn" type="submit" name="register" value="Register">
        </div>
      </form>
    </section>
  </main>

  <?php
    include_once("footer.php");
  ?>

  <!-- JS -->
  <script src="script/enhancements.js"></script>
  <script src="script/script.js"></script>
</body>

</html>
