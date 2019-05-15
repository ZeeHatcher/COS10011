<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>R A D I A N C E</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"/>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
  <link rel="stylesheet" type="text/css" href="styles/style-mobile.css"/>
</head>
<body>
  <nav id="studentnav">
    <ul class="studentnav__items">
      <li class="studentnav__item"><a class="studentnav__link" href="aboutme1.php"><h3>Ian Ong</h3></a></li>
      <li class="studentnav__item studentnav__item--active"><a class="studentnav__link" href="aboutme2.php"><h3>Jonathan Seng</h3></a></li>
      <li class="studentnav__item"><a class="studentnav__link" href="aboutme3.php"><h3>Karyn Chong</h3></a></li>
    </ul>
  </nav>

  <main class="student">
    <section id="student__info">
      <h3 id="student__name">Jonathan Seng</h3>
      <p id="student__course">Bachelor Of Computer Science</p>
      <p id="student__id">101211476</p>

      <div id="student__photo">
        <img src="images/aboutme2.jpeg" alt="Jonathan Seng"/>
      </div>
    </section>

    <section>
      <h2 class="h__title">Student</h2>
      <table class="modern-table" id="student__contrib">
        <tr class="modern-table__row">
          <th class="modern-table__header">Contribs.</th>
          <th class="modern-table__header">Details</th>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">HTML</td>
          <td class="modern-table__item">
            <ul>
              <li class="bullet">Structure for header, navbar, and footer</li>
              <li class="bullet">Structure for index.html</li>
            </ul>
          </td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">CSS</td>
          <td class="modern-table__item">
            <ul>
              <li class="bullet">Styles for header, navbar, and footer</li>
              <li class="bullet">Styles for index.html</li>
              <li class="bullet">Styles for mobile view</li>
            </ul>
          </td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">JavaScript</td>
          <td class="modern-table__item">
            <ul>
              <li class="bullet">JS for mobile navbar</li>
              <li class="bullet">JS for product*.html</li>
            </ul>
          </td>
        </tr>

        <tr class="modern-table__row">
          <td class="modern-table__item">Content</td>
          <td class="modern-table__item">
            <ul>
              <li class="bullet">Images and info for index.html</li>
              <li class="bullet">Images and info for product1.html</li>
              <li class="bullet">Images and info for product1_*.html</li>
              <li class="bullet">Images and info for enhancements.html</li>
            </ul>
          </td>
        </tr>
      </table>
    </section>

    <section id="student__additional">
      <div class="seperator">
        <h1 class="seperator__title">Additiona<span class="no-letter-spacing">l</span> Inf<span class="no-letter-spacing">o</span></h1>
      </div>

      <article id="student__misc">
        <h2 class="h__title">Additional Info</h2>
        <p class="student__chars">
          <span class="student__property">Hometown:</span> Kuching
        </p>

        <p class="student__chars">
          <span class="student__property">Ethnicity:</span> Chinese
        </p>

        <p class="student__chars">
          <span class="student__property">Hobbies:</span> Swimming
        </p>
      </article>
    </section>
  </main>

  <footer class="student is-pos-bottom is-pos-x-center">
    <p id="student__email">
      Email: <a class="link-underline" href="mailto:jonathan.seng0810@gmail.com">jonathan.seng0810@gmail.com</a>
    </p>

    <a href="index.php" id="student__btn" class="btn">Back To Site</a>
  </footer>
</body>
</html>
