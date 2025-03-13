document.addEventListener("DOMContentLoaded", () => {
    const projets = document.querySelectorAll(".projet");

    projets.forEach(projet => {
        projet.addEventListener("mouseover", () => {
            projet.style.boxShadow = "0 0 20px rgba(0, 123, 255, 0.8)";
            projet.style.transform = "scale(1.02)";
            projet.style.transition = "all 0.3s";
        });

        projet.addEventListener("mouseout", () => {
            projet.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
            projet.style.transform = "scale(1)";
        });
    });
});