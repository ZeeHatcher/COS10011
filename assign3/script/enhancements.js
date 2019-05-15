// Mobile Navbar Button
var btn = document.getElementById("nav-btn");
var nav = document.getElementById("nav");

var arrayCategories = ["Snowboards", "Skis", "Camping"]

function create_dropdown(p) {
  var parent = document.getElementsByClassName(p)[0];

  for (var i = 0; i < arrayCategories.length; i++) {
    var link = "product" + (i + 1) + ".php";
    var categoryName = arrayCategories[i];

    var li = document.createElement("li");
    li.className = "navbar__dropdown-link";

    var a = document.createElement("a");
    a.href = link;

    var h3 = document.createElement("h3");
    h3.className = "navbar__link--on-hover";
    h3.innerHTML = categoryName;

    a.appendChild(h3);
    li.appendChild(a);
    parent.appendChild(li);
  }
}

function toggleNav() {
  var toggled = nav.style.display == "block";

  if (toggled) {
    nav.style.display = "none";
  } else {
    nav.style.display = "block";
  }
}

create_dropdown("navbar__dropdown");
btn.addEventListener("click", toggleNav, false);

var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf("/") + 1);

if (sPage == "product1.php" || sPage == "product2.php" || sPage == "product3.php") {
  // product*.html category change
  var displays = document.getElementsByClassName("display");
  var btns = document.getElementsByClassName("ctgry__item");

  function changeDisplay(id) {
    id++;
    var target_id = "display_" + id.toString();
    var btn_id = "ctgry_" + id.toString();
    var element = document.getElementById(target_id);
    var btn = document.getElementById(btn_id);

    var i;
    for (i = 0; i < displays.length; i++) {
      displays[i].style.display = "none";
      btns[i].className = "ctgry__item";
    }

    element.style.display = "block";
    btn.className = "ctgry__item ctgry__item--active";
  }

  var i;
  for (i = 0; i < btns.length; i++) {
    let index = i;
    btns[index].addEventListener("click", function() { changeDisplay(index) }, false)
  }

  changeDisplay(0);
} else if (sPage == "enquiry.php") {
  // Preview page prior feedback form submission
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
} else if (sPage == "confirmation.php") {
  var confirmRent = document.forms["confirm-rent"];

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
}
