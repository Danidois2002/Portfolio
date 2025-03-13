document.addEventListener("DOMContentLoaded", () => {
    const photoContainer = document.querySelector(".photo-container");

    photoContainer.addEventListener("mouseover", () => {
        photoContainer.style.animation = "pulse 1s infinite";
    });

    photoContainer.addEventListener("mouseout", () => {
        photoContainer.style.animation = "none";
    });
});