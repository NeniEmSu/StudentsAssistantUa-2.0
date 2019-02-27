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

[modal2, modalBtn2, closeBtn2] = [
    document.querySelector("#simpleModal2"),
    document.querySelector("#modalBtn2"),
    document.querySelector(".closeBtn2")
];

modalBtn2.addEventListener("click", () => {
    modal2.style.display = "block";
});
closeBtn2.addEventListener("click", () => {
    modal2.style.display = "none";
});
window.addEventListener("click", e => {
    if (e.target == modal2) {
        modal2.style.display = "none";
    }
});