<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>G L A C I E R | Camping</title>

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
          <li id="ctgry_1" class="ctgry__item"><h3>Tents</h3></li>
          <li id="ctgry_2" class="ctgry__item"><h3>Backpacks</h3></li>
        </ul>
      </aside>

      <section id="display_1" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">Tents</h3>

          <p class="desc__text">
            When you're camping in the snow, you're going to need a tent that can withstand the harsh cold weather. These tents are designed to be wet-resistant and durable so that you may camp knowing that you'll be safe and sound. They are also lightweight so that you won't be overencumbered when trekking towards your camp site. There are 3 different types with different sizes.
          </p>

          <ol class="desc__list">
            <li>The small-sized Minima 1 for 1 person</li>
            <li>The medium-sized Minima 2 for 2 people</li>
            <li>The large-sized Minima 3 for 3 people</li>
          </ol>
        </article>

        <section class="cards items">
          <a href="product3_1.php" id="product3_1" class="card">
            <div class="card__cover">
              <h2 class="card__title">Minim<span class="no-letter-spacing">a</span> <span class="no-letter-spacing">1</span></h2>
            </div>
          </a>

          <a href="product3_2.php" id="product3_2" class="card">
            <div class="card__cover">
              <h2 class="card__title">Minim<span class="no-letter-spacing">a</span> <span class="no-letter-spacing">2</span></h2>
            </div>
          </a>

          <a href="product3_3.php" id="product3_3" class="card">
            <div class="card__cover">
              <h2 class="card__title">Minim<span class="no-letter-spacing">a</span> <span class="no-letter-spacing">3</span></h2>
            </div>
          </a>
        </section>
      </section>

      <section id="display_2" class="display">
        <h2 class="h__title">Product</h2>
        <article class="desc">
          <h3 class="desc__title">Backpacks</h3>

          <p class="desc__text">
            When it comes to snow camping, there are quite a number of equipment that you are required to bring together with you on your trip. Thus, a decently-sized backpack is required in order to store all those items. They also need to be manufactured to be durable and resistant to the cold, harsh conditions during camping. We provide various backpacks that fit those criteria and some more. These backpacks will do well for any camper, from beginner to veteran. Take your pick!
          </p>
        </article>

        <section class="cards items">
          <a href="product3_4.php" id="product3_4" class="card">
            <div class="card__cover">
              <h2 class="card__title">Eghe<span class="no-letter-spacing">n</span> 3<span class="no-letter-spacing">5</span></h2>
            </div>
          </a>

          <a href="product3_5.php" id="product3_5" class="card">
            <div class="card__cover">
              <h2 class="card__title">M<span class="no-letter-spacing">2</span></h2>
            </div>
          </a>

          <a href="product3_6.php" id="product3_6" class="card">
            <div class="card__cover">
              <h2 class="card__title">Snowse<span class="no-letter-spacing">t</span></h2>
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
