const hamburgerMenu = document.querySelector("#hamburger-menu");
const overlay = document.querySelector("#overlay");
const nav1 = document.querySelector("#menu-item-50");
const nav2 = document.querySelector("#menu-item-49");
const nav3 = document.querySelector("#menu-item-45");
const nav4 = document.querySelector("#menu-item-47");
const nav5 = document.querySelector("#menu-item-48");
const nav6 = document.querySelector("#menu-item-46");
const navItems = [nav1, nav2, nav3, nav4, nav5, nav6];

// Control Navigation Animation
function navAnimation(val1, val2) {
  navItems.forEach((nav, i) => {
    console.log(`slide-${val1}-${i + 1}`, `slide-${val2}-${i + 1}`);
    nav.classList.replace(`slide-${val1}-${i + 1}`, `slide-${val2}-${i + 1}`);
  });
}
function toggleNav() {
  // Toggle: Hamburger Open/Close
  hamburgerMenu.classList.toggle("active");

  //   Toggle: Menu Active
  overlay.classList.toggle("overlay-active");
  if (overlay.classList.contains("overlay-active")) {
    // Animate In - Overlay
    overlay.classList.replace("overlay-slide-left", "overlay-slide-right");

    // Animate In - Nav Items
    navAnimation("out", "in");
  } else {
    // Animate Out - Overlay
    overlay.classList.replace("overlay-slide-right", "overlay-slide-left");

    // Animate Out - Nav Items
    navAnimation("in", "out");
  }
}

// Events Listeners
hamburgerMenu.addEventListener("click", toggleNav);
navItems.forEach(nav => {
  nav.addEventListener("click", toggleNav);
});
//# sourceMappingURL=main.js.map
