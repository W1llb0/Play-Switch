const burger = document.querySelectorAll(".burger");
burger.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("menu").classList.toggle("active");
  });
});

const gamesByGenre = document.querySelectorAll(".menu__game-genres");
gamesByGenre.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("genre-list").classList.toggle("active");
  });
});