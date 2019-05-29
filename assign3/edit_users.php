<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | Edit Users</title>

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

    create_db();
    create_db_users();

    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST["confirm"])) {
      $id = $_POST["id"];
      $username = $_POST["username"];
      $privilege = $_POST["privilege"];

      $sql = "UPDATE users SET username = '$username', privilege = '$privilege' WHERE id = '$id'";

      mysqli_query($conn, $sql);

      header("location: view_users.php");
    } else if (isset($_POST["cancel"])) {
      header("location: view_users.php");
    } else {
      $row_id = $_GET["id"];

      $sql = "SELECT * FROM users where id = $row_id";
      $user_data = mysqli_query($conn, $sql);

      if (!$user_data) {
        die("Could not get data: " . mysql_error());
      }

      $row = mysqli_fetch_assoc($user_data);

      mysqli_close($conn);
    }
  ?>

  <main>
    <section>
      <div class="seperator">
        <h1 class="seperator__title">Edit User<span class="no-letter-spacing">s</span></h1>
      </div>
    </section>
    <form class="" action="index.html" method="post">

    </form>
    <section>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table id="view-table" class="modern-table">
          <tr class="modern-table__row">
            <th class="modern-table__header">ID</th>
            <th class="modern-table__header">Username</th>
            <th class="modern-table__header">Privilege Level</th>
          </tr>

          <tr class="modern-table__row">
            <td class="modern-table__item">
              <?php echo $row["id"]; ?>
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </td>
            <td class="modern-table__item">
              <input type="text" class="input-edit" name="username" value="<?php echo $row["username"]; ?>">
            </td>
            <td class="modern-table__item">
              <select class="input-edit" name="privilege">
                <option value="1" <?php if ($row["privilege"] == 1) { echo "selected"; } ?>>Admin</option>
                <option value="0" <?php if ($row["privilege"] == 0) { echo "selected"; } ?>>User</option>
              </select>
            </td>
          </tr>
        </table>

        <div class="form__btns">
          <input class="btn form__btn" type="submit" name="confirm" value="Confirm">
          <input class="btn form__btn" type="submit" name="cancel" value="Cancel">
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
