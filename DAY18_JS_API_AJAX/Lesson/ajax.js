/* Ajax
https://developer.mozilla.org/fr/docs/Web/Guide/AJAX


before : using  XMLrequest

Now: using Fetch API

we will use fetch() function

fetch () is using a response

*/

fetch(new Request("https://petstore.swagger.io/v2/pet/200"), { method: "GET" })
  .then((response) => {
    console.log(response.status);
    return response.json();
  })

  //Need the response of the API
  //.json( is converting the JSON text body to a JS object automatically)
  .then((pet) => {
    console.log(pet);
  });

//the data of the API is in the body, so we need the "body" to get it
