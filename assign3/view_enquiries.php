<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | View Enquiries</title>

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

  <main>
    <section>
      <div class="seperator">
        <h1 class="seperator__title">View Enquirie<span class="no-letter-spacing">s</span></h1>
      </div>
    </section>

    <section>
      <div class="scroll">
        <table id="view-table" class="modern-table">
          <tr class="modern-table__row">
            <th class="modern-table__header">ID</th>
            <th class="modern-table__header">Fullname</th>
            <th class="modern-table__header">Email Address</th>
            <th class="modern-table__header">Telephone No.</th>
            <th class="modern-table__header">Residential Address</th>
            <th class="modern-table__header">Product Code</th>
            <th class="modern-table__header">Subject</th>
            <th class="modern-table__header">Duration</th>
            <th class="modern-table__header">Comments</th>
          </tr>

          <?php

          function create_item($item) {
            echo "<td class='modern-table__item'>";
            echo $item;
            echo "</td>";
          }

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db_glacier";

          $conn = mysqli_connect($servername, $username, $password, $dbname);

          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          $sql = "SELECT * FROM enquiry";
          $enquiry_data = mysqli_query($conn, $sql);

          if (!$enquiry_data) {
            die("Could not get data: " . mysql_error());
          }

          while ($row = mysqli_fetch_assoc($enquiry_data)) {
            echo "<tr class='modern-table__row'>";
            create_item($row["id"]);
            create_item($row["fullname"]);
            create_item($row["email"]);
            create_item($row["tele"]);

            $full_address = $row["street_address"] . ", " . $row["city"] . ", " . $row["state"] . " " . $row["postcode"];
            create_item($full_address);

            create_item($row["product_code"]);
            create_item($row["subject"]);
            create_item($row["duration"]);
            create_item($row["comments"]);
            echo "</tr>";
          }

          mysqli_close($conn);
          ?>
        </table>
      </div>
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
