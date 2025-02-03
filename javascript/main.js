window.onload = () => {
  const navbar = document.querySelector("#main-navbar");
  const menuIcon = document.querySelector("#menu-button");

  menuIcon.addEventListener("click", () => {
    console.log("Menu button clicked");
    navbar.classList.toggle("bottom-0");
  });
};
