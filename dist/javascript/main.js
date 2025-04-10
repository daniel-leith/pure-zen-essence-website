const navbarSectionLinks = document.querySelectorAll(
  ".primary-navbar__section-link"
);
const moreInfoCardButtons = document.querySelectorAll(
  ".card__more-info-button"
);
const closeCardButtons = document.querySelectorAll(".card__close-button");

navbarSectionLinks.forEach((link) => {
  // change the navbar link colour when clicked to
  // show which section is active.
  link.addEventListener("click", () => {
    navbarSectionLinks.forEach((link) => {
      link.classList.remove("active");
    });

    link.classList.add("active");
  });
});

moreInfoCardButtons.forEach((button) => {
  // flip the card when the more info button is clicked
  const card = button.parentElement.parentElement.parentElement;
  button.addEventListener("click", () => {
    console.log("Card Flipped");
    card.classList.toggle("flipped");
  });
});

closeCardButtons.forEach((button) => {
  // flip the card when the close button is clicked
  const card = button.parentElement.parentElement;

  button.addEventListener("click", () => {
    console.log("Card Flipped");
    card.classList.remove("flipped");
  });
});
