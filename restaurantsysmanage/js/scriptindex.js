var btn = document.getElementById("btn");
var menu = document.getElementById("menu");
var show = document.getElementsByClassName("show");


     btn.addEventListener("click",()=>{
         menu.classList.toggle("show");
         menu.style.transition="all 1s";
     });

