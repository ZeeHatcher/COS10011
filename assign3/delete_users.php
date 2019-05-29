<?php
  require("create_db.php");
  
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $id = $_GET["id"];

  $sql = "DELETE FROM users WHERE id = '$id'";

  mysqli_query($conn, $sql);

  header("location: view_users.php");
?>
