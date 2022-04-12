/**
 * Functions:
 * - name
 * - parameters (or arguments)
 * (- instructions)
 * - return value
 */

// function is stored in a variable named myFunc1
function myFunc1() {
  // instructions
}
// maybe preferred syntax
// function declaration is stored in a variable named myFunc
const myFunc = function () {
  // instructions
};

// function declaration (instructions inside are not executed)
const addition = function (a, b) {
  return a + b;
};

// to call / execute the function use parenthesis: funcName()
// we store the return value
const additionResult = addition(1, 2);
console.log(additionResult);
// we can also use the return vvalue directly
console.log(addition(800, "string"));
