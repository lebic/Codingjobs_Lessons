const list = ["cat", "dog", "tiger", "elephant", "whale"];
console.log("original array: " + list);
//try to reverse the array order
// revere() does not create a new array, it mutates the original array in place

reversedList = list.reverse();
console.log("EXERCICE1: " + list);

//then try without the reverse() function

let newList = [];
for (let index = list.lenght - 1; index >= 0; index--) {
  newList.push(list[index]);
}
console.log("EXERCICE2 : " + list);

//then try to sort by ascending aphabetical order (a-z)

const sortedList = list.sort();
console.log("EXERCICE3 : " + list);

//then try to sort by descending alphabetical order (z-)

const reversedSortedList = sortedList.reverse();
console.log("EXERCICE4 : " + list);


//sort user by ID

user.sort((userA, userB) =>{
  return userA.id - userB.id; 
})





