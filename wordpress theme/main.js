let collbtn = document.getElementById("archivebtn");
let colldiv = document.getElementById("colldiv");

collbtn.addEventListener("click", function(){
                    
    if(colldiv.style.display === "flex") {
        colldiv.style.display = "none"
    } else {
        colldiv.style.display = "flex";
    }
});
            