import { ProgressBar } from './ProgressBar';

// @TODO no.1 create new instance of ProgressBar. Explore constructor of ProgressBar class!
//    Take a body element and append progress bar (element) you just created to it.
//    You shouldn't pass the whole progress bar to appendChild method, but only specific property
//    explore class ProgressBar and find out which property it is.
//
//    code here:
const newProgressBar = new ProgressBar(1337, 5, 8008135)
const newPBBody = document.querySelector('body')
newPBBody.appendChild(newProgressBar.element)

// @TODO no.2 once you have done TODO no.1 and you can see the progress bar,
//    fix missing icon on plus button
