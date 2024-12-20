// header menu bar start

let MenuFixed=document.getElementById('header');
const humberger=document.querySelector(".humberger");
const navMenu=document.querySelector(".navbar-menu");
const navMenus=[...document.querySelectorAll(".navbar-menu ul a")];

humberger.addEventListener("click", () =>{
    humberger.classList.toggle("active"); 
    navMenu.classList.toggle("active"); 
    // alert('salit mes amis chui la coucou')
})

navMenus.forEach(link=> link.addEventListener("click",()=>{
    navMenu.classList.remove("active")
    humberger.classList.remove("active")
}))


window.addEventListener("scroll",function ScrollMenu(){
    if (window.scrollY>30) {
      MenuFixed.style.backgroundColor="black";
      MenuFixed.style.color="white"
    }else{
     MenuFixed.style.backgroundColor="";
    }
 })


// header section scripts end

// sliders section start

const myslide=document.querySelectorAll(".myslider")
const dot=document.querySelectorAll(".dot")

let counter=1
slidefun(counter)

let timer=setInterval(autoslid,8000)
function autoslid(){
    counter+=1
    slidefun(counter)
}
function plusSlides(n){
    counter+=n
    slidefun(counter)
    resetTimer()
}

function currentSlide(n){
    counter=n
    slidefun(counter)
    resetTimer()
}
function resetTimer(){
    clearInterval(timer)
    timer=setInterval(autoslid,8000)
}


function slidefun(n){
    let i
    for (i= 0;i<myslide.length;i++) {
        myslide[i].style.display='none'
        // console.log(myslide[i])
    }
    for (i= 0;i<dot.length;i++) {
        dot[i].classList.remove('active')
    }

    if (n>myslide.length) {
        counter=1
    }
    if (n<1) {
        counter=myslide.length
    }

    myslide[counter-1].style.display="block"
    console.log(myslide[counter-1])
    dot[counter-1].classList.add("active")
}

// Login part one start for Administration

let Administrateur=document.querySelector(".show-connection")
Administrateur.addEventListener("click",function popup(){
    document.querySelector(".form").classList.add('activ')
    console.log("salut je fonctionne")
})
document.querySelector(".btn-close").addEventListener("click",function (){
    document.querySelector(".form").classList.remove('activ')
})

// login part two for Parent


let Parent=document.querySelector(".show-connection-parent")
Parent.addEventListener("click",function popup(){
    document.querySelector(".form2").classList.add('activ2')
    console.log("salut je fonctionne")
})
document.querySelector(".btn-close").addEventListener("click",function (){
    document.querySelector(".form2").classList.remove('activ')
})



//drodown part

const dropdownBtn=document.getElementById('btn')
const SubMenu=document.getElementById('dropdown')
const AllSubMenu=[...document.querySelectorAll(".slider .dropdown a")]

AllSubMenu.forEach(link=> link.addEventListener("click",()=>{
    SubMenu.classList.remove("visible")
}))

navMenus.forEach(link=> link.addEventListener("click",()=>{
    SubMenu.classList.remove("visible")
    document.querySelector(".formInscrit").classList.remove('activation')
}))

const VisbleMenu=function drop(){
    SubMenu.classList.add("visible")
}
dropdownBtn.addEventListener("click",function visible(a){
    a.stopPropagation()
    VisbleMenu()
    
})


// Login part two start

let Inscription=document.querySelector(".showInscription")
Inscription.addEventListener("click",function popup(){
    document.querySelector(".formInscrit").classList.add('activation')
    console.log("salut je fonctionne")
})
document.querySelector(".btn-close-inscrit").addEventListener("click",function (){
    document.querySelector(".formInscrit").classList.remove('activation')
})