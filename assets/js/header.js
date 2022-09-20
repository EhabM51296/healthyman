let navigator = document.getElementById("burgerNav");
navigator.addEventListener("click",function(e){
    let list = document.getElementById("headerLinksList");
    if(list.style.left == "0%") 
        list.style.left = "-110%";
    else
        list.style.left = "0%";

    });
