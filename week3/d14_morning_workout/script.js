const arrayOfArrays = [["https://classes.codingbootcamp.cz/assets/classes/1428/london.jpg", "London"], ["https://classes.codingbootcamp.cz/assets/classes/1428/paris.jpg", "Paris"], ["https://classes.codingbootcamp.cz/assets/classes/1428/new-york.jpg", "New York"], ["https://classes.codingbootcamp.cz/assets/classes/1428/nova-scotia.jpg", "Nova Scotia"], ["https://classes.codingbootcamp.cz/assets/classes/1428/tokio.jpg", "Tokio"], ["https://classes.codingbootcamp.cz/assets/classes/1428/venice.jpg", "Venice"]]

let string = "";

arrayOfArrays.forEach((item) => {
    string += "\n" + "<div class='image'> \n" + "\t" + "<img src='" + item[0] + "'>" + "\n";
    // adds newline, overdiv 'image', newline, tab, image tag, newline
    string += "\t" + "<div class='image__description'>" + item[1] + "</div>" + "\n" + "</div>" + "\n";
    // adds tab, subdiv 'description', closes subdiv, newline, closes overdiv, newline
})
console.log(string)
document.querySelector(".gallery").innerHTML = string;