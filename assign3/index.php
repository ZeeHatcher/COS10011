<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>G L A C I E R | Home</title>

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
    <section class="hero">
      <div class="hero__textbox">
        <h1 class="hero__title">Welcom<span class="no-letter-spacing">e</span> t<span class="no-letter-spacing">o</span> <span class="text-accent">GLACIE<span class="no-letter-spacing">R</span></span></h1>

        <p class="hero__desc">
          Are you looking for some good fun in the snow, but don't have the equipment?
        </p>

        <p class="hero__desc">
          Get started by viewing our collection of snow sports equipments!
        </p>

        <a class="btn hero__btn is-pos-x-center" href="#links">View Products</a>
      </div>

      <img class="hero__img" src="images/snow_mountain1.jpg" alt="Snow Mountain"/> <!-- https://pixnio.com/nature-landscapes/peaks/snow-mountain-sunset-sky-landscape-dawn-winter-nature-glacier# -->
    </section>

    <section>
      <div class="seperator">
        <h1 class="seperator__title">Wh<span class="no-letter-spacing">o</span> W<span class="no-letter-spacing">e</span> Ar<span class="no-letter-spacing">e</span></h1>
      </div>

      <article class="info">
        <h2 class="h__title">Info</h2>
        <p class="info__text">
          We are a group of snow-loving meatheads that just want to share the fun. We noticed that many people don't get to experience these kinds of sports due to the sheer price of the equipment required. We believe that everyone should experience snow sports at least once in their lifetime. So that's why we created Glacier.
        </p>

        <p class="info__text">
          Glacier provides a variety of equipment for snowboarding, skiing and even camping in the snow. They come in various sizes, weights, and types so you're bound to find something you like.
        </p>

        <p class="info__text">
          We hope you enjoy your stay here!
        </p>
      </article>
    </section>

    <section id="links">
      <div class="seperator">
        <h1 class="seperator__title">Product<span class="no-letter-spacing">s</span></h1>
      </div>

      <article class="info">
        <h2 class="h__title">Info</h2>
        <p class="info__text">
          Looking to snowboard, ski or camp?
          <br/>
          With the amount of variety that we provide, we guarantee that you'll find something you like.
        </p>
      </article>

      <div class="cards">
        <a href="product1.php" id="card-snowboard" class="card">
          <div class="card__cover">
            <h1 class="card__title">Sno<span class="no-letter-spacing">w</span><br/>board<span class="no-letter-spacing">s</span></h1>
          </div>
        </a>

        <a href="product2.php" id="card-ski" class="card">
          <div class="card__cover">
            <h1 class="card__title">Ski<span class="no-letter-spacing">s</span></h1>
          </div>
        </a>

        <a href="product3.php" id="card-camp" class="card">
          <div class="card__cover">
            <h1 class="card__title">Campin<span class="no-letter-spacing">g</span></h1>
          </div>
        </a>
      </div>
    </section>

    <section>
      <div class="seperator">
        <h1 class="seperator__title">Wh<span class="no-letter-spacing">y</span> Choos<span class="no-letter-spacing">e</span> U<span class="no-letter-spacing">s</span></h1>
      </div>

      <article id="benefit" class="info">
        <div>
          <h3 class="info__subtitle">High Quality Products</h3>
          <p class="info__text">
            To ensure your safety and enjoyment, Glacier provides high-quality products that have been widely received by the snow sports community. We ensure that once you get your hands on it, you won't have anything to worry about.
          </p>
        </div>

        <div>
          <h3 class="info__subtitle">A Great Bargain</h3>
          <p class="info__text">
            Snow sports equipment are rather expensive, so Glacier products are priced much lower so that even the  average Joe can experience snow sports. A once-in-a-lifetime experience for only a fraction of the price!
          </p>
        </div>

        <div>
          <h3 class="info__subtitle">Quick Delivery</h3>
          <p class="info__text">
            We want you to experience snow sports as soon as possible and for as long as possible with the limited time that we have nowadays. Therefore, you can expect delivery within 2-3 days after placing your order.
          </p>
        </div>
      </article>
    </section>
  </main>

  <?php
    include_once("footer.php");
  ?>
  
  <!-- JS -->
  <script src="script/enhancements.js"></script>
</body>
</html>
