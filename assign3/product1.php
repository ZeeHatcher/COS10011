<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>G L A C I E R | Snowboards</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"/>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
  <link rel="stylesheet" type="text/css" href="styles/style-mobile.css"/>
</head>
<body>
  <?php
    include_once("header.php");
  ?>

  <main>
    <section class="grid">
      <h2 class="h__title">Products</h2>
      <aside class="ctgry">
        <h3 class="ctgry__title">Categories</h3>

        <ul class="ctgry__list">
          <li id="ctgry_1" class="ctgry__item"><h3>All-Mountain</h3></li>
          <li id="ctgry_2" class="ctgry__item"><h3>Freestyle</h3></li>
          <li id="ctgry_3" class="ctgry__item"><h3>Powder</h3></li>
        </ul>
      </aside>

      <section id="display_1" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">All-Mountain</h3>

          <p class="desc__text">
            All-mountain snowboards are your everyday, all-rounder snowboards that can be used on all kinds of terrain, and on any part of a mountain. They are versatile, and a great go-to for beginners that are taking their first steps into snowboarding. Due to their versatility, it's great for the kinds of people that want to try out all styles of snowboarding. For more info, click <a class="link-underline" href="https://www.rei.com/learn/expert-advice/snowboard.html">here</a>.
          </p> <!-- Referenced from https://www.rei.com/learn/expert-advice/snowboard.html -->

          <p class="desc__text">
            Get an all-mountain snowboard if you're just starting out, or you're unsure which to choose.
          </p>
        </article>

        <section class="cards items">
          <a href="product1_1.php" id="product1_1" class="card">
            <div class="card__cover">
              <h2 class="card__title">Col<span class="no-letter-spacing">d</span> Bre<span class="no-letter-spacing">w</span> C<span class="no-letter-spacing">2</span></h2>
            </div>
          </a>

          <a href="product1_2.php" id="product1_2" class="card">
            <div class="card__cover">
              <h2 class="card__title">Maveric<span class="no-letter-spacing">k</span></h2>
            </div>
          </a>

          <a href="product1_3.php" id="product1_3" class="card">
            <div class="card__cover">
              <h2 class="card__title">Merak<span class="no-letter-spacing">i</span></h2>
            </div>
          </a>
        </section>
      </section>

      <section id="display_2" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">Freestyle</h3>

          <p class="desc__text">
            Freestyle snowboards are for people that want more fun and action. It's lighter, shorter and more flexible, allowing for more maneuverability. These type of snowboards are not recommended for beginners though, since the lightness and shortness can affect stability. For more info, click <a class="link-underline" href="https://www.rei.com/learn/expert-advice/snowboard.html">here</a>. <!-- Referenced from https://www.rei.com/learn/expert-advice/snowboard.html -->
          </p>

          <p class="desc__text">
            If you're more experienced and want to push your limits, try out freestyle snowboards!
          </p>
        </article>

        <section class="cards items">
          <a href="product1_4.php" id="product1_4" class="card">
            <div class="card__cover">
              <h2 class="card__title">Raygu<span class="no-letter-spacing">n</span></h2>
            </div>
          </a>

          <a href="product1_5.php" id="product1_5" class="card">
            <div class="card__cover">
              <h2 class="card__title">Venu<span class="no-letter-spacing">s</span></h2>
            </div>
          </a>

          <a href="product1_6.php" id="product1_6" class="card">
            <div class="card__cover">
              <h2 class="card__title">Klass<span class="no-letter-spacing">y</span> C2<span class="no-letter-spacing">X</span></h2>
            </div>
          </a>
        </section>
      </section>

      <section id="display_3" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">Powder</h3>

          <p class="desc__text">
            Powder refers to deep powder snow. It's soft, deep snow that most skiiers and snowboarders love. Powder snowboards are designed with deep snow in mind, so it has a significantly different profile compared to other snowboard types. Thus, it won't be as usable on other terrains. For more info, click <a class="link-underline" href="https://www.rei.com/learn/expert-advice/snowboard.html">here</a>. <!-- Referenced from https://www.rei.com/learn/expert-advice/snowboard.html -->
          </p>

          <p class="desc__text">
            If you're experienced enough with snowboarding, and want a taste of deep, soft powder, then powder snowboards are your choice.
          </p>
        </article>

        <section class="cards items">
          <a href="product1_7.php" id="product1_7" class="card">
            <div class="card__cover">
              <h2 class="card__title">Pik<span class="no-letter-spacing">e</span></h2>
            </div>
          </a>

          <a href="product1_8.php" id="product1_8" class="card">
            <div class="card__cover">
              <h2 class="card__title">Penci<span class="no-letter-spacing">l</span></h2>
            </div>
          </a>

          <a href="product1_9.php" id="product1_9" class="card">
            <div class="card__cover">
              <h2 class="card__title">Came<span class="no-letter-spacing">l</span> To<span class="no-letter-spacing">e</span></h2>
            </div>
          </a>
        </section>
      </section>
    </section>
  </main>

  <?php
    include_once("footer.php");
  ?>

  <!-- JS -->
  <script src="script/enhancements.js"></script>
</body>
</html>
