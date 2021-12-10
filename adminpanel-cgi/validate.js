function login() {
  let em = document.forms["myform"]["email"].value;
   let pass = document.forms["myform"]["password"].value;
   
  if (em == "") {
      alert("Enter Email");
    //document.getElementById("em").innerHTML = "** please Enter Email";
    return false;
  }
  if (pass == "")
   {
   alert("Enter password");
    return false;
  }
}
