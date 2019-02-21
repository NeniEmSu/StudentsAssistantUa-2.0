[modal, modalBtn, closeBtn] = [
    document.querySelector("#simpleModal"),
    document.querySelector("#modalBtn"),
    document.querySelector(".closeBtn")
];

modalBtn.addEventListener("click", () => {
    modal.style.display = "block";
});
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});
window.addEventListener("click", e => {
    if (e.target == modal) {
        modal.style.display = "none";
    }
});