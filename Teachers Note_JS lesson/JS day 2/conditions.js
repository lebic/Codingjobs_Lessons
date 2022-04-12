console.log("I'm in a separated file");

/* Simple if statement */
const userAge = 18;

if (userAge >= 18) {
  console.log("condition met");
} else {
}

/**
 * Comparison operators
 * >
 * <
 * >=
 * <=
 *
 * ==
 * !=
 * Best practice:
 * === (strict)
 * !== (strict)
 *
 */

// strict comparisons also compare the types (number, string, etc.) beforehand. The test will fail if the types are different.
if (5 == "5") {
  // condition is met
}
if (5 === "5") {
  // condition is not met, types are different
}

// condition without comparison operator
const condition = true;
if (condition) {
  // condition is met
}

// beware with falsy / truthy values
const userName = "";
if (userName) {
  // it would enter the if, '' is a falsy value
}

/**
 * Falsy and truthy values
 */

// falsy
0;
false;
(""); // empty string
(""); // empty string
``; // empty string
null;
undefined;
NaN;

// truthy
true;
5; // all numbers except 0
("test"); // non empty string
{
} // objects
[]; // arrays

// be careful when you are doing comparisons!
if (!parseInt("0")) {
  // if condition will be met for both NaN and 0. Probably not what we want.
  console.log("not a number");
}

/**
 * Logical operators
 * &&
 * ||
 * !
 */
const age = 10;
const userFirstname = "Peter";
// AND
if (userFirstname === "Peter" && age >= 10) {
  // all conditions met
}
// OR
if (age > 10 || age < 10) {
  // if at least one condition is met
}
// mix
if (userFirstname === "Peter" && (age > 10 || age < 10)) {
  console.log("its peter");
}
// ! (not) is mostly used with boolean (because of possible errors with falsy values)
const isConnected = false;
const isFirstVisit = false;
if (!isConnected || (isConnected && isFirstVisit)) {
  // welcome new visitor
  //
}
// ! (not) is more or less a shorthand, useful for booleans values
if (!isConnected) {
}
// equivalent
if (isConnected === false) {
}
