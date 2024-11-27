document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById("menu-cart");
    const navbar = document.getElementById("navbar");
    menuIcon.addEventListener("click", () => {
      navbar.classList.toggle("active");
    });
  
  });
