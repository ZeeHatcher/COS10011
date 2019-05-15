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
    <section class="product">
      <h2 class="h__title">Product</h2>
      <div id="product1_3" class="card product__img"></div>

      <article class="product__details">
        <div>
          <h3 class="product__property">Name</h3>
          <p class="product__value">Rossignol Meraki</p>
        </div>

        <div>
          <h3 class="product__property">Type</h3>
          <p class="product__value">All-Mountain</p>
        </div>

        <div>
          <h3 class="product__property">Code</h3>
          <p class="product__value">SB-AM03</p>
        </div>

        <div>
          <h3 class="product__property">Size</h3>
          <p class="product__value">150cm</p>
        </div>

        <div>
          <h3 class="product__property">Thickness</h3>
          <p class="product__value">240mm</p>
        </div>

        <div>
          <h3 class="product__property">Weight</h3>
          <p class="product__value">6.01kg</p>
        </div>

        <a id="product-btn" class="btn product__btn">Rent</a>
      </article>
    </section>
  </main>

  <?php
    include_once("header.php");
  ?>

  <!-- JS -->
  <script src="script/enhancements.js"></script>
  <script src="script/script.js"></script>
</body>
</html>
