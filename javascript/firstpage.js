
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("imggg");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500); // Change image every 2 seconds
}

function liked(x){
   document.querySelector("."+x).style.visibility="visible";
   localStorage.setItem(x,"Liked");
}

let jumpOffer = () =>{

    document.querySelector('.offers').scrollIntoView();
}
// for counting likes in each offers
let addOneLike = (x) => {
  document.getElementById(x).innerText = Number(document.getElementById(x).innerText) + 1;
}

document.getElementById("firstbut").onclick = function () {
  location.href = "signup.php";
};