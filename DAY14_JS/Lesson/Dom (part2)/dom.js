/**
Creating and inserting elements 
*/

//create an element in the memory
// so there will be a "const" for that

const newDiv = document.createElement("div");
// /!\ We cannot directly apped to the document as there can only be one "html" element
//document.appendChild (newDiv)
//append something is addind something at the end

document.querySelector("body").appendChild(newDiv);
