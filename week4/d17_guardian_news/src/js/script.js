

const loadData = async () => {
    const response = await fetch('https://classes.codingbootcamp.cz/assets/classes/602/guardian.php');
    const categories = await response.json();

    let pointer = document.querySelector('.categories')
    categories.data.forEach(category => {
        let add = document.createElement('li')
        add.innerText = category;
        pointer.appendChild(add);
        add.addEventListener('click', () => categoryClicked(category))
    })
}

const categoryClicked = async (category) => {
    const response = await fetch(`https://classes.codingbootcamp.cz/assets/classes/602/guardian.php?cat=${category}`)
    const articles = await response.json();
    console.log(articles.data.channel.item)

    let pointer = document.querySelector('.articles')
    pointer.innerHTML = ''

    articles.data.channel.item.forEach(article => {
        let addArticle = document.createElement('li')
        addArticle.innerText = article.title
        pointer.appendChild(addArticle)
        console.log(article.title)
    })
}

document.addEventListener('DOMContentLoaded', loadData)
