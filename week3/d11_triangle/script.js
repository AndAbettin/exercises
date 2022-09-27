function getInputValue() {
    let angle_1 = Number(document.querySelector('input[name=angle_1]').value)
    console.log(angle_1)
    let angle_2 = Number(document.querySelector('input[name=angle_2]').value)
    console.log(angle_2)
    let angle_3 = Number(document.querySelector('input[name=angle_3]').value)
    console.log(angle_3)

    if (angle_1 <= 0 || angle_2 <= 0 || angle_3 <= 0) {
        alert("Angles cannot be negative!")
    } else {
        if (angle_1 + angle_2 + angle_3 <= 180) {
            let result = document.querySelector('span')
            result.innerHTML += ' Yes!'
        } else {
            let result = document.querySelector('span')
            result.innerHTML += ' No.'
        }
    }
}