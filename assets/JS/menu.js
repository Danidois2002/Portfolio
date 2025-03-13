document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector(".nav-menu");
    const body = document.body;

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", function (event) {
            event.stopPropagation();
            navMenu.classList.toggle("active");
            body.classList.toggle("menu-open");
        });

        document.addEventListener("click", function (event) {
            if (!menuToggle.contains(event.target) && !navMenu.contains(event.target)) {
                navMenu.classList.remove("active");
                body.classList.remove("menu-open");
            }
        });

        navMenu.addEventListener("click", function (event) {
            event.stopPropagation();
        });
    }
});