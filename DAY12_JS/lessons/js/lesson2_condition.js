console.log("I'm in a separeted files");

//Simple if statement
const userAge = 18;

if (userAge >= 18) {
  console.log("condition met");
} else {
}

/*
* >
* <
* >=
* <=
*
* ==
* != 
* Best practice:
* === strictly equal
* !== strictly unequal

// strict comparisons also compare the types (number, string, etc.) beforehand.
The test will fail if the types are different.
*/

if (5 == "5") {
  //condition is met
}
if (5 == "5") {
  //condition is not met, types are different
}

// condition without comparison operator
const condition = true;
if (condition) {
  //condition is met
}

//beware with falsy /truthly values
const userName = "";
if (userName) {
  // ?

  "" == true;
  //false
  "" == false;
  //true, because an empty string is considered as a string

  // default value of a variable is undefined
  let myvar;

  myvar = null;
}



/*Falsy and truthy values

//Falsy
*/
0;
false;
("");
("");
``;
null;
// null === undefined
//false
//null == undefined
//true

undefined;
NaN;
//NaN === null
//false
//NaN == null
//false


//Truthy
true;
5; //all numbers except 0
'test'; // non empty string
{}; // objects
[]; //arrays/*


/*
*Logical operator
* &&
* ||
* ! (not)
*/
const age = 10;
const userFirstname = 'Peter';
// AND
if (userFirstname === 'Peter' && >= 10 ){
  // all conditions met
}

// OR
if (age > 10 || age < 10) {
  // at least one condition met
}


// ! (not) is msotly used with boolean (because of possible errors with falsy values)
if (!isConnected || isConnected && isFirstVisit){
  // Welcome new visitor
  //
}

/**
 * Arrays
 * Anything can go into an array: primitives, arrays, objects, functions, etc.
 * 
 * Mixed values are allowed
 */

const myArray = [ 1, "hello", {prop1,"cat"}, [1,2,3]];
console.log(myArray [0]);
console.log(myArray [1]);
console.log(myArray [2]);

myArray.push ("new elements");
console.log(myArray)
