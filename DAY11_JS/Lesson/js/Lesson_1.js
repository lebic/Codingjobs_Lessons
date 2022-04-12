const x = 10;
const X = 5.56;

var y = 10;

var y = X * 10;

console.log(y, X, x);
// console.log just render in the log

// +-*/ operator

var firstName = "Anthony";
var lastName = "Boulanger";

console.log(firstName);
console.log(lastName);
console.log(firstName, lastName);

var fullName = firstName + " " + lastName + "is 27";
console.log(fullName);

// BOOLEAN :
// && = AND
// || = OR

const x = true;
const y = false;

console.log((y && x) || y);

const details = ["Anthony", "Boulanger", 27];
console.log(details);

// [..] are used to make a container for multiples variables
const contact_1 = {
   firstName: "Anthony",
   lastName: "Boulanger",
};
// const name={};  that's an object, pretty much everything in Javascript is an object

const contact_2 = {
   firstName: "Peter",
   lastName: "Brown",
};

function greet(firstName, lastName) {
   return "Hello" + firstName + " " + lastName;
}

// the () are "Arguments"/inputs

greet("Peter", "Brown");

// it will replace firstName and lastName by the input I gave to the function
