// get reference to all elements
const username = document.getElementById("username");
const email = document.getElementById("email");
const submit = document.getElementById("signup");
const error = document.querySelector(".error-text");

submit.addEventListener("click", (e) => {
  e.preventDefault();

  if (username.value === "" || email === "") {
    error.innerHTML = "fill all the required fields";
  }
});
