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

var w = document.querySelectorAll(".words");
var wr = document.querySelector("#words_wrapper");

/*
function add_words_on_enter() {
    w.forEach(element => {
        element.addEventListener("keypress", function(e) {
            var key = e.which || e.keyCode;
            if (key === 13) {
                add_words();
            }
        })
    });
}
*/

function add_words() {
   var input = document.createElement("input");
   input.type = "text";
   input.className = "words";
   input.placeholder = "Słowo";
   input.required = "required";

   var translation = document.createElement("input");
   translation.type = "text";
   translation.className = "words";
   translation.placeholder = "Tłumaczenie";

   var br = document.createElement("br");
   wr.appendChild(br);
   wr.appendChild(input);
   wr.appendChild(translation);
}