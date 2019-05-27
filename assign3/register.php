<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | Register</title>

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

    if (isset($_POST["submit"])) {
      if (isset($_POST["username"]) && !empty($_POST["username"])) {
        $username = $_POST["username"];
        $username = sanitise_input($username);

        if (!preg_match("/^[A-Za-z0-9]+$/", $username)) {
          $err_msg .= "Invalid username<br/>";
          $valid = false;
        }

        $conn = @mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        $sql = "SELECT username FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            if ($username == $row["username"]) {
              $err_msg .= "Username already exists<br/>";
              $valid = false;
            }
          }
        }

        mysqli_close($conn);
      } else {
        $err_msg .= "Empty username<br/>";
        $valid = false;
      }

      if (isset($_POST["password"]) && !empty($_POST["password"])) {
        $password = $_POST["password"];
        $password = sanitise_input($password);

        if (isset($_POST["confirm"]) && !empty($_POST["confirm"])) {
          $confirm = $_POST["confirm"];
          $confirm = sanitise_input($confirm);

          if (!($confirm == $password)) {
            $err_msg .= "Incorrect confirm password<br/>";
            $valid = false;
          }
        } else {
          $err_msg .= "Empty confirm password<br/>";
          $valid = false;
        }
      } else {
        $err_msg .= "Empty password<br/>";
        $valid = false;
      }

      if ($valid) {
        $conn = @mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, privilege)
        VALUES ('$username', '$password', 0)";

        mysqli_query($conn, $sql);

        mysqli_close($conn);
      }
    } else if (isset($_POST["cancel"])) {
      echo "CANCEL";
    }
  ?>

  <main>
    <section>
      <div class="seperator">
        <h1 class="seperator__title">Registe<span class="no-letter-spacing">r</span></h1>
      </div>
    </section>

    <section>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
          <div class="form__grid">
            <label for="username">Username: </label>
            <input type="text" name="username" />

            <label for="password">Password: </label>
            <input type="text" name="password">

            <label for="confirm">Confirm Password: </label>
            <input type="text" name="confirm">
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
          <input class="btn form__btn" type="submit" name="cancel" value="Cancel">
          <input class="btn form__btn" type="submit" name="submit" value="Submit">
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
