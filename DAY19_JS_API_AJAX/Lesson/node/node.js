//we are calling the node application through the terminal. Check the terminal for the message

//"CTRL+C" will terminate a programm in the terminal

let numb = 0;
for (let index = 0; index < 1_000_000; index++) {
  numb += index;
}
console.log(numb);



const os = require("os");
console.log(os.platform());
console.log(os.hostname());
console.log(os.userInfo());



