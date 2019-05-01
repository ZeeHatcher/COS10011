var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf("/") + 1);

if (sPage == "enquiry.html") {
  var productSnowboards = [
    {code: "SB-AM01", name: "Lib Tech Cold Brew C2"},
    {code: "SB-AM02", name: "Endeavor Maverick"},
    {code: "SB-AM03", name: "Rossignol Meraki"},
    {code: "SB-FS01", name: "K2 Raygun"},
    {code: "SB-FS02", name: "Nidecker Venus"},
    {code: "SB-FS03", name: "GNU Klassy C2X"},
    {code: "SB-PW01", name: "Deus Powder Tools Pike"},
    {code: "SB-PW02", name: "Korua Shapes Pencil"},
    {code: "SB-PW03", name: "Bataleon Camel Toe"}
  ];

  var productSkis = [
    {code: "SK-AM01", name: "Fischer Ranger"},
    {code: "SK-AM02", name: "Nordica Enforcer"},
    {code: "SK-AM03", name: "K2 Indy"},
    {code: "SK-FR01", name: "Black Crows Daemon Birdie"},
    {code: "SK-FR02", name: "RMU Valhalla"},
    {code: "SK-FR03", name: "Head Kore"},
    {code: "SK-PW01", name: "DPS Yvette Alchemist"},
    {code: "SK-PW02", name: "Lib Tech Wreckcreate"},
    {code: "SK-PW03", name: "Line Skis Pandora"}
  ];

  var productCamping = [
    {code: "CP-TN01", name: "Minima 1 SL"},
    {code: "CP-TN02", name: "Minima 2 SL"},
    {code: "CP-TN03", name: "Minima 3 SL"},
    {code: "CP-BP01", name: "Eghen 25"},
    {code: "CP-BP02", name: "M4"},
    {code: "CP-BP03", name: "Snowset"}
  ];

  var productCategories = [
    {category: "Snowboards", products: productSnowboards},
    {category: "Skis", products: productSkis},
    {category: "Camping", products: productCamping}
  ];

  var formRent = document.forms["form-rent"];
  var selectCodes = formRent["product-code"];

  function get_subject() {
    for (var indexCategory in productCategories) {
      var category = productCategories[indexCategory];

      for (indexProduct in category.products) {
        var product = category.products[indexProduct];

        if (sessionStorage.productCode == product.code) {
          return product.name;
        }
      }
    }

    return "";
  }

  function update_code() {
    for (var i = 0; i < selectCodes.length; i++) {
      if (sessionStorage.productCode == selectCodes[i].innerHTML) {
        selectCodes[i].selected = true;
        break;
      }
    }
  }

  // Populate Drop-Down List Using JavaScript
  function create_category(parentID) {
    var parent = document.getElementById(parentID);

    for (var indexCategory in productCategories) {
      var categoryName = productCategories[indexCategory].category

      var optgroupNew = document.createElement("optgroup");
      optgroupNew.label = categoryName;
      optgroupNew.id = categoryName.toLowerCase();

      parent.appendChild(optgroupNew);
    }
  }

  function create_options(category) {
    var parent = document.getElementById(category.toLowerCase());

    for (var indexCategory in productCategories) {
      if (category == productCategories[indexCategory].category) {
        products = productCategories[indexCategory].products

        for (indexProduct in products) {
          var product = products[indexProduct];

          var optionNew = document.createElement("option");
          optionNew.innerHTML = product.code;
          optionNew.value = product.code.toLowerCase();

          parent.appendChild(optionNew);
        }
      }
    }
  }

  create_category("product-code");
  create_options("Snowboards");
  create_options("Skis");
  create_options("Camping");

  // Data Transfer Between Web Pages
  update_code();
  formRent["subject"].value = get_subject();

  // Data Transfer In The Same Page
  selectCodes.addEventListener("change", function() {
    for (var i = 0; i < selectCodes.length; i++) {
      if (selectCodes[i].selected) {
        sessionStorage.productCode = selectCodes[i].innerHTML;
      }
    }

    formRent["subject"].value = get_subject();
  });

  // Data Validation And Input Checking Of Forms
  function check_length(input, max = Infinity, min = 0) {
    return (input.value.length > min && input.value.length <= max);
  }

  function check_pattern(input, pattern) {
    return (input.value.match(pattern))
  }

  function check_selected(input) {
    for (var i = 1; i < input.length; i++) {
      if (input[i].selected) {
        return true;
      }
    }

    return false;
  }

  function check_fields() {
    var msgError = "";

    checkFirstName = check_length(formRent["first_name"], 25) && check_pattern(formRent["first_name"], "^[A-Za-z]+$");
    if (!checkFirstName) {
      msgError += "Please enter a valid First Name.\n";
    }

    checkLastName = check_length(formRent["last_name"], 25) && check_pattern(formRent["last_name"], "^[A-Za-z]+$");
    if (!checkLastName) {
      msgError += "Please enter a valid Last Name.\n";
    }

    checkEmail = check_length(formRent["email"]) && check_pattern(formRent["email"], "^[A-Za-z0-9._]+@[a-z]+(.com)$");
    if (!checkEmail) {
      msgError += "Please enter a valid Email Address.\n";
    }

    checkTeleFront = check_length(formRent["tele_front"], 3, 2) && check_pattern(formRent["tele_front"], "^[0-9]+$");
    checkTeleBack = check_length(formRent["tele_back"], 7) && check_pattern(formRent["tele_back"], "^[0-9]+$");
    if (!(checkTeleFront && checkTeleBack)) {
      msgError += "Please enter a valid Telephone Number.\n";
    }

    checkStreet = check_length(formRent["street_address"], 40);
    if (!checkStreet) {
      msgError += "Please enter a valid Street Address.\n";
    }

    checkCity = check_length(formRent["city"], 20);
    if (!checkCity) {
      msgError += "Please enter a valid City/Town.\n"
    }

    checkState = check_selected(formRent["state"]);
    if (!checkState) {
      msgError += "Please choose a State.\n";
    }

    checkPostcode = check_length(formRent["postcode"], 5, 4) && check_pattern(formRent["postcode"], "^[0-9]+$");
    if (!checkPostcode) {
      msgError += "Please enter a valid Postcode.\n";
    }

    checkProduct = check_selected(formRent["product-code"]);
    if (!checkProduct) {
      msgError += "Please choose a Product Code.\n";
    }

    checkSubject = check_length(formRent["subject"]);
    if (!checkSubject) {
      msgError += "Please enter a Subject.\n";
    }

    checkDuration = check_pattern(formRent["duration"], "^[0-9]+$");
    if (!checkDuration) {
      msgError += "Please enter a valid Duration.";
    }

    return msgError;
  }

  function set_sess() {
    // Concatenate certain input fields
    fullName = formRent["first_name"].value + " " + formRent["last_name"].value;
    fullTele = formRent["tele_front"].value + "-" + formRent["tele_back"].value;

    sessionStorage.userName = fullName;
    sessionStorage.userEmail = formRent["email"].value;
    sessionStorage.userTele = fullTele;
    sessionStorage.userAddress = formRent["street_address"].value;
    sessionStorage.userCity = formRent["city"].value;

    for (var i = 1; i < formRent["state"].length; i++) {
      var option = formRent["state"][i];
      if (option.selected) {
        sessionStorage.userState = option.innerHTML;
        break;
      }
    }

    sessionStorage.userPostcode = formRent["postcode"].value;

    for (var i = 1; i < formRent["product-code"].length; i++) {
      var option = formRent["product-code"][i];
      if (option.selected) {
        sessionStorage.productCode = option.innerHTML;
        break;
      }
    }

    sessionStorage.productSubject = formRent["subject"].value;
    sessionStorage.productDuration = formRent["duration"].value;
    sessionStorage.productComment = formRent["comments"].value;
  }

  formRent.addEventListener("submit", function(event) {
    event.preventDefault();
    var msgError = check_fields();

    if (msgError == "") {
      console.log("SUBMIT");
      set_sess();
      window.location = "confirmation.html";
    } else {
      alert(msgError);
    }
  });

} else if (sPage == "confirmation.html") {
  var confirmRent = document.forms["confirm-rent"];
  var btnCancel = document.getElementById("btn-cancel");

  confirmRent["fullname"].value = sessionStorage.userName;
  confirmRent["email"].value = sessionStorage.userEmail;
  confirmRent["fulltele"].value = sessionStorage.userTele;
  confirmRent["street_address"].value = sessionStorage.userAddress;
  confirmRent["city"].value = sessionStorage.userCity;
  confirmRent["state"].value = sessionStorage.userState;
  confirmRent["postcode"].value = sessionStorage.userPostcode;
  confirmRent["product-code"].value = sessionStorage.productCode;
  confirmRent["subject"].value = sessionStorage.productSubject;
  confirmRent["duration"].value = sessionStorage.productDuration;
  confirmRent["comments"].value = sessionStorage.productComment;

  btnCancel.addEventListener("click", function(event) {
    event.preventDefault();

    sessionStorage.clear();
    window.location = "enquiry.html";
  });
} else {
  var btnRent = document.getElementById("product-btn");

  function get_product_detail(target) {
    var productProperties = document.getElementsByClassName("product__property");
    var productDetails = document.getElementsByClassName("product__value");

    for (var i = 0; i < productProperties.length; i++) {
      var property = productProperties[i].innerHTML

      if (property == target) {
        return productDetails[i].innerHTML;
      }
    }
  }

  btnRent.addEventListener("click", function() {
    sessionStorage.productCode = get_product_detail("Code");

    window.location = "enquiry.html";
  });
}
