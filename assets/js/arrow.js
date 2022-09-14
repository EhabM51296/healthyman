let leftArrows = document.getElementsByClassName("leftArrow");
let rightArrows = document.getElementsByClassName("rightArrow");
let index = 0;
document.getElementsByClassName("member")[1].classList.add("onView");
for(let i = 0;i<leftArrows.length;i++)
{
    leftArrows[i].addEventListener("click",function(e){
        if (index == -1) return;
            let elementsClass = e.target.id.split("_")[1];
            let elements = document.getElementsByClassName(elementsClass);
            elements[0].style.marginLeft = (-35 * index + 35) + "%";
            elements[index+1].classList.remove("onView");
            index--;
            elements[index+1].classList.add("onView");
 
    });
}
for(let i = 0;i<rightArrows.length;i++)
{
    rightArrows[i].addEventListener("click",function(e){
        if (index == 4) return;
            let elementsClass = e.target.id.split("_")[1];
            let elements = document.getElementsByClassName(elementsClass);
            elements[0].style.marginLeft = (-35 * index - 35) + "%";
            index++;
            elements[index].classList.remove("onView");
            elements[index+1].classList.add("onView");
    });
}
