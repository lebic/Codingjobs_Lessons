/**
 * Ternary operator
 */

const isConnected = true;

if (isConnected) {
  console.log("Hello");
} else {
  console.log("Please connect");
}

//Ternary equivalent
isConnected ? console.log("Hello") : console.log("Please Connect");

//Usage in a template string
const welcomeMessage = `Hello, ${
  isConnected ? "Welcome back" : "please connect"
}`;
console.log(welcomeMessage);

// Usage in a variable assignation
const myVariable = condition ? "value1" : "value2";
const welcomeMessage2 = isConnected
  ? "Hello, welcome back"
  : "Hello, please connect";

/**
 * Optionnal chaining
 * https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Operators/Optional_chaining
 * check compatibility table
 */
//EXAMPLE:

const adventurer = {
  name: "Alice",
  cat: {
    name: "Dinah",
  },
};
// will be undefined instead of crashing the program
const dogName = adventurer.dog?.name;

// "if there is a dog in the adventurer list, please take its name"

/**
 * Spread operator
 * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_syntax
 *
 * --> ...
 *
 * Used to create copies
 */

const numbers = [1, 2, 3];

const sum = (x, y, z) => {
  return x + y + z;
};
console.log(sum(...numbers));

// copy an array
const newNumbers = [...numbers];
console.log(newNumbers);

const user = {
  firstname: "Patrick",
  lastname: "Doe",
  friend: {
    firstname: "Jean",
  },
  age: 45,
};

const newUser = {
  ...user,
  friend: { ...user.friend },
};
console.log(newUser);

/**
 * "arguments" keyword
 */
const sum2 = function (numberA,numberB) => {
  console.log(arguments);
  //would equal 45
  console.log(arguments [0]);
  
  return numberA / numberB;
};
division(45, 56);
