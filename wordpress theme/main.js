let collbtn = document.getElementById("archivebtn");
let colldiv = document.getElementById("colldiv");

collbtn.addEventListener("click", function(){
                    
    if(colldiv.style.display === "flex") {
        colldiv.style.display = "none"
    } else {
        colldiv.style.display = "flex";
    }
});
            
function onTabClick(event) {
    let activeTabs = document.querySelectorAll(".active");

    for( let i = 0; i < activeTabs.length; i++) {
       activeTabs[i].className = activeTabs[i].className.replace('active', '');
    }

    event.target.parentElement.className += 'active';
    document.getElementById(event.target.href.split('#')[1]).className += ' active';
    console.log(event.target);
    console.log(event.target.parentElement);
   
}

const element = document.getElementById("research-items")
element.addEventListener("click", onTabClick, false);