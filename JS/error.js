function throwAlert(emphasized, message, status){
    let parent = document.querySelector(".right-container");
    let div = document.createElement("div");
    div.className = "alert-container";
    div.innerHTML = "<div class='message-container'>" +
        "<span class='emphasized'>"+emphasized+"&nbsp</span>" +
        "<span class='message'>"+message+"</span>" +
        "</div>"

    div.style.color = (status === "" || status === undefined) ? "red": status;
    div.style.animation = "bottom-top 2s ease-in";
    setInterval(()=>{
        div.style.animation = "fadeOut 0.5s ease-out";
        setInterval(()=> div.remove(), 500);
    },5000);
    parent.append(div);
}