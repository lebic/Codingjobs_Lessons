let myString = "test";
//create a copy of the value: 'test'
const anotherString = myString;
myString = "something else";

//still  'test'
console.log(anotherString);

//this is NOT tje case for objects/arrays
const myObj = { firstname: "Jean-Claude" };
// does not create a copy, copy only the reference to the object
const anotherObject = myObj;
// even if it's a const , we can modify what is inside
myObj.firstname = 123;
//this wouldn't work : 
//myObj ={}

//both variable are "pointing" to the one and same object
console.log(anotherObject);
