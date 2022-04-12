const buttonStart = document.querySelector("#btn_start");
const buttonStop = document.querySelector("#btn_stop");
let intervalId;

buttonStart.addEventListener("click", () => {
  const intervalId = setInterval(() => {
    console.log("interval");
  }, 500);
});

buttonStop.addEventListener("click", () => {
  clearInterval(intervalId);
});
