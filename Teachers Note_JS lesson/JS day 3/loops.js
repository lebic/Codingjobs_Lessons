/**
 * Standalone loops
 * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration
 * for
 * while
 * for..in
 * for..of
 * do..while
 * foreach
 *
 * Object/arrays loops:
 *
 * array.forEach
 * array.map
 * array.reduce
 * object.keys
 */

// execute the contained instructions until the "middle" condition is reached. Increment index after every iteration.
for (let index = 0; index < 10; index++) {
  //execute the instructions
}

// execute something until a condition is met
let thing = 0;
while (thing < 10) {
  // any instructions
  console.log("while executing the instructions");
  thing++;
}

// for..of: "for each item of this array"
// giving each item after the other, from beginning to the end
const animals = ["cat", "tiger", "dog"];
for (const animal of animals) {
  console.log(animal);
}
// equivalent with a for loop
for (let index = 0; index < animals.length; index++) {
  console.log(animals[index]);
}
// "reverse" for loop
for (let index = animals.length - 1; index >= 0; index--) {
  console.log(animals[index]);
}

// array forEach
const fruits = ["orange", "banana", "apple", "watermelon"];
// for each item in the array, call the callback function
// we declare the function "on the fly" without assigning it to a variable
// by convention, for each will call the callback function with the following parameters: the item, the current index, the original array
fruits.forEach(function (fruit, index) {
  console.llllog(fruit, index);
});

// callback pattern: function passed as a parameter of another function
// used everywhere (array.forEach, etc.)
const firstFunction = function (callbackFunc) {
  callbackFunc("hello");
};

const callback = function (response) {
  console.log("called from inside another function: " + response);
};

firstFunction(callback);

// usually we declare the fonction immediately when calling the "parent" function
/* firstFunction(function (response) {
  console.log("called from inside another function: " + response);
}); */
