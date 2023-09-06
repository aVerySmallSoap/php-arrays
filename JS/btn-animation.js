let btn = document.querySelectorAll(".btn");

for (const elem of btn) {
    elem.addEventListener("mouseover", ()=>{
        elem.style.transition = "ease-out 1500ms";
        elem.style.transform = "translateY(-8px)";
        elem.style.boxShadow = "1px 2px 3px 1px rgba(0,0,0,25%)";
    })
    elem.addEventListener("mouseout", ()=>{
        elem.style.transition = "ease-in 1500ms";
        elem.style.transform = "";
    })
}