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
