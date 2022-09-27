const userInput= prompt("What is your seat number?")


if (Number(userInput) == 0) {
    alert("Your seat number is A0")
} else {
    const xValue = Number(userInput) % 10
    let yValue = Number(userInput) / 10
    yValue = String.fromCharCode(Math.floor(yValue) + 65)
    alert("Your seat number is " + yValue + xValue)
}