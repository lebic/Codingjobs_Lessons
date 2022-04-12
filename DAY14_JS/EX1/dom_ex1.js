const newDiv = document.createElement("div");
document.querySelector("body").append(newDiv);
//document.body.append(newDiv);

const blogPosts = [
  { title: "Title1", text: " long text1" },
  { title: "Title2", text: " long text2" },
  { title: "Title3", text: " long text3" },
  { title: "Title4", text: " long text4" },
  { title: "Title5", text: " long text5" },
  { title: "Title6", text: " long text6" },
];

blogPosts.forEach((blogPost) => {
  const blogPostText = document.createElement("p");
  newDiv.appendChild(blogPostText);
  blogPostText.classList.add("thisIsAnewClass");
  blogPostText.textContent += blogPost.title;
  blogPostText.textContent += blogPost.text;
});

/**
 *  
for (let index = 0; index < 10; index++) {
  const paragraphElement = document.createElement("p");
  newDiv.appendChild(paragraphElement);
  paragraphElement.classList.add("thisIsAnewClass");
  paragraphElement.textContent += "new text";
}

*/
