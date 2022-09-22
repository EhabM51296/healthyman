let leftArrows = document.getElementsByClassName("leftArrow");
let rightArrows = document.getElementsByClassName("rightArrow");
const bigScreen = 850;
const smallScreen = 450; 
if(parseInt(window.innerWidth) > bigScreen)
{
    document.getElementsByClassName("member")[1].classList.add("onView");
}
for(let i = 0;i<leftArrows.length;i++)
{
    leftArrows[i].addEventListener("click",function(e){
        let elements = document.getElementsByClassName(e.target.id.split("_")[1]);
        let fe = elements[0];
        let marginInProgress = parseInt(fe.style.marginLeft);
        let addMargin = 0;
        let finalMargin = 0;
        if(!marginInProgress) marginInProgress = 0;
        let windowsWidth = window.innerWidth;
        if(parseInt(windowsWidth) > bigScreen)
        {
            addMargin = 35;
            finalMargin = addMargin;
        }
       else if(parseInt(windowsWidth) <= bigScreen  && parseInt(windowsWidth) > smallScreen)
        {
            addMargin = 55;
            finalMargin = addMargin;
        }
        else
        {
            addMargin = 105;
            finalMargin = 0;
        }
        if(marginInProgress == finalMargin) return;                                                                                                           
        fe.style.marginLeft = (marginInProgress + addMargin) + "%";
        if(parseInt(windowsWidth) > bigScreen )
        {
            elements[parseInt(fe.style.marginLeft) / -addMargin + 2 ].classList.remove("onView");
            elements[parseInt(fe.style.marginLeft) / -addMargin + 1].classList.add("onView");
        }
 
    });
}
for(let i = 0;i<rightArrows.length;i++)
{
    rightArrows[i].addEventListener("click",function(e){
        let elements = document.getElementsByClassName(e.target.id.split("_")[1]);
        let fe = elements[0];
        let marginInProgress = parseInt(fe.style.marginLeft);
        let addMargin = 0;
        let finalFinalMargin = 0;
        if(!marginInProgress) marginInProgress = 0;
        let windowsWidth = window.innerWidth;
        if(parseInt(windowsWidth) > bigScreen )
        {
            addMargin = -35;
            finalMargin = addMargin * (elements.length - 2);
        }
        else if(parseInt(windowsWidth) <= bigScreen  && parseInt(windowsWidth) > smallScreen)
        {
            addMargin = -55;
            finalMargin = addMargin * (elements.length - 1);
        }
        else
        {
            addMargin = -105;
            finalMargin = addMargin * (elements.length - 1);
        }
        if(marginInProgress == finalMargin) return;                                                                                                           
        fe.style.marginLeft = (marginInProgress + addMargin) + "%";
        if(parseInt(windowsWidth) > bigScreen )
        {
            elements[parseInt(fe.style.marginLeft) / addMargin ].classList.remove("onView");
            elements[parseInt(fe.style.marginLeft) / addMargin + 1].classList.add("onView");
        }
    });
}

window.addEventListener("resize", scrollResize);

function scrollResize() {
    const boxes = document.querySelectorAll('.BoxItem');
    const teamBoxes = document.querySelectorAll('.member');
    for (const box of boxes) {
        box.classList.remove('onView');
        box.style.marginLeft = "0%";
      }
    if(parseInt(window.innerWidth) > bigScreen)
{
    teamBoxes[1].classList.add("onView");
}

}
