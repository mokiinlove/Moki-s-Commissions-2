const clickSound = document.getElementById("clickSound");

function playClick(){
    clickSound.currentTime = 0;
    clickSound.play();
}

clickSound.addEventListener("play", () => {
    console.log("playing");
})