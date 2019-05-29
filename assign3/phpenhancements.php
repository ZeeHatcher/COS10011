<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>P H P _ E N H A N C E M E N T S</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"/>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
  <link rel="stylesheet" type="text/css" href="styles/style-mobile.css"/>
</head>
<body>
  <h1 class="enhancement__title">
    PHP Enhancement<span class="no-letter-spacing">s</span>

    <a href="enhancements2.php" class="enhancement__btn enhancement__btn--left is-pos-y-center">&#60;</a>
  </h1>

  <article class="info enhancement__info">
    <h2 class="text-accent">User Management Module</h2>

    <p>
      To create the User Management Module, a new table called "users" was created in the database. Within this table, the users information (id, username, password, privilege level) were stored. This table is where the user login system retrieves and sends user accounts. In <a class="link-underline" href="register.php">register.php</a>, the user will enter a username and password for their new account. When submitting the form, the PHP will validate the inputs and check the "users" table for any similar usernames. If the submit is successful, the account will be saved in the table with a privilege level of "0", which is for the User level. The entered password will also be hashed with the "password_hash" function so that the security of the password can be ensured.
    </p>

    <p>
      When submitting the form in <a class="link-underline" href="login.php">login.php</a>, the username and password will be checked with the existing accounts within the "users" table. This is done by looping through the records after querying the database for the table. If there is a match, then login is successful, and new $_SESSION variables will be created. These variables are used to store the "logged_in" state, the id, username and the privilege level of the user. With these $_SESSION variables, other .php files are able to use the data stored in them. In the context of this assignment, the team used the data to change the links within the navigation bar. For example, if the user is logged in and is under the Admin Level(1) privilege, they will have access to additional pages that otherwise are inaccessible by User Level(0) users. To store $_SESSION variables, the session_start() has to be called first to initialize a session. Afterwards, by indexing the variable name and giving it a value, a $_SESSION variable will be created. For example, "$_SESSION['username'] = $username".
    </p>

    <p>
      As an "admin", the user will be able to access and view the website database, in pages such as <a class="link-underline" href="view_enquiries.php">view_enquiries.php</a> and <a class="link-underline" href="view_users.php">view_users.php</a>. The records within the tables are displayed on the page in a presentable format. This is done by looping through the records of the users table and creating the HTML dynamically using PHP. The user will also be able to edit the records for the accounts in the "users" table. After editing the inputs, the table will be queried with "UPDATE" in order to change the records in the table. There is also a function to delete the user records in the table with the use of the "DELETE" query. In order to edit or delete the corresponding record, the ID of the record is used as the condition during the query.
    </p>

    <p>
      NOTE: After the creation of a new “users” table, a master user account will automatically be added into the table. The username is “master” and the password is “master”. 
    </p>

    <hr/>
  </article>

  <a href="index.php" class="btn is-pos-x-center">Back To Site</a>
</body>
</html>
