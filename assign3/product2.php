<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>G L A C I E R | Skis</title>

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
          <li id="ctgry_2" class="ctgry__item"><h3>Freeride</h3></li>
          <li id="ctgry_3" class="ctgry__item"><h3>Powder</h3></li>
        </ul>
      </aside>

      <section id="display_1" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">All-Mountain</h3>

          <p class="desc__text">
            Just like it's snowboard counterpart, all-mountain skis are all-rounders and are designed for all kinds of terrain. They are versatile, and great for beginners that have yet to discover their style of skiing. For more info, click <a class="link-underline" href="https://www.mountainheaven.co.uk/blog/an-introduction-to-different-types-of-skis/">here</a>. <!-- Referenced from https://www.mountainheaven.co.uk/blog/an-introduction-to-different-types-of-skis/ -->
          </p>

          <p class="desc__text">
            Get all-mountain skis if you're a beginner, or can't decide which type of ski to get.
          </p>
        </article>

        <section class="cards items">
          <a href="product2_1.php" id="product2_1" class="card">
            <div class="card__cover">
              <h2 class="card__title">Range<span class="no-letter-spacing">r</span></h2>
            </div>
          </a>

          <a href="product2_2.php" id="product2_2" class="card">
            <div class="card__cover">
              <h2 class="card__title">Enforce<span class="no-letter-spacing">r</span></h2>
            </div>
          </a>

          <a href="product2_3.php" id="product2_3" class="card">
            <div class="card__cover">
              <h2 class="card__title">Ind<span class="no-letter-spacing">y</span></h2>
            </div>
          </a>
        </section>
      </section>

      <section id="display_2" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">Freeride</h3>

          <p class="desc__text">
            Freeride skis are designed for un-groomed terrain that have no set course or rules, thus called "freeriding". Although this may be the case, they can perform just as decently on groomed slopes, so it still rather versatile and you can use it for whatever kind of course you want. For more info, click <a class="link-underline" href="https://www.mountainheaven.co.uk/blog/an-introduction-to-different-types-of-skis/">here</a>. <!-- Referenced from https://www.mountainheaven.co.uk/blog/an-introduction-to-different-types-of-skis/ -->
          </p>

          <p class="desc__text">
            Get freeride skis if you want to experience skiing out in the free and the "wild".
          </p>
        </article>

        <section class="cards items">
          <a href="product2_4.php" id="product2_4" class="card">
            <div class="card__cover">
              <h2 class="card__title">Daemo<span class="no-letter-spacing">n</span> Birdi<span class="no-letter-spacing">e</span></h2>
            </div>
          </a>

          <a href="product2_5.php" id="product2_5" class="card">
            <div class="card__cover">
              <h2 class="card__title">Valhall<span class="no-letter-spacing">a</span></h2>
            </div>
          </a>

          <a href="product2_6.php" id="product2_6" class="card">
            <div class="card__cover">
              <h2 class="card__title">Kor<span class="no-letter-spacing">e</span></h2>
            </div>
          </a>
        </section>
      </section>

      <section id="display_3" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">Powder</h3>

          <p class="desc__text">
            Powder skis are designed differently than other skis in order to operate on the deep and soft snow known as "powder" in skiing and snowboarding terminology. Thus, it isn't as versatile as the other skis. Although this may be the case, powder skiing is among one of the best skiing experiences you can get, so it's totally worth it. For more info, click <a class="link-underline" href="https://www.mountainheaven.co.uk/blog/an-introduction-to-different-types-of-skis/">here</a>. <!-- Referenced from https://www.mountainheaven.co.uk/blog/an-introduction-to-different-types-of-skis/ -->
          </p>

          <p class="desc__text">
            If you're looking to ski on deep, soft snow, then powder snowboards are for you!
          </p>
        </article>

        <section class="cards items">
          <a href="product2_7.php" id="product2_7" class="card">
            <div class="card__cover">
              <h2 class="card__title">Yvett<span class="no-letter-spacing">e</span> Alchemis<span class="no-letter-spacing">t</span></h2>
            </div>
          </a>

          <a href="product2_8.php" id="product2_8" class="card">
            <div class="card__cover">
              <h2 class="card__title">Wrec<span class="no-letter-spacing">k</span> Creat<span class="no-letter-spacing">e</span></h2>
            </div>
          </a>

          <a href="product2_9.php" id="product2_9" class="card">
            <div class="card__cover">
              <h2 class="card__title">Pandor<span class="no-letter-spacing">a</span></h2>
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
