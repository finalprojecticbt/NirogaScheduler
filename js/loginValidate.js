function loginValidate() {
    // Reading Username and Password Values
    let username = document.forms["myForm"]["username"].value;
    let password = document.forms["myForm"]["password"].value;

    // if Both Username and Password are Empty
    if(username == "" && password == "") {
        document.getElementById("userErr").innerHTML = "Username Cannot be Blank.";
        document.getElementById("passErr").innerHTML = "Password Cannot be Blank.";
        return false;
      }

    // if  Username is Empty
    if(username == "") {
      document.getElementById("passErr").innerHTML = "";
      document.getElementById("userErr").innerHTML = "Username Cannot be Blank.";
      return false;
      }

    // if  Password is Empty
    if(password == "") {
        document.getElementById("userErr").innerHTML = "";
        document.getElementById("passErr").innerHTML = "Password Cannot be Blank.";
        return false;
        }
}

