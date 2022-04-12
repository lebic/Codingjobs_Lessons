/**
 * primitives:
 * booleans: true, false
 * strings: 'something'
 * numbers: 0, 5
 * 
 * null
 * undefined
 * NaN (not a number)
 */

// default value of a variable is undefined (when nothing was assigned)
let myvar;
// we assign once, it's a string
myvar = 'test';
// we assign again with 'null'
myvar = null;

// a complex object: each  property can contain anything, another object, an array, an array of objects, even functions
const tiger = {
  claws: true,
  nbOfCLaws: 20,
  name: "Johnny",
  friends: [{ type: "turtle" }, { type: "bird" }],
  options: {
      prop1: 'value'
  },
  funcInAProp: function walk(params) {
      
  }
};

// simple function declaration
function myFunc (params) {
    
}

console.log();

/* ECMA script specs:
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Language_Resources

compatibility table: http://kangax.github.io/compat-table/es6/
*/


/* Declaring a variable */
// nearly not used anymore (error prone, scope related)
var userName = 'John';
// default is var when keyword is omitted
userColor = 'blue';

// const cannot be reassigned: always use const
const userAge = 5;
// will throw a runtime error : TypeError: Assignment to constant variable.
//userAge = 10;

// use let if you need to reassign (except for objects and arrays we will see that later)
let userAddress = '21 Poney street';
