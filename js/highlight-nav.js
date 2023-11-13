const sections = document.querySelectorAll(".anchor[id]");
window.addEventListener("scroll", navHighlighter);
let active = null;

function navHighlighter() {
  let scrollY = window.pageYOffset; // Get current scroll position

  sections.forEach((current) => {
    const section = current.nextElementSibling;
    const sectionHeight = section.offsetHeight;
    const sectionTop = current.offsetTop - 120;
    let sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      active = document.querySelector(".nav a[href*=" + sectionId + "]");
    }

    let nav = document.querySelector(".nav a[href*=" + sectionId + "]");
    if (nav) {
      nav.classList.remove("active");
    }
  });
  active.classList.add("active");
}
