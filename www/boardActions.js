var authForm = document.getElementById("form-container");
var authButton = document.getElementById("cat-auth");


window.onclick = function(event) {
  console.log('I am here')
  if (event.target == authForm) {
      authForm.style.display = "none";
  }
}


authButton.onclick = function()
{
  authForm.style.display="block";
}




