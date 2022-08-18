const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
    document.querySelector(".container").classList.remove("forget-password-visible");
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
// forget password
const forgetPasswordBtn = document.querySelectorAll(".forget-password-btn");

forgetPasswordBtn.forEach((btn) => {
  btn.addEventListener("click", function handleClick(event) {
    document.querySelector(".container").classList.toggle("forget-password-visible");
  });
});