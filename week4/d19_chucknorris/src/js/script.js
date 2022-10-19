const buttonSelect = document.querySelector('.button');
const quoteSelect = document.querySelector('.quote');
const iconSelect = document.querySelector('.icon');

const getJoke = async () => {
    const url = 'https://api.chucknorris.io/jokes/random'

    const response = await fetch(url);
    const joke = await response.json();
    const jokeValue = joke.value;
    const iconSource = joke.icon_url

    iconSelect['src'] = iconSource
    quoteSelect.innerHTML = jokeValue
}

buttonSelect.addEventListener('click', getJoke)
