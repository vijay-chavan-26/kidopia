const signin_username = document.querySelector("#signin_username");
const signin_password = document.querySelector("#signin_password");
const sign_in_form_input = document.querySelectorAll(".sign_in_form_input");
const usernamecheck = /^[\S+]{2,50}$/;

// console.log('shittttttttttttttt')

const signinValidation = () => {
  // e.preventDefault();
  if (!usernamecheck.test(signin_username.value)) {
    document.querySelector("#signin_username_err").textContent =
      "**please enter valid username";
    return false;
  } else if (signin_password.value.length < 6) {
    document.querySelector("#signin_password_err").textContent =
      "**password should be greater than 6";
    return false;
  } else if (signin_password.value.length > 16) {
    document.querySelector("#signin_password_err").textContent =
      "**password should be less than 16";
    return false;
  }

  return true;
};

const signin_blurEvent = (inputTarget) => {
  inputTarget.addEventListener("blur", (e) => {
    if (e.target.value == "") {
      console.log(document.querySelector("#signin_common_err").innerText)
        document.querySelector("#signin_common_err").innerHTML = "";
      e.target.parentNode.nextElementSibling.textContent = `plz enter ${e.target.placeholder}`;
    } else if (e.target.id == signin_username.id) {
      if (!usernamecheck.test(signin_username.value)) {
        document.querySelector("#signin_username_err").textContent =
          "**please enter valid username";
      }
    } else if (e.target.id == signin_password.id) {
      if (signin_password.value.length < 6) {
        document.querySelector("#signin_password_err").textContent =
          "**password should be greater than 6";
      } else if (signin_password.value.length > 16) {
        document.querySelector("#signin_password_err").textContent =
          "**password should be less than 16";
      }
    }
  });
};

for (item of sign_in_form_input) {
  signin_blurEvent(item);
  focusEvent(item);
}
