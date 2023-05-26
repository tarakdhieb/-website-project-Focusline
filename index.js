var button = document.getElementById("animated-button");

button.addEventListener("mouseenter", function() {
    button.style.transform = "translateX(20px)";
});

button.addEventListener("mouseleave", function() {
    button.style.transform = "translateX(-50%)";
});