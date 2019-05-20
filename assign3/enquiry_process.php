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
        function sanitise_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);

          return $data;
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_glacier";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $err_msg = "";

        if (isset($_POST["fullname"])) {
          $fullname = $_POST["fullname"];
          $fullname = sanitise_input($fullname);

          if (strlen($fullname) == 0 && !preg_match("/^[A-Za-z ]+$/", $fullname)) {
            $err_msg .= "Invalid fullname;<br/>";
          }
        } else {
          $err_msg .= "Empty fullname;<br/>";
          $fullname = "-";
        }

        if (isset($_POST["email"])) {
          $email = $_POST["email"];
          $email = sanitise_input($email);

          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_msg .= "Invalid email;<br/>";
          }
        } else {
          $err_msg .= "Empty email;<br/>";
          $email = "-";
        }

        if (isset($_POST["fulltele"])) {
          $tele = $_POST["fulltele"];
          $tele = sanitise_input($tele);

          if (!preg_match("/^[0-9]{3}-[0-9]+$/", $tele)) {
            $err_msg .= "Invalid telephone number;<br/>";
          }
        } else {
          $err_msg .= "Empty telephone number;<br/>";
          $tele = "-";
        }

        if (isset($_POST["street_address"])) {
          $street_address = $_POST["street_address"];
          $street_address = sanitise_input($street_address);

          if (strlen($street_address) > 40) {
            $err_msg .= "Invalid street address;<br/>";
          }
        } else {
          $err_msg .= "Empty street address;<br/>";
          $street_address = "-";
        }

        if (isset($_POST["city"])) {
          $city = $_POST["city"];
          $city = sanitise_input($city);

          if (strlen($city) > 20) {
            $err_msg .= "Invalid city;<br/>";
          }
        } else {
          $err_msg .= "Empty city;<br/>";
          $city = "-";
        }

        if (isset($_POST["state"])) {
          $state = $_POST["state"];
          $state = sanitise_input($state);

          if (strlen($state) == 0) {
            $err_msg .= "Invalid state;<br/>";
          }
        } else {
          $err_msg .= "Empty state;<br/>";
          $state = "-";
        }

        if (isset($_POST["postcode"])) {
          $postcode = $_POST["postcode"];
          $postcode = sanitise_input($postcode);

          if (!preg_match("/^[0-9]{5}$/", $postcode)) {
            $err_msg .= "Invalid postcode;<br/>";
          }
        } else {
          $err_msg .= "Empty postcode;<br/>";
          $postcode = "-";
        }

        if (isset($_POST["product-code"])) {
          $product_code = $_POST["product-code"];
          $product_code = sanitise_input($product_code);

          if (strlen($product_code) == 0) {
            $err_msg .= "Invalid product code;<br/>";
          }
        } else {
          $err_msg .= "Empty product code;<br/>";
          $product_code = "-";
        }

        if (isset($_POST["subject"])) {
          $subject = $_POST["subject"];
          $subject = sanitise_input($subject);

          if (strlen($subject) == 0) {
            $err_msg .= "Invalid subject;<br/>";
          }
        } else {
          $err_msg .= "Empty subject;<br/>";
          $subject = "-";
        }

        if (isset($_POST["duration"])) {
          $duration = $_POST["duration"];
          $duration = sanitise_input($duration);

          if (!preg_match("/^[0-9]+$/", $duration)) {
            $err_msg .= "Invalid duration;<br/>";
          }
        } else {
          $err_msg .= "Empty duration;<br/>";
          $duration = "-";
        }

        if (isset($_POST["comments"])) {
          $comments = $_POST["comments"];
          $comments = sanitise_input($comments);
        } else {
          $comments = "-";
        }

        if ($err_msg == "") {
          $sql = "INSERT INTO enquiry (fullname, email, tele, street_address, city, state, postcode, product_code, subject, duration, comments) VALUES ('$fullname', '$email', '$tele', '$street_address', '$city', '$state', '$postcode', '$product_code', '$subject', '$duration', '$comments')";

          if (mysqli_query($conn, $sql)) {
            echo "<p class='info__text'>New record created successfully</p>";
            echo "<p class='info__text'>Thank you for your time</p>";
          } else {
            echo "Error: " . $sql . "<br />" . mysqli_error($conn);
          }
        } else {
          echo "<article class='info'>";
          echo "<h3 class='info__subtitle'>Errors:</h3>";
          echo "<p class='info__text'>";
          echo $err_msg;
          echo "</p>";
          echo "</article>";
        }

        mysqli_close($conn);
      ?>
    </section>

    <section>
      <table id="summary-table" class="modern-table">
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
