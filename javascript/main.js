const sectionLinks = document.querySelectorAll(".primary-navbar__section-link");
const cardButtons = document.querySelectorAll(".card__button");

sectionLinks.forEach((link) => {
  // change the navbar link colour when clicked to
  // show which section is active.
  link.addEventListener("click", () => {
    sectionLinks.forEach((link) => {
      link.classList.remove("active");
    });

    link.classList.add("active");
  });
});

cardButtons.forEach((button) => {
  // flip the card when the more info button is clicked
  const card = button.parentElement.parentElement.parentElement;

  button.addEventListener("click", () => {
    console.log("Card Flipped");
    card.classList.toggle("flipped");
  });
});
