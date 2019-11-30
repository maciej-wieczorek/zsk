function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


var pf = document.querySelectorAll(".pf_content");
pf.forEach(element => {
    element.addEventListener("click", function() {flip(element);});
});

function flip(element) {
    element.style.transform += "rotateX(180deg)";
}