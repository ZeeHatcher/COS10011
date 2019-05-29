<?php
  const SERVERNAME = "localhost";
  const USERNAME = "root";
  const PASSWORD = "";
  const DBNAME = "db_glacier";

  function create_db() {
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD);

    if (!$conn) {
      die("Could not connect: " . mysqli_error());
    }

    $db_selected = mysqli_select_db($conn, DBNAME);

    if (!$db_selected) {
      $sql = 'CREATE DATABASE ' . DBNAME;

      if (!mysqli_query($conn, $sql)) {
        echo "Error creating database: " . mysqli_error($conn);
      }
    }

    mysqli_close($conn);
  }

  function create_db_enquiry() {
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

    if (!$conn) {
      die("Could not connect: " . mysqli_error($conn));
    }

    $sql = "SELECT id FROM enquiry";
    $result = mysqli_query($conn, $sql);

    if (empty($result)) {
      $sql = "CREATE TABLE IF NOT EXISTS enquiry (
        id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(64) NOT NULL,
        email VARCHAR(64) NOT NULL,
        tele VARCHAR(12) NOT NULL,
        street_address VARCHAR(255) NOT NULL,
        city VARCHAR(32) NOT NULL,
        state VARCHAR(32) NOT NULL,
        postcode VARCHAR(5) NOT NULL,
        product_code VARCHAR(16) NOT NULL,
        subject VARCHAR(64) NOT NULL,
        duration INT(11) NOT NULL,
        comments VARCHAR(255)
      )";

      $results = mysqli_query($conn, $sql);
    }

    mysqli_close($conn);
  }

  function create_db_users() {
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

    if (!$conn) {
      die("Could not connect: " . mysqli_error());
    }

    $sql = "SELECT id FROM users";
    $result = mysqli_query($conn, $sql);

    if (empty($result)) {
      $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(64) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        privilege INT(1) UNSIGNED DEFAULT '0'
      )";

      $result = mysqli_query($conn, $sql);
    }

    $password = password_hash("master", PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, privilege) VALUES ('master', '$password', '1')";

    mysqli_query($conn, $sql);

    mysqli_close($conn);
  }
?>
