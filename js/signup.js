const fullname = document.querySelector("#fullname");
const username = document.querySelector("#username");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const sign_up_form_input = document.querySelectorAll(".sign_up_form_input");

const fullnamecheck = /^[\S+][A-Za-z ]{2,50}$/;
const usercheck = /^[A-Za-z][a-zA-Z0-9]{2,30}$/;
const emailcheck = /^[a-zA-Z0-9]{3,}@[A-Za-z]{3,}\.[A-Za-z.]{1,10}[^.]$/;


const signupValidation = () => {
  if (!fullnamecheck.test(fullname.value)) {
    document.querySelector("#fullname_err").textContent =
      "**please enter your fullname";
    return false;
  }else if (!usercheck.test(username.value)) {
    document.querySelector("#username_err").textContent =
      "**please enter valid username";
    return false;
  } else if (!emailcheck.test(email.value)) {
    document.querySelector("#email_err").textContent =
      "**please enter valid email";
    return false;
  } else if (password.value.length <6) {
    document.querySelector("#password_err").textContent =
    "**password should be greater than 6";
    return false;
  }else if( password.value.length >16){
    document.querySelector("#password_err").textContent =
    "**password should be less than 16";
    return false;
  }

  return true;
};

const blurEvent = (inputTarget) => {
  inputTarget.addEventListener("blur", (e) => {
    if (e.target.value == "") {
      document.querySelector("#common_err").innerHTML ='';
      e.target.parentNode.nextElementSibling.textContent = `plz enter ${e.target.placeholder}`;
    } else if (e.target.id == fullname.id) {
      if (!fullnamecheck.test(fullname.value)) {
        document.querySelector("#fullname_err").textContent =
          "**please enter valid fullname";
      }
    }
    else if (e.target.id == username.id) {
      if (!usercheck.test(username.value)) {
        document.querySelector("#username_err").textContent =
          "**please enter valid username";
      }
    } else if (e.target.id == email.id) {
      if (!emailcheck.test(email.value)) {
        document.querySelector("#email_err").textContent =
          "**please enter valid email";
      }
    } else if (e.target.id == password.id) {
      if (password.value.length < 6) {
        document.querySelector("#password_err").textContent =
          "**password should be greater than 6";
      } else if (password.value.length > 16) {
        document.querySelector("#password_err").textContent =
          "**password should be less than 16";
      }
    }
  });
};

const focusEvent = (inputTarget) => {
  inputTarget.addEventListener("focus", (e) => {
    e.target.parentNode.nextElementSibling.textContent = "";
  });
};

for (item of sign_up_form_input) {
  blurEvent(item);
  focusEvent(item);
}
