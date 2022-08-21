const burger = document.querySelectorAll(".burger");
burger.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("menu").classList.toggle("active");
    document.getElementById("body").classList.toggle("lock");
  });
});

const gamesByGenre = document.querySelectorAll(".menu__game-genres");
gamesByGenre.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("genre-list").classList.toggle("active");
  });
});

const gameBurger = document.querySelectorAll(".game-burger");
gameBurger.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("game-menu").classList.toggle("active");
  });
});
const mediaQuery = window.matchMedia('(min-width: 768px)')
const gameSets = new Swiper('#game-sets', {
  loop: true,
  spaceBetween: 20,
  initialSlide: 2,
  centeredSlides: true,
  slidesPerView: 'auto',
  allowTouchMove: false,
  // breakpoints: {
  //   650: {
  //     slidesPerView: 1,
  //   },
  //   992: {
  //     slidesPerView: 2,
  //   },
  //   1300: {
  //     slidesPerView: 3,
  //   }
  // },
  navigation: {
    nextEl: '.game-sets-slider__next',
    prevEl: '.game-sets-slider__prev'
  },
  // pagination: {
  //     el: '.slider-pagination',
  //     clickable: true,
  // },
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

var detailSwiper = new Swiper("#swiper1", {
  spaceBetween: 10,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    992: {
      direction: "vertical",
    },
  },
});
var detailSwiper2 = new Swiper("#swiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: '.game-sets-slider__next',
    prevEl: '.game-sets-slider__prev'
  },
  thumbs: {
    swiper: detailSwiper,
  },
});

const gameCatalogSection = document.querySelectorAll(".game-catalog-section");
gameCatalogSection.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
  });
});

const search = document.querySelectorAll(".search");
search.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("search-wrapper").classList.toggle("active");
    document.getElementById("search__button").classList.toggle("active");
  });
});