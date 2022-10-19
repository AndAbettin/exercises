import { EmptyCard } from './EmptyCard.js'
// const stars = document.querySelectorAll('.rating__star')

// stars.forEach((star, index) => {
//     star.addEventListener('click', (e) => {
//         stars.forEach((star, indexTwo) => {
//             if (indexTwo <= index) {
//                 star.classList.add('rating__star--on')
//             } else {
//                 star.classList.remove('rating__star--on')
//             }
//         })

//         //Assign selector
//         let textRatingValue = document.querySelector('.rating__value')
//         //Change text to index of clicked star +1
//         textRatingValue.innerHTML = `${index + 1}`
//     })
// })

const cardTitanic = new EmptyCard("Titanic")
const cardRosemary = new EmptyCard("Rosemary")
const cardShiver = new EmptyCard("Shiver")

const bodySelect = document.querySelector('body')

bodySelect.appendChild(cardTitanic.emptyDiv)
bodySelect.appendChild(cardRosemary.emptyDiv)
bodySelect.appendChild(cardShiver.emptyDiv)




