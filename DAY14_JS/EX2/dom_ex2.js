const buttonEvent = document.querySelector("button");
const paragraph = [{ text: "this is a text" }];

buttonEvent.addEventListener("click", (event) => {
  buttonEvent.textContent = `Nombre de clics : ${event.detail}`;
  const text = document.createElement("p");
  text.textContent += "Java";
  text.style.fontFamily += "Roboto, sans-serif";
  text.style.backgroundColor += "red";
  text.style.color += "white";
  text.style.textAlign += "center";
  document.body.appendChild(text);
});
