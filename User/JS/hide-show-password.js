const passField = document.querySelector("#passwword");
const showBtn = document.querySelector("#show_pass");
showBtn.onclick = () => {
  if (passField.type == "password") {
    passField.type = "text";
    showBtn.classList.add("active");
  } else {
    passField.type = "password";
    showBtn.classList.remove("active");
  }
};
