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

const swiper = new Swiper('#swiper-image', {
  loop: true,
  navigation: {
      nextEl: '.olives-slider-button-next',
      prevEl: '.olives-slider-button-prev'
  },
  pagination: {
      el: '.slider-pagination',
      clickable: true,
  },
});