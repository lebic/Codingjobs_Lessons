/**
 * Standalone Loops
 *
 * for
 * while
 * for...in
 * for...of
 * do...while
 * foreach
 *
 *
 * Object/arrays loops
 *
 * array.forEach
 * array.map
 * array.reduce
 * object.keys
 */

// ++ are increment (+1), -- are decrement (-1)
//for ([initialization]; [condition]; [final-expression])

for (let index = 0; index < 10; index++) {
       
}


// execute something until condition is met
let n = 0;

while (n < 3) {
  n++;
}

console.log(n);
// expected output: 3


//for..of:"for each item of this array"
const animals =['cat','tiger','dog']
for (const animal of animals) {
    console.log(animal)
}

// equivalent with a "for" loop
for (let index = 0; index < animals.length; index++) {
    const element = animals[index];
}


//"reverse" for loop
for (let index = animals.length - 1; index >= 0; index--) {
    const element = animals[index];
}

// array forEach
const fruits = ["orange","banana","apple","watermelon"];
// for each item in the array, call the callback function
// we declare the function "on the fly" without assigning it to a variable
//by convention, for each will call the callback function with the following parameters with the original array

fruits.forEach(function(fruit, index) {
    console.log(fruits, index);
}



// Function passed as a parameter of another function 

const firstFunction = function (anotherFunc) {
    anotherFunc("hello");
};

firstFunction(function(response) {
    console.log ("called from inside another function: " + response);
}


// callback pattern: function passed as a parameter of another function
// used everywhere (array, forEach, etc.)
