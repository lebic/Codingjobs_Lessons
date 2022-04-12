/**
 * Arrays
 * Anything can go into an array: primitives, arrays, objects, functions, etc.
 *
 * Mixed values are allowed
 */
const myArray = [1, "hello", { prop1: "cat" }, [1, 2, 3]];
console.log(myArray[0]); // 1
console.log(myArray[1]); // 'hello'
console.log(myArray[2]); // our object

myArray.push("new element");

console.log(myArray);

