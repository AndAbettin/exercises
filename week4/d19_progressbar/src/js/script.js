import { ProgressBar } from './ProgressBar';


const progressBarRed = new ProgressBar(0, 1, 17, 255, 0, 0)
const progressBarGreen = new ProgressBar(0, 1, 17, 0, 255, 0)
const progressBarBlue = new ProgressBar(0, 1, 17, 0, 0, 255)

const newPBBody = document.querySelector('body')
newPBBody.appendChild(progressBarRed.element)
newPBBody.appendChild(progressBarGreen.element)
newPBBody.appendChild(progressBarBlue.element)

const buttonSelect = document.querySelector('button')

buttonSelect.addEventListener('click', () => {
    const red = progressBarRed.value;
    const green = progressBarGreen.value;
    const blue = progressBarBlue.value;
    buttonSelect.style.backgroundColor = `rgb(${red * 15}, ${green * 15}, ${blue * 15})`
});