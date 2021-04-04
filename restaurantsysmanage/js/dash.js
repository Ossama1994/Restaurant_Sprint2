var overl = document.getElementById("overl");
var ajouter = document.getElementById("ajouter");
var fermer = document.getElementById("fermer");

     

ajouter.addEventListener("click",function display(){
    overl.style.display="flex";
    overl.style.flexDirection="column";
})

fermer.addEventListener("click",function none(){
    overl.style.display="none";
})