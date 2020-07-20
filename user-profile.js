var profile =document.querySelector('.profile');
const order=document.querySelector('.order');
const address=document.querySelector('.address');
const btnadd_new_add=document.querySelector('.add-new-address');
const frm_address_container=document.querySelector('.address-container');
const payment =document.querySelector('.payment');
 
btnadd_new_add.addEventListener("click",function()
{
    if (frm_address_container.style.display === "none")
    {
        frm_address_container.style.display = "block";
    }
    else 
    {
        frm_address_container.style.display = "none";
    }
});
function btnprofile()
{
    if(profile.style.display==="none")
    {
        profile.style.display="block";
        order.style.display="none";
        address.style.display="none";
        payment.style.display="none"; 
    }
   
}
function btnorder()
{
    if(order.style.display==="none")
    {
        order.style.display="block";
        profile.style.display="none";
        address.style.display="none";
        payment.style.display="none"; 
    }
}
function btnaddress()
{
    if(address.style.display==="none")
    {
        address.style.display="block";
        profile.style.display="none";
        order.style.display="none";
        payment.style.display="none"; 
    }
}
function btnpayment()
{
    if(payment.style.display==="none")
    {
        payment.style.display="block";
        profile.style.display="none";
        address.style.display="none";
        order.style.display="none"; 
    }
}