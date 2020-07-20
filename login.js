function validation()
{
   
    var mobile=document.querySelector(".txtmobile");
    var password=document.querySelector(".txtpassword");

    if(mobile.value.trim()=='')
    {
    //alert("Enter the name");
   // name.style.border = "2px solid red";
    document.querySelector("#emobile").innerHTML='Enter Mobile Number';
    mobile.focus();
    return false;
    
    }
    else
    {
        document.querySelector("#emobile").innerHTML=" ";

  
    }
    if(password.value.trim()=='')
    {
        document.querySelector("#epassword").innerHTML='Enter Password';
        password.focus();
        return false;
         
    }
    else
    {
        document.querySelector("#epassword").innerHTML=" ";
    }
   
}
