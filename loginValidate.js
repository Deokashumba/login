// get element
const username = document.getElementById("username");
const password = document.getElementById("password");
const loginBtn = document.getElementById("login");
const error = document.querySelector(".error-text");

// add event listener to listen for click event
loginBtn.addEventListener("click", (e) => {
  // prevent browser default style
  //   e.preventDefault();
  if (username.value === "" || password === "") {
    error.innerHTML += "fill all the required fields";
  }
});
