function ValidateEmail(inputText)
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 


if (inputText.value.match(mailformat))
    
{

document.getElementById("msg").innerHTML=
("You have successfully subcribed for Students Zone newletter!");
document.getElementById("msg").style.color="Green";
document.form1.input.focus();  

 
}  
else  
{  
document.getElementById("msg").innerHTML=
("You have entered an invalid email address!");
document.getElementById("msg").style.color="red";
document.form1.input.focus();  
return false; }} 

 
    