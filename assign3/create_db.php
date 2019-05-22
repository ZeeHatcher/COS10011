<?php
  const SERVERNAME = "localhost";
  const USERNAME = "root";
  const PASSWORD = "";
  const DBNAME = "db_glacier"

  function create_db() {
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD);

    if (!$conn) {
      die("Could not connect: " . mysqli_error());
    }

    $db_selected = mysqli_select_db(DBNAME, $conn);

    if (!db_selected) {
      $sql = "CREATE DATABASE {DBNAME}";

      if (!mysqli_query($sql, $conn)) {
        echo "Error creating database: " . mysqli_error();
      }
    }

    $mysql_close($conn);
  }

  function create_db_table($table) { 
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    
    if (!conn) {
      die("Could not connect: " . mysqli_error());
    }
    
    $sql = "SELECT id FROM {$table}";
    $result = mysqli_query($sql, $conn);
    
    if (empty($result)) {
      $sql = "CREATE TABLE {$table} (
      )";
      
      $result = mysqli_query($sql, $conn);
    }
  } 
?>