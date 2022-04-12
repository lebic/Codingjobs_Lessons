/**
 * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Working_with_Objects#comparing_objects
 *
 * Objects references
 */

// a variable contains the primitive's value
let myString = "test";
// creates a "copy" of the value : 'test'
const anotherString = myString;
myString = "something else";

// still 'test'
console.log(anotherString);

// this is NOT the case for objects/ arrays (everything below applies to arrays)
const myObj = { firstname: "Jean-Claude" };
// does not create a copy, copy only the reference to the object
const anotherObject = myObj;
// even if it's a const we can modify what is inside
myObj.firstname = 123;
// this wouldn't work as we would change the variable value (the reference to a new object)
//myObj = {}
// both variables are "pointing" to the one and same object
console.log(anotherObject);

anotherObject.firstname = "something else";

console.log(myObj);

// true, because reference is the same
console.log(myObj === anotherObject);
