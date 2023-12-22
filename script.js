function changeView() {
  var signUpBox = document.getElementById("signUpBox");
  var signInBox = document.getElementById("signInBox");
  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var mobile = document.getElementById("mobile");
  var gender = document.getElementById("gender");

  var form = new FormData();
  form.append("f", fname.value);
  form.append("l", lname.value);
  form.append("e", email.value);
  form.append("p", password.value);
  form.append("m", mobile.value);
  form.append("g", gender.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var respose = request.responseText;
      if (respose == "success") {
        document.getElementById("msg").textContent = "Registration Successful";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgdiv").className = "d-block";
      }else {
        document.getElementById("msg").className = "d-block";
        document.getElementById("msgdiv").textContent = respose;

      }
    }
  };

  request.open("POST", "signupProcess.php", true);
  request.send(form);
}


function signin(){
    var email = document.getElementById("email2");
    var password = document.getElementById("password");
    var remember_me = document.getElementById("remember_me");

var form = new FormData();
form.append("email",email.value);
form.append("password",password.value);
form.append("remember_me",remember_me.checked);

var request = new XMLHttpRequest();

request.onreadystatechange = function(){
    if(request.status ==200 & request.readyState==4){

        var respose = request.responseText;
if(respsose == "success"){

}

    }
}

request.open("POST","signInProcess.php",true);
request.send(form);

}

// forgot password start
var forgotPasswordModal;
function forgotPassword(){

  var modal = document.getElementById("fpmodal");
  forgotPasswordModal = new bootstrap.Modal(modal);
forgotPasswordModal.show();


}