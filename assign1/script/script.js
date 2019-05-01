var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf("/") + 1);

if (sPage == "enquiry.html") {
  var listProducts = [
    {code: "SB-AM01", name: "Lib Tech Cold Brew C2"},
    {code: "SB-AM02", name: "Endeavor Maverick"},
    {code: "SB-AM03", name: "Rossignol Meraki"},
    {code: "SB-FS01", name: "K2 Raygun"},
    {code: "SB-FS02", name: "Nidecker Venus"},
    {code: "SB-FS03", name: "GNU Klassy C2X"},
    {code: "SB-PW01", name: "Deus Powder Tools Pike"},
    {code: "SB-PW02", name: "Korua Shapes Pencil"},
    {code: "SB-PW03", name: "Bataleon Camel Toe"},
    {code: "SK-AM01", name: "Fischer Ranger"},
    {code: "SK-AM02", name: "Nordica Enforcer"},
    {code: "SK-AM03", name: "K2 Indy"},
    {code: "SK-FR01", name: "Black Crows Daemon Birdie"},
    {code: "SK-FR02", name: "RMU Valhalla"},
    {code: "SK-FR03", name: "Head Kore"},
    {code: "SK-PW01", name: "DPS Yvette Alchemist"},
    {code: "SK-PW02", name: "Lib Tech Wreckcreate"},
    {code: "SK-PW03", name: "Line Skis Pandora"},
    {code: "CP-TN01", name: "Minima 1 SL"},
    {code: "CP-TN02", name: "Minima 2 SL"},
    {code: "CP-TN03", name: "Minima 3 SL"},
    {code: "CP-BP01", name: "Eghen 25"},
    {code: "CP-BP02", name: "M4"},
    {code: "CP-BP03", name: "Snowset"}
  ];
  var formRent = document.forms["form-rent"];
  var selectCodes = formRent["product-code"];

  function update_subject() {
    for (i in listProducts) {
      if (sessionStorage.productCode == listProducts[i].code) {
        formRent["subject"].value = listProducts[i].name;
        break;
      } else {
        formRent["subject"].value = "";
      }
    }
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

  // Data Transfer Between Web Pages
  update_code();
  update_subject();

  // Data Transfer In The Same Page
  selectCodes.addEventListener("change", function() {
    for (var i = 0; i < selectCodes.length; i++) {
      if (selectCodes[i].selected) {
        sessionStorage.productCode = selectCodes[i].innerHTML;
      }
    }

    update_subject();
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
