<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>3
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
    <section class="product">
      <h2 class="h__title">Product</h2>
      <div id="product2_4" class="card product__img"></div>

      <article class="product__details">
        <div>
          <h3 class="product__property">Name</h3>
          <p class="product__value">Black Crows Daemon Birdie</p>
        </div>

        <div>
          <h3 class="product__property">Type</h3>
          <p class="product__value">Freeride</p>
        </div>

        <div>
          <h3 class="product__property">Code</h3>
          <p class="product__value">SK-FR01</p>
        </div>

        <div>
          <h3 class="product__property">Size</h3>
          <p class="product__value">177cm</p>
        </div>

        <div>
          <h3 class="product__property">Thickness</h3>
          <p class="product__value">99mm</p>
        </div>

        <div>
          <h3 class="product__property">Weight</h3>
          <p class="product__value">5.91kg</p>
        </div>

        <a id="product-btn" class="btn product__btn">Rent</a>
      </article>
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
