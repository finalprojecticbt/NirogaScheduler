function loginValidate() {
    let username = document.forms["myForm"]["username"].value;
    let password = document.forms["myForm"]["password"].value;

    if(username == "" && password == "") {
        document.getElementById("userErr").innerHTML = "Username Cannot be Blank.";
        document.getElementById("passErr").innerHTML = "Password Cannot be Blank.";
        return false;
      }

    if(username == "") {
      document.getElementById("passErr").innerHTML = "";
      document.getElementById("userErr").innerHTML = "Username Cannot be Blank.";
      return false;
      }

    if(password == "") {
        document.getElementById("userErr").innerHTML = "";
        document.getElementById("passErr").innerHTML = "Password Cannot be Blank.";
        return false;
        }

  }