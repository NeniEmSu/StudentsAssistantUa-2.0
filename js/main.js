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

(function () {

    function showSlide(n) {
        slides[currentSlide].classList.remove("active-slide");
        slides[n].classList.add("active-slide");
        currentSlide = n;

        if (currentSlide === 0) {
            previousButton.style.display = "none";
        } else {
            previousButton.style.display = "inline-block";
        }

        if (currentSlide === slides.length - 1) {
            nextButton.style.display = "none";
            submitButton.style.display = "inline-block";
        } else {
            nextButton.style.display = "inline-block";
            submitButton.style.display = "none";
        }
    }


    function showNextSlide() {
        showSlide(currentSlide + 1);
    }

    function showPreviousSlide() {
        showSlide(currentSlide - 1);
    }

    let previousButton = document.getElementById("previous");
    let nextButton = document.getElementById("next");
    let slides = document.querySelectorAll(".slide");
    let checkButton = document.getElementById("check");
    let currentSlide = 0;

    showSlide(0);

    // on submit, show results
    checkButton.addEventListener("click", checkAnswer);
    submitButton.addEventListener("click", showResults);
    previousButton.addEventListener("click", showPreviousSlide);
    nextButton.addEventListener("click", showNextSlide);
})();