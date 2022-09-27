const list = document.querySelectorAll("img");
const urls = []
const alts = []
console.log(list);

list.forEach((item) => {
    console.log(item.getAttribute("src"));
    urls.push(item.getAttribute("src"));
})

list.forEach((item) => {
    console.log(item.getAttribute("alt"));
    alts.push(item.getAttribute("alt"));
})

console.log(urls);
console.log(alts);
console.log(list.length);

const newUrls = urls.slice(0, 3);
console.log(newUrls);


const first = []
for (let i = 0; i < urls.length; i++) {
    if (i >= 3) {
        break;
    } else {
        first.push(urls[i]);
    }
}
console.log(first);

const newerUrls = urls.slice(3);
console.log(newerUrls);

const last = []
for (let i = 0; i < urls.length; i++) {
    if (i < 3) {
        continue;
    } else {
        last.push(urls[i]);
    }
}
console.log(last);

const filterAlts = []
for (let i = 0; i < alts.length; i++) {
    if (alts[i].match(/cat/i)) {
        filterAlts.push(alts[i]);
    } else {
        continue;
    }
}
console.log(filterAlts)