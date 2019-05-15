<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | Summary</title>

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
        <h1 class="seperator__title">Summar<span class="no-letter-spacing">y</span></h1>
      </div>
    </section>

    <section>
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_glacier";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $tele = $_POST["fulltele"];
        $street_address = $_POST["street_address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $postcode = $_POST["postcode"];
        $product_code = $_POST["product-code"];
        $subject = $_POST["subject"];
        $duration = $_POST["duration"];
        $comments = $_POST["comments"];

        $sql = "INSERT INTO enquiry (fullname, email, tele, street_address, city, state, postcode, product_code, subject, duration, comments)
                VALUES ('$fullname', '$email', '$tele', '$street_address', '$city', '$state', '$postcode', '$product_code', '$subject', '$duration', '$comments')";

        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br />" . mysqli_error($conn);
        }

        mysqli_close($conn);
      ?>
    </section>

    <section>
      <table class="modern-table">
        <tr class="modern-table__row">
          <th class="modern-table__header">Fields</th>
          <th class="modern-table__header">Values</th>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Fullname</td>
          <td class="modern-table__item"><?php echo $fullname; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Email Address</td>
          <td class="modern-table__item"><?php echo $email; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Telephone No.</td>
          <td class="modern-table__item"><?php echo $tele; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Street Address</td>
          <td class="modern-table__item"><?php echo $street_address; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">City</td>
          <td class="modern-table__item"><?php echo $city; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">State</td>
          <td class="modern-table__item"><?php echo $state; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Postcode</td>
          <td class="modern-table__item"><?php echo $postcode; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Product Code</td>
          <td class="modern-table__item"><?php echo $product_code; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Subject</td>
          <td class="modern-table__item"><?php echo $subject; ?></td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Duration</td>
          <td class="modern-table__item"><?php echo $duration; ?> weeks</td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Comments</td>
          <td class="modern-table__item"><?php echo $comments; ?></td>
        </tr>
      </table>
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
