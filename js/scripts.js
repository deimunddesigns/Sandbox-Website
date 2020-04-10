document.addEventListener("DOMContentLoaded", function() {
  const navButton = document.getElementById("primary-navigation-button");
  navButton.addEventListener("click", () => {
    navButton.classList.toggle("change");
  });
  console.log("working");
});