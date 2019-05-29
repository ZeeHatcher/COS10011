<header class="header">
    <a href="index.php">
      <img class="header__logo" src="images/company_logo_large.png" alt="Company Logo"/>
    </a>
  </header>

  <nav class="navbar">
    <a class="navbar__logo" href="index.php">
      <h2>GLACIE<span class="no-letter-spacing">R</span></h2>
    </a>

    <ul class="navbar__links">
      <li class="navbar__link navbar__link--dropdown">
        <h3 class="navbar__dropdown-title">Products</h3>
        <ul class="navbar__dropdown">
        </ul>
      </li>
      <li class="navbar__link"><a href="enquiry.php"><h3 class="navbar__link--on-hover">Rent</h3></a></li>

      <?php
        session_start();

        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
          if ($_SESSION["privilege"] == 1) {
            echo "<li class='navbar__link navbar__link--dropdown'>";
            echo "<h3 class='navbar__dropdown-title'>Manage</h3>";
            echo "<ul class='navbar__dropdown'>";
            echo "<li class='navbar__dropdown-link'><a href='view_enquiries.php'><h3 class='navbar__link--on-hover'>View Enquiries</h3></a></li>";
            echo "<li class='navbar__dropdown-link'><a href='view_users.php'><h3 class='navbar__link--on-hover'>View Users</h3></a></li>";
            echo "</ul>";
            echo "</li>";
          }

          echo "<li class='navbar__link'><a href='logout.php'><h3 class='navbar__link--on-hover'>Logout</h3></a></li>";
          echo "<li class='navbar__link'><h3 id='current_user' class='navbar__link--on-hover'>{$_SESSION['username']}</h3></li>";
        } else {
          echo "<li class='navbar__link'><a href='login.php'><h3 class='navbar__link--on-hover'>Login</h3></a></li>";
        }
      ?>
    </ul>

    <div class="navbar__menu">
      <div id="nav-btn" class="navbar__btn is-pos-y-center">&#9776;</div>
    </div>
    <ul id="nav" class="mobile-navbar__links">
      <li class="navbar__link"><a href="product1.php">
          <h3 class="navbar__link--on-hover">Snowboards</h3>
        </a>
      </li>
      <li class="navbar__link"><a href="product2.php">
          <h3 class="navbar__link--on-hover">Skis</h3>
        </a>
      </li>
      <li class="navbar__link"><a href="product3.php">
          <h3 class="navbar__link--on-hover">Camping Gear</h3>
        </a>
      </li>
      <li class="navbar__link">
        <a href="enquiry.php">
          <h3 class="navbar__link--on-hover">Rent</h3>
        </a>
      </li>
      <?php
        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
          if ($_SESSION["privilege"] == 1) {
            echo "<li class='navbar__link'><a href='view_enquiries.php'><h3 class='navbar__link--on-hover'>View Enquiries</h3></a></li>";
            echo "<li class='navbar__link'><a href='view_users.php'><h3 class='navbar__link--on-hover'>View Users</h3></a></li>";
          }

          echo "<li class='navbar__link'><a href='logout.php'><h3 class='navbar__link--on-hover'>Logout</h3></a></li>";
          echo "<li class='navbar__link'><h3 class='navbar__link--on-hover'>Welcome, {$_SESSION['username']}</h3></li>";
        } else {
          echo "<li class='navbar__link'><a href='login.php'><h3 class='navbar__link--on-hover'>Login</h3></a></li>";
        }
      ?>
    </ul>
  </nav>
