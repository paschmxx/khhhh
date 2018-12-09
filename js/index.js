// MENU
var app = document.getElementById('app');
var nav = document.getElementById('nav');
var openMenu = document.getElementById('menuOpen');
var burger = document.getElementById('burger');
var times = document.getElementById('times');

openMenu.onclick  = function() {
    nav.style.display = "flex";
    burger.style.display = "none";
    times.style.display = "flex";
    document.ontouchmove = function (event) { 

        var isTouchMoveAllowed = true, target = event.target; 
    
        while (target !== null) { 
         if (target.classList && target.classList.contains('nav')) { 
          isTouchMoveAllowed = false; 
          break; 
         } 
         target = target.parentNode; 
        } 
    
        if (!isTouchMoveAllowed) { 
         event.preventDefault(); 
        } 
    }; 
}

// times.onclick  = function() {
//     nav.style.display = "none";
// }

// window.onclick  = function(event) {
//     if (event.target == nav) {
//         nav.style.display = "none";
//     }
// }