let leftArrows = document.getElementsByClassName("leftArrow");
let rightArrows = document.getElementsByClassName("rightArrow");
let index = 0;
for(let i = 0;i<leftArrows.length;i++)
{
    leftArrows[i].addEventListener("click",function(e){
        if (index == 0) return;
            let elementsClass = e.target.id.split("_")[1];
            let elements = document.getElementsByClassName(elementsClass);
            elements[0].style.marginLeft = (-35 * index + 35) + "%";
            index--;
 
    });
}
for(let i = 0;i<rightArrows.length;i++)
{
    rightArrows[i].addEventListener("click",function(e){
        if (index == 3) return;
            let elementsClass = e.target.id.split("_")[1];
            let elements = document.getElementsByClassName(elementsClass);
            elements[0].style.marginLeft = (-35 * index - 35) + "%";
            index++;
    });
}
