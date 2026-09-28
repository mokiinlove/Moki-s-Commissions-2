const clickSound = document.getElementById("clickSound");

function playClick(){
    clickSound.currentTime = 0;
    clickSound.play();
}

clickSound.addEventListener("play", () => {
    console.log("playing");
})

const menuButton = document.querySelector(".button-menu");
const menuLinks = document.querySelectorAll(".a-mini-menu");

menuButton.addEventListener("click", () => {
    const isExpanded = menuButton.getAttribute("aria-expanded") === "true";

    menuLinks.forEach((link) => {
        link.style.display = isExpanded ? "none" : "flex";
    });

    menuButton.setAttribute("aria-expanded", String(!isExpanded));
    menuButton.setAttribute("aria-label", isExpanded ? "Open links menu" : "Close links menu");
});