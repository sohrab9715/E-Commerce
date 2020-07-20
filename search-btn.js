let btnclose=document.querySelector('.search-btnclose')
let btnsearch=document.querySelector('.btnsearch')
let search_box=document.querySelector('.search-box')
btnsearch.addEventListener("click", myFunction1);

    function myFunction1() 
    {
        if (search_box.style.display === "none")
        {
            search_box.style.transition="linear";
            search_box.style.display = "block";
        }
        else
        {
            search_box.style.display = "none";
        }     
    }


btnclose.addEventListener("click", myFunction);

function myFunction() {
  search_box.style.display = "none";
}