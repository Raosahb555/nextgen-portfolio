document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".animate");
  const reveal = () => {
    elements.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        el.classList.add("visible");
      }
    });
  };
  window.addEventListener("scroll", reveal);
  reveal();
});
