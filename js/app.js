const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  localStorage.setItem('sign-up-mode', true);
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  localStorage.setItem('sign-up-mode', false);
});

console.log(localStorage.getItem('sign-up-mode'))

if(localStorage.getItem('sign-up-mode') === 'true'){
  container.classList.add("sign-up-mode");
}else{
  console.log("removing class")
  container.classList.remove("sign-up-mode");
}