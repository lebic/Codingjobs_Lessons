/**
 * Loops and other arrays/objects methods
 *
 *
 */

// Array.map
// it create a new array of the same lenght with the new content

const animals = ["tiger", "cat", "dog"];
const newAnimals = animals.map((animal, index) => {
  return "My " + animal.toUpperCase() + " at index" + index;
});
console.log(newAnimals);

//Array.reduce

const numbers = [1, 2, 3, 4, 5, 6, 7];
const reduceResult = numbers.reduce((previousValue, item, index) => {
  return previousValue + item;
}, 0);
console.log(reduceResult);

// create an array of objects from an array of strings
const strings = ["potato ", "bean ", "carrot"];
const vegetables = strings.reduce(
  (previousValue, item, index) => {
    return previousValue + item;
  },
  { items: [] }
);
console.log(vegetables);

// 

const pmaker = ["potato ", "potato ", "potato ", "potato ", "bean ", "carrot"];

const vegetablesCount = pmaker.reduce((previousValue, vegetableName, index) => {
  if (previousValue[vegetableName] !== undefined) {
    previousValue[vegetableName] += 1;
  } else {
    previousValue[vegetableName] = 1;
  }

  return previousValue;
}, {});
console.log(vegetablesCount);
