/**
 * Document object model
 * https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model/Introduction
 *
 * ~JS representation of the page's elements
 */
// global document object
document;

// getting elements
console.log(document.getElementById("test")); // returns the div#test
// get all elements by their class name
console.log(document.getElementsByClassName("text-bold"));
console.log(document.getElementsByClassName("text-bold")[1]);
console.log(document.getElementsByTagName("p"));

// changing the styles
// https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/style
document.getElementById("test").style.backgroundColor = "red";

// more powerful way to select elements with CSS selectors (and supports all the array methods: forEach, etc.)
// get the first found element
document.querySelector('p.text-bold'); // first p element with the class
// get all the matching elements
document.querySelectorAll('p.text-bold');// all the p element with the class
