/**
 * Timers
 */
// do something (excute the callbacl after x ms (here 2000ms --> 2s))

const timeoutId = setTimeout(() => {
  console.log("delayed");
}, 2000);

//remove/cancel the settimeout execution (we need to provide the reference we got from the setTimeout funciton

//clearTimeout(timeoutId);

//execute our callback every xms (50 -> 0.5s)
const intervalId = setInterval(() => {
  console.log("callback executed");
}, 500);

//remove/cancel the settimeout execution (we need to provide the reference we got from the intervalId funciton

clearInterval(intervalId);
