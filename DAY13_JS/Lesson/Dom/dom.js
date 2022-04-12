/**
 * Document object model
 * https://developer.mozilla.org/fr/docs/Web/API/Document_Object_Model/Introduction
 **/
// global document object
document;

//getting elements
console.log(document.getElementById("test"));
//returns the div#test
console.log(document.getElementsByClassName("text-bold")[1]);
console.log(document.getElementsByTagName("p"));

//Changing the style
document.getElementById("test").style.backgroundColor = "red";

//more powerful way to select elements with CSS selectors
//get the first found element
document.querySelector('p.text-bold'); // first p element with the class
//get all the matching elements
document.querySelectorAll('p.text-bold'); //all the p element 
