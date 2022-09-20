let leftArrows = document.getElementsByClassName("leftArrow");
let rightArrows = document.getElementsByClassName("rightArrow");
document.getElementsByClassName("member")[1].classList.add("onView");
for(let i = 0;i<leftArrows.length;i++)
{
    leftArrows[i].addEventListener("click",function(e){
        let elementsClass = e.target.id.split("_")[1];
        let elements = document.getElementsByClassName(elementsClass);
        let index = (parseInt(elements[0].style.marginLeft) / 35) * -1;
        if(!index) index = 0; 
        if (index == -1) return;
            elements[0].style.marginLeft = (-35 * index + 35) + "%";
            elements[index + 1].classList.remove("onView");
            elements[index].classList.add("onView");
 
    });
}
for(let i = 0;i<rightArrows.length;i++)
{
    rightArrows[i].addEventListener("click",function(e){
        let elementsClass = e.target.id.split("_")[1];
        let elements = document.getElementsByClassName(elementsClass);
        let index = (parseInt(elements[0].style.marginLeft) / 35) * -1;
        if(!index) index = 0;
        if (index == elements.length - 2) return;
            elements[0].style.marginLeft = (-35 * index - 35) + "%";
            elements[index + 1].classList.remove("onView");
            elements[index + 2].classList.add("onView");
    });
}
