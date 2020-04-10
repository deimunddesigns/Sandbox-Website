document.addEventListener("DOMContentLoaded", function() {
  const navButton = document.getElementById("primary-navigation-button");
  const navMenu = document.getElementById("primary-navigation")
  navButton.addEventListener("click", () => {
    navButton.classList.toggle("change");
    navMenu.classList.toggle("hide-right");
    navMenu.classList.toggle("show-right");
  });
  console.log("working");
});