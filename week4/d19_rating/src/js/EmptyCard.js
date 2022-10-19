export class EmptyCard {
    constructor(subject) {
        this.subject = subject

        const emptyDiv = document.createElement("div")
        emptyDiv.classList.add("rating")
        emptyDiv.innerHTML = `
                <h1>${this.subject}</h1>
                <div class="rating__value">3</div>
                <div class="rating__stars">
                    <div class="rating__star rating__star--on"></div>
                    <div class="rating__star rating__star--on"></div>
                    <div class="rating__star rating__star--on"></div>
                    <div class="rating__star"></div>
                    <div class="rating__star"></div>
                </div>
            </div>`
        this.emptyDiv = emptyDiv
    }


    ratingSelect = () => {
        const stars = document.querySelectorAll('.rating__star')

        stars.forEach((star, index) => {
            star.addEventListener('click', (e) => {
                stars.forEach((star, indexTwo) => {
                    if (indexTwo <= index) {
                        star.classList.add('rating__star--on')
                    } else {
                        star.classList.remove('rating__star--on')
                    }
                })

                //Assign selector
                let textRatingValue = document.querySelector('.rating__value')
                //Change text to index of clicked star +1
                textRatingValue.innerHTML = `${index + 1}`
            })
        })
    }
}