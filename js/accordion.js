const accordion = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        let buttonToHide = document.getElementsByClassName("buttonToHide");
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            this.classList.add("buttonToHide");
            for (let i = 0; i < buttonToHide.length; i++) {
                buttonToHide[i].style.display = "block";
            }
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            this.classList.remove("buttonToHide");
            for (let i = 0; i < buttonToHide.length; i++) {
                buttonToHide[i].style.display = "none";
            }
        }
    });
}