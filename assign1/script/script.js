window.onload = function() {
  // Data Transfer Between Web Pages
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
    sessionStorage.productName = get_product_detail("Name");
    sessionStorage.productCode = get_product_detail("Code");

    window.location = "enquiry.html";
  });

  // Data Transfer In The Same Page

  // Data Validation And Input Checking Of Forms

  // Populate Drop-Down List Using JavaScript
}
