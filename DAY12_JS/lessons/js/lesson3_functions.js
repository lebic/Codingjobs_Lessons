/**
 * name
 * parameters (or arguments)
 * instructions
 * return value
 */

// function is stored in a variable named myFunc
function myFunc(params) {
  //instructions
}

//maybe preffered syntax
// function declaration is sotred in a variable named myFunc

const myFunc = function (params) {
  //instructions
};

// function declaration (instructions inside are not executed)
const addition = function (a, b) {
  return a + b;
};

//function call/to execute the function with the parenthesis
addition(1, 2);
addition(800, "string");

// to keep the result, assign it to a const

const additionResult = addition(1, 2);
console.log(additionResult);
// We can also use the return value directly
console.log(addition(800, "string"));
