let myLightButton = document.querySelector("#lightButton")
let myTimerButton = document.querySelector("#timerButton")

myLightButton.addEventListener("click", (event) => {
    document.querySelector("#stopLight").src = "lights/stop-off.svg"
    document.querySelector("#walkLight").src = "lights/walk-on.svg"
    setTimeout(() => {
        document.querySelector("#stopLight").src = "lights/stop-on.svg"
        document.querySelector("#walkLight").src = "lights/walk-off.svg"
    }, 5000);
})


myTimerButton.addEventListener("click", (event) => {
    let time = 60;
    let interval = setInterval(() => {
        if (time < 0) {
            clearInterval(interval)
        } else {
            document.querySelector("h1").innerHTML = time
            time = time - 1
        }
    }, 1000);
})