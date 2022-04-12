/**
 * Events
 */

const documentClickListeners = (event) => {
    
}


divMakers.addEventListener("click", (divMaker) => {
  //instructions
  console.log("div was created");
});
document.addEventListener("click", documentClickListeners);

// block the context menu (example, right click)
document.addEventListener("contextmenu", (event) => {
  event.preventDefault();
  console.log("document was clicked", event);
});

// remove listeners

document.removeEventListener("dblclick", documentClickListeners);
