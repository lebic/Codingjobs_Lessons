/**
 * Classes
 */

// "regular" JS object:
const carl = {
  mileage: 5000,
  color: "red",
  honk: () => {
    console.log("honk honk");
  },
};

// Parent class
class Vehicule {
  drive() {
    console.log(`I'm driving a ${this.color} car`);
  }
}

// working with a class inheriting another class with the extends keywords

class Car extends Vehicule {
  constructor(mileage, color) {
    super();
    this.mileage = mileage;
    this.color = color;
  }

  //no function keyword or arrow (=>)
  honk() {
    console.log(`honk! honk! I am ${this.color} car`);
  }
}

const carA = new Car(1000, "green");
const carB = new Car(5000, "red");
const carC = new Car(60000, "blue");
console.log(carA, carB, carC);

// checking is something is an instanceof a class
console.log(carA instanceof Car);

//true
