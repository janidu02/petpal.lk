document.querySelector('.menu-icon').addEventListener('click', function() {
  var menu = document.querySelector('.menu');
  if (menu.style.display === 'flex') {
    menu.style.display = 'none';
  } else {
    menu.style.display = 'flex';
  }
});


function verifyPassword() {
  var pw = document.getElementById("password").value;
  var cpw = document.getElementById("confirm-password").value;

  if(pw != cpw ) {
  document.getElementById("message").innerHTML = "<br>Password Mismatched !";
  return false;
 }

}


// Assuming you have a login button with the id "loginButton"
const loginButton = document.getElementById("loginButton");

// Function to hide the login button
function hideLoginButton() {
  loginButton.style.display = "none";
}

// Function to show the login button
function showLoginButton() {
  loginButton.style.display = "block";
}