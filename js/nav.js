document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector(".nav");

    document.querySelector("#hamburger").addEventListener("click", () => {
        nav.classList.add("nav--open");
    });

    document.querySelector(".overlay").addEventListener("click", () => {
        nav.classList.remove("nav--open");
    });

});