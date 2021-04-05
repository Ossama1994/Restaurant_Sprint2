var email = document.getElementById("email");
var pass = document.getElementById("password");
var comt = document.getElementById("comment");
var error = document.getElementById("error");
var error1 = document.getElementById("error1");
var error2 = document.getElementById("error2");
var btn1 = document.getElementById("btn1");

     btn1.addEventListener("click",function validate(e){
          e.preventDefault();
        var emailvalue = email.value;
        var passvalue = pass.value;
        var comtvalue = comt.value;
       
        if(emailvalue=="")
        {
            error.innerHTML="pls fill the blank";
        }
        else if(passvalue=="")
         {
             error1.innerHTML="pls fill the blank";
         }
         else if(comtvalue==""){

             error2.innerHTML="<strong> pls fill the blank </strong>"
         }
         else{
             error.innerHTML="";
             error1.innerHTML="";
             error2.innerHTML="";
         }
     });
