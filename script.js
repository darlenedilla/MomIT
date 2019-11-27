jQuery(function() {
  jQuery("#scroll-arrow").click(function() {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery("#sub-page-button-section").offset().top
      },
      2000
    );
    jQuery("#scroll-arrow").css("animation-play-state", "paused");
  });

  burgerListener();
  searchBarListener();
  accordionListener();
});

// BurgerMenu Script
function burgerListener() {
  //   Variables:
  var burgerIcon = document.getElementById("burgerMenuIcon");
  var burgerLine1 = document.getElementById("burgerLine1");
  var burgerLine2 = document.getElementById("burgerLine2");
  var burgerLine3 = document.getElementById("burgerLine3");
  var burgerContent = document.getElementById("burgerContent");
  var burgerLongLine = document.getElementById("burgerLongLine");
  var burgerOpen = 0;

  //   Actual function to make it do the things and the stuff:
  burgerIcon.addEventListener("click", function() {
    if (burgerOpen == 0) {
      burgerLine1.classList.add("burgerCross1");
      burgerLine2.style.opacity = "0";
      burgerLine3.classList.add("burgerCross2");
      burgerContent.style.display = "block";
      burgerLongLine.style.display = "block";

      setTimeout(function() {
        burgerContent.style.opacity = "1";
        burgerLongLine.style.opacity = "1";
        burgerLongLine.style.height = "50vh";
      }, 100);

      burgerOpen = 1;
    } else {
      burgerLine1.classList.remove("burgerCross1");
      burgerLine2.style.opacity = "1";
      burgerLine3.classList.remove("burgerCross2");
      burgerContent.style.opacity = "0";

      setTimeout(function() {
        burgerContent.style.display = "none";
        burgerLongLine.style.display = "none";
        burgerLongLine.style.opacity = "0";
        burgerLongLine.style.height = "0vh";
      }, 100);

      burgerOpen = 0;
    }
  });
}

// search bar function

function searchBarListener() {
  // variables
  var searchBarInitial = document.getElementById("searchBarInitial");
  var s = document.getElementById("s");
  var burgerIcon = document.getElementById("burgerMenuIcon");
  var logo = document.getElementsByClassName("custom-logo-link");
  var searchBarShown = 0;

  //   actual listener
  searchBarInitial.addEventListener("click", function() {
    if (searchBarShown == 0) {
      //   hiding the logo
      for (let i = 0; i < 1; i++) {
        logo[i].style.opacity = "0";
      }

      s.style.opacity = "1";
      s.style.width = "50vw";
      searchBarShown = 1;

      searchBarInitial.style.left = "0";
      searchBarInitial.style.opacity = "1";
      burgerIcon.style.opacity = "0";
    } else {
      //   hiding the logo
      for (let i = 0; i < 1; i++) {
        logo[i].style.opacity = "1";
      }

      s.style.opacity = "0";
      s.style.width = "0vw";

      searchBarInitial.style.right = "0";
      searchBarInitial.style.left = null;
      searchBarInitial.style.opacity = "0";
      burgerIcon.style.opacity = "1";
      searchBarShown = 0;
    }
  });
}

// Accordion function
function accordionListener() {
  // variables
  var accordion_content = document.getElementsByClassName(
    "accordion-content-container"
  );
  var accordion_icon = document.getElementsByClassName("accordion-icon");
  var accordion_header = document.getElementsByClassName(
    "accordion-header-container"
  );

  for (let i = 0; i < accordion_header.length; i++) {
    accordion_header[i].addEventListener("click", function() {
      if (accordion_content[i].style.display == "block") {
        accordion_content[i].style.display = "none";
        accordion_icon[i].classList.toggle("fa-plus");
        accordion_icon[i].classList.toggle("fa-minus");
      } else {
        accordion_content[i].style.display = "block";
        accordion_icon[i].classList.toggle("fa-plus");
        accordion_icon[i].classList.toggle("fa-minus");
      }
    });
  }
}
