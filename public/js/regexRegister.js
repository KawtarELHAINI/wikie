const form = document.getElementById('form');
if(form){
  form.addEventListener('submit', (e) =>{
    const username = document.getElementById('username');
    const email= document.getElementById('email');
    const password = document.getElementById('password');

    function verifyUsername(username){
      const usernameError = document.getElementById('usernameError');
      if(username === ""){
        usernameError.textContent = "Please enter a username";
        return false;
      }if(!/^[a-zA-Z0-9]+$/.test(username)){
        usernameError.textContent = "Please enter a valide username";
        return false;
      }else{
        usernameError.textContent = "";
        
        return true;
      }
    }

    function verifyEmail(email){
      const emailError = document.getElementById('emailError');
      if(email === ""){
        emailError.textContent = "Please enter a email";
        return false;
      }if(!/^[\w-]+(.[\w-]+)*@([\w-]+.)+[a-zA-Z]{2,7}$/.test(email)){
        emailError.textContent = "Please enter a valide email";
        return false;
      }else{
        emailError.textContent = "";
        return true;
      }
    }
    function verifyPassword(password){
      const passwordError = document.getElementById('passwordError');
      if(password === ""){
        passwordError.textContent = "Please enter a password";
        return false;
      } else if(!/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/.test(password)){
        passwordError.textContent = "Please enter a valid password with at least one uppercase letter, one digit, and a minimum of 8 characters";
        return false;
      } else {
        passwordError.textContent = "";
        return true;
      }
    }


    const usernameValid = verifyUsername(username.value);
    const passwordValid = verifyPassword(password.value);
    const emailValid = verifyEmail(email.value);

    
    if (!usernameValid || !passwordValid || !emailValid) {
        // e.preventDefault(); // Submit the form
        e.preventDefault();
    }



  })
}