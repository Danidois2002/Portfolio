document.addEventListener("DOMContentLoaded", () => {
    const competences = document.querySelectorAll(".competence");

    competences.forEach(competence => {
        competence.addEventListener("mouseover", () => {
            competence.style.boxShadow = "0 0 20px rgba(0, 123, 255, 0.8)";
        });

        competence.addEventListener("mouseout", () => {
            competence.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
        });
    });
});