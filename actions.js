var myReview = document.getElementById("my-review-div");
var reviewBtn = document.getElementById("review-button");
var authForm = document.getElementById("form-container");
var authButton = document.getElementById("cat-auth");

console.log(authButton)


authButton.onclick = function()
{
  authForm.style.display="block";
}

window.onclick = function(event) {
    console.log('I am here')
    if (event.target == authForm) {
        authForm.style.display = "none";
    }
    else if (event.target == myReview) {
        myReview.style.display = "none";
      }
  }

reviewBtn.onclick = function()
{
    myReview.style.display = "block";
}



// window.onclick = function(event) {
//     console.log('I am not here')
  
//   }

