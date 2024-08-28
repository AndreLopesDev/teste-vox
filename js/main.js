const form = document.querySelector("#form")
const nameInput = document.querySelector("#name")
const emailInput = document.querySelector("#email")
const passwordInput = document.querySelector("#password")

console.log(form, nameInput, emailInput, passwordInput)

form.addEventListener("submit", (event) => {
  event.preventDefault();
  
  if (nameInput.value === "" || !nameValidation(nameInput.value)) {
    alert("Por favor, informe seu nome corretamente")
    return
  }

  if (emailInput.value === "" || !emailValidation(emailInput.value)) {
    alert("Por favor, preencha corretamente o seu email")
    return
  }

  if (!passwordValidation(password.value, 8)) {
    alert("A senha deve conter no mínimo 8 caracteres");
    return;
  }

  form.submit();
});


// Validation Name
function nameValidation(name) {

  const nameRegex = new RegExp(
    /^[a-zA-ZÀ-ÿ]+(?: [a-zA-ZÀ-ÿ]+)*$/
  );

  if(nameRegex.test(name)) {
    return true;
  }

  return false;
}

// Validation Email
function emailValidation(email) {

  const emailRegex = new RegExp(
    /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/i
  );

  if(emailRegex.test(email)) {
    return true;
  }

  return false;
}

// Validation Password
function passwordValidation(password, minLenght) {
  if(password.length >= minLenght) {
    return true
  }

  return false;
}
