function validation()
{
    var name=document.querySelector(".name");
    var mobile=document.querySelector(".mobile");
    var email=document.querySelector(".email");
    var password=document.querySelector(".password");

    var atposition=email.value.indexOf("@");
    var dotposition=email.value.indexOf(".");
    if(name.value.trim()=='')
    {
    //alert("Enter the name");
   // name.style.border = "2px solid red";
    document.querySelector("#ename").innerHTML='Name required';
    name.focus();
    return false;
    
    }
    else
    {
        document.querySelector("#ename").innerHTML=" ";

  
    }
    if(!isNaN(name.value))
    {
        document.querySelector("#ename").innerHTML='Only Charachters are Allowe.';
        name.focus();
        return false;
          
    }
    else
    {
        document.querySelector("#ename").innerHTML=" ";
    }
    if(email.value.trim()=='')
    {
        document.querySelector("#eemail").innerHTML='Email Id required';
        email.focus();
        return false;
         
    }
    else
    {
        document.querySelector("#eemail").innerHTML=" ";
    }
    if(atposition<1 || dotposition<atposition+2 || dotposition+2 >= email.value.length)
    {
        document.querySelector("#eemail").innerHTML='Enter Valid Email Address';
        email.focus();
        return false;
         
    }
    else
    {
        document.querySelector("#eemail").innerHTML=" ";
    }
    if(mobile.value.trim()=='')
    {
        document.querySelector("#emobile").innerHTML='Mobile Number required';
        mobile.focus();
        return false;
          
    }
    else
    {
        document.querySelector("#emobile").innerHTML=" ";
    }
    if(mobile.value.trim().length !=10)
    {
        document.querySelector("#emobile").innerHTML='Mobile Number Must be 10 dijits';
        mobile.focus();
        return false;
          
    }
    else
    {
        document.querySelector("#emobile").innerHTML=" ";
    }
    if(isNaN(mobile.value))
    {
        document.querySelector("#emobile").innerHTML='Enter vaild Mobile Number.';
        mobile.focus();
        return false;
          
    }
    else
    {
        document.querySelector("#emobile").innerHTML=" ";
    }
     
    if(password.value.trim()=='')
    {
        document.querySelector("#epassword").innerHTML='Please Enter Password';
        password.focus();
        return false;
       
    }
    else
    {
        document.querySelector("#epassword").innerHTML=" ";
    }
    if(password.value.length<=6)
    {
        document.querySelector("#epassword").innerHTML='Password must be at least 6 characters long';
        password.focus();
        return false;
       
    }
    else
    {
        document.querySelector("#epassword").innerHTML=" ";
    }
    if(cpassword.value.trim()=='')
    {
        document.querySelector("#ecpassword").innerHTML='Please Enter Conform Password';
        cpassword.focus(); 
        return false;
    }
    else
    {
        document.querySelector("#ecpassword").innerHTML=" ";
    }
    if(password.value != cpassword.value)
    {
        document.querySelector("#ecpassword").innerHTML='Password are not Matched';
        return false;

    }
    else
    {
        document.querySelector("#ecpassword").innerHTML=" ";
    }
}
