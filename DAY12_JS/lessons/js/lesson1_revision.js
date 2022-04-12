const tiger = {
  claws: true,
  nbOfClaws: 20,
  name: "Johny",
  friend: [{ type: "turtle" }, { type: "bird" }],
  options: {
    prop1: "value",
  },
  aFunc: function name(params) {},
};

const myFunc = function (params) {};

function name() {}

console.log();

// Correctly naming things is complicated, name with explicit name that describe what is inside the variable 

/* Declaring a variable */
// nearly not used anymore (error prone, scope related)

var userName ='John';
// default is a var when keyword is omitted
userColor ='blue'
// const cannot be reassigned

const userAge = 5 ;

//L'instruction let permet de déclarer une variable dont la portée est celle du bloc courant, éventuellement en initialisant sa valeur.

let userAddress = '21 Poney street'

//ECMA script specs : https://developer.mozilla.org/fr/docs/Web/JavaScript/Language_Resources 

function newFunc(){
    if (true) {
        
    }
}

//don't use var always use const
