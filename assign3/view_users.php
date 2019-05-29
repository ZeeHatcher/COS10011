<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | View Users</title>

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
        <h1 class="seperator__title">View User<span class="no-letter-spacing">s</span></h1>
      </div>
    </section>

    <section>
      <div class="scroll">
        <table id="view-table" class="modern-table">
          <tr class="modern-table__row">
            <th class="modern-table__header">ID</th>
            <th class="modern-table__header">Username</th>
            <th class="modern-table__header">Privilege Level</th>
            <th class="modern-table__header"></th>
            <th class="modern-table__header"></th>
          </tr>

          <?php
            require("create_db.php");

            function create_item($item, $cls) {
              $class = "modern-table__item " . $cls;
              echo "<td class='" . $class . "'>";
              echo $item;
              echo "</td>";
            }

            create_db();
            create_db_users();

            $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM users";
            $users_data = mysqli_query($conn, $sql);

            if (!$users_data) {
              die("Could not get data: " . mysql_error());
            }

            while ($row = mysqli_fetch_assoc($users_data)) {
              echo "<tr class='modern-table__row'>";
              create_item($row["id"], "row_id");
              create_item($row["username"], "row_username");
              create_item($row["privilege"], "row_privilege");

              $edit = "<a class='btn btn__manage btn__edit'>EDIT</a>";
              create_item($edit, "");

              $delete = "<a class='btn btn__manage btn__delete'>DEL</a>";
              create_item($delete, "");
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
  <script type="text/javascript">
    var array_btn_edit = document.getElementsByClassName("btn__edit");
    var array_btn_delete = document.getElementsByClassName("btn__delete");
    var array_row_id = document.getElementsByClassName("row_id");

    for (var i = 0; i < array_btn_edit.length; i++) {
      var btn_edit = array_btn_edit[i];
      var btn_delete = array_btn_delete[i];

      var row_id = array_row_id[i].innerHTML;
      var edit_url = "edit_users.php?id=" + row_id;
      var delete_url = "delete_users.php?id=" + row_id;

      btn_edit.href = edit_url;
      btn_delete.href = delete_url;
    }
  </script>
</body>

</html>
