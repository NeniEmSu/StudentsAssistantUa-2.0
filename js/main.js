// Main Navigation 

// select DOM items

const menuBtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const menuNav = document.querySelector(".menu-nav");
const hamburgerMenuNav = document.querySelector(".hamburger-menu-nav");
const navItems = document.querySelectorAll(".nav-item");

//set initial state of menu
let showMenu = false;

menuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
    if (!showMenu) {
        menuBtn.classList.add("close");
        menu.classList.add("show");
        hamburgerMenu.classList.add("show");
        menuNav.classList.add("show");
        hamburgerMenuNav.classList.add("show");
        navItems.forEach(item => item.classList.add("show"));

        //set menu state
        showMenu = true;
    } else {
        menuBtn.classList.remove("close");
        menu.classList.remove("show");
        hamburgerMenu.classList.remove("show");
        menuNav.classList.remove("show");
        hamburgerMenuNav.classList.remove("show");
        navItems.forEach(item => item.classList.remove("show"));

        //set menu state
        showMenu = false;
    }
}