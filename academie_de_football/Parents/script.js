let header=document.getElementById("header")
let h2=document.querySelector('h2')


window.addEventListener("scroll",function ScrollMenu(){
    if (window.scrollY>30) {
        header.style.backgroundColor="black";
        header.style.color="white"
        h2.style.color="white"
        header.style.zIndex='1000000'
    }else{
        header.style.backgroundColor="";
        header.style.color=""
        h2.style.color=""
    }
 })


 const Accueil=document.getElementById("Accueil")
 Accueil.addEventListener("click",function(){
    const tableau=document.querySelector(".tables")
    tableau.style.opacity="1"
    tableau.style.zIndex="100"
    document.querySelector(".tables6").style.opacity="0"
    document.querySelector(".tables6").style.zIndex="0"
})

const message=document.getElementById("message")
message.addEventListener("click",function(){
    const tableau=document.querySelector(".tables6")
    tableau.style.opacity="1"
    tableau.style.zIndex="100"
    document.querySelector(".tables").style.opacity="0"
    document.querySelector(".tables").style.zIndex="0"
})