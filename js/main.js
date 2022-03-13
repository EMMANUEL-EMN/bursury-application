window.addEventListener("load",start);
function start() {
let close=document.getElementById('close');
let menu=document.getElementById('menu');
let nav=document.getElementById('nav3');
nav.style.display="none";
close.addEventListener('click',()=>{
    nav.style.display="none";
});
menu.addEventListener("click",()=>{
nav.style.display="block";
});




}