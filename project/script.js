document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById("menu-icon");
    const navbar = document.getElementById("navbar");
  
    if (menuIcon && navbar) {
      menuIcon.addEventListener("click", () => {
        navbar.classList.toggle("active");
        console.log("Menu toggled");
      });
    } else {
      console.error("Menu icon or navbar not found");
    }
  });