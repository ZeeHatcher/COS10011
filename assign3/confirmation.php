<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>G L A C I E R | Confirmation</title>

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
        <h1 class="seperator__title">Confir<span class="no-letter-spacing">m</span></h1>
      </div>

      <form name="confirm-rent" action="#">
        <fieldset>
          <legend>
            Persona<span class="no-letter-spacing">l</span>
          </legend>

          <div class="form__grid">
            <label for="fullname">Name: </label>
            <input id="fullname" name="fullname" type="text" readonly="readonly" />

            <label for="email">Email Address: </label>
            <input id="email" name="email" type="text" readonly="readonly" />

            <label for="fulltele">Telephone Number: </label>
            <input id="fulltele" name="fulltele" type="text" size="1" readonly="readonly" />
          </div>
        </fieldset>

        <fieldset>
          <legend>
            Addres<span class="no-letter-spacing">s</span>
          </legend>

          <div class="form__grid">
            <label for="street">Street Address: </label>
            <input id="street" name="street_address" type="text" readonly="readonly" />

            <label for="city">City/Town: </label>
            <input id="city" name="city" type="text" readonly="readonly" />

            <label for="state">State: </label>
            <input id="state" name="state" type="text" readonly="readonly" />

            <label for="postcode">Postcode: </label>
            <input id="postcode" name="postcode" type="text" readonly="readonly" />
          </div>
        </fieldset>

        <fieldset>
          <legend>
            Product<span class="no-letter-spacing">s</span>
          </legend>

          <div class="form__grid">
            <label for="product-code">Product Code: </label>
            <input id="product-code" name="product-code" type="text" readonly="readonly" />

            <label for="subject">Subject: </label>
            <input type="text" id="subject" name="subject" value="" readonly="readonly"/>

            <label for="duration">Rental Duration: </label>
            <div>
              <input id="duration" name="duration" type="text" size="2" readonly="readonly" />
              <span class="form__col-2">week(s)</span>
            </div>

            <label for="comments">Comments: </label>
            <textarea id="comments" name="comments" rows="4" readonly="readonly"></textarea>
          </div>
        </fieldset>

        <article class="info">
          <h2 class="h__title">Confirmation</h2>
          <p class="info__text">
            Please confirm the details that you have entered are accurate before submission.
          </p>
        </article>

        <div class="form__btns">
          <input id="btn-cancel" class="btn form__btn" type="reset" value="Cancel" />
          <input id="btn-submit" class="btn form__btn" type="submit" value="Confirm" />
        </div>
      </form>
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
