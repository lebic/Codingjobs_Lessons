const tasks = ["laundry", "homework", "shit"];
const listElement = document.querySelector("#tasks");

const newTaskinput = document.querySelector("#newtask");
const addButton = document.querySelector("button");

// create an li and add it to the task list

// TASK ADDER FUNCTION
const addTask = (task) => {
  const liElement = document.createElement("li");
  listElement.appendChild(liElement);
  liElement.textContent = task;

  return liElement;
};

// TASK REMOVER FUNCTION
const removeTask = (liElement) => {
  const liButton = document.createElement("button");
  liElement.appendChild(liButton);
  liButton.textContent = "X";

  liButton.addEventListener("click", (taskName) => {
    listElement.removeChild(liElement);

    const taskIndex = tasks.findIndex((task) => {
      return task === taskName;
    });
    tasks.splice(taskIndex, 1);

    console.log(tasks);
  });
};

// display the task list
tasks.forEach((task) => {
  const liElement = addTask(task);
  const liButton = removeTask(liElement);
});

// BUtton ADD
const newTask = addButton.addEventListener("click", () => {
  const liElement = addTask(newTaskinput.value);
  const liButton = removeTask(liElement);
  tasks.push(newTaskinput.value);
  console.log(tasks);
});
