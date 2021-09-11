function registerValidate() {

  console.log("Working");
    // Reading Username and Password Values
    let username = document.forms["myForm"]["username"].value;
    let ulength = username.length;
    let email = document.forms["myForm"]["email"].value;
    let nic = document.forms["myForm"]["nic"].value;
    let phone = document.forms["myForm"]["phone"].value;
    let dob = document.forms["myForm"]["dob"].value;
    let gender = document.forms["myForm"]["gender"].value;
    let pass = document.forms["myForm"]["password"].value;
    let conPass = document.forms["myForm"]["conPass"].value;
    var rgexp = /((18|19|20)[0-9]{2}[\-.](0[13578]|1[02])[\-.](0[1-9]|[12][0-9]|3[01]))|(18|19|20)[0-9]{2}[\-.](0[469]|11)[\-.](0[1-9]|[12][0-9]|30)|(18|19|20)[0-9]{2}[\-.](02)[\-.](0[1-9]|1[0-9]|2[0-8])|(((18|19|20)(04|08|[2468][048]|[13579][26]))|2000)[\-.](02)[\-.]29/;
    var isValidDate = rgexp.test(dob);


    // if Username Empty
    if(username == "") {
        document.getElementById("userErr").innerHTML = "Username Cannot be Blank.";
        return false;
      }

      if (ulength < 4) {
        document.getElementById("userErr").innerHTML = "Username Should be more than 4 Letters";
        return false;
      }


      if(email == "") {
        document.getElementById("userErr").innerHTML = "Email Cannot be Blank.";
        return false;
      }
      if(nic == "") {
        document.getElementById("userErr").innerHTML = "NIC Cannot be Blank.";
        return false;
      }
      if(phone == "") {
        document.getElementById("userErr").innerHTML = "Contact Number Cannot be Blank.";
        return false;
      }
      if(dob == "") {
        document.getElementById("userErr").innerHTML = "Date of Birth Cannot be Blank.";
        return false;
      }

      if(isValidDate == false) {
        document.getElementById("userErr").innerHTML = "Enter Valid Date: YYYY-MM-DD";
    
        return false;
        }


      if(gender == "") {
        document.getElementById("userErr").innerHTML = "Gender Cannot be Blank.";
        return false;
      }
      if(pass == "") {
        document.getElementById("userErr").innerHTML = "Password Cannot be Blank.";
        return false;
      }
      if(conPass == "") {
        document.getElementById("userErr").innerHTML = "Confirm Password Cannot be Blank.";
        return false;
      }
      if(pass != conPass) {
        document.getElementById("userErr").innerHTML = "Passwords Not Match.";
        return false;
      }


}

