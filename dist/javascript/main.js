gsap.set("#cta-container", { y: 200, opacity: 0 });

window.onload = () => {
  gsap.to("#cta-container", { y: -80, opacity: 1, duration: 1 });
};
