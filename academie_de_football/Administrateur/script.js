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
        h2.style.color=""
    }
 })


const Admin=document.getElementById("Administrateur")
Admin.addEventListener("click",function(){
  document.querySelector(".tables2").style.opacity="0"
  document.querySelector(".tables3").style.opacity="0"
  document.querySelector(".tables4").style.opacity="0"
  document.querySelector(".tables5").style.opacity="0"
  document.querySelector(".tables").style.opacity="0"
  document.querySelector(".tables6").style.opacity="0"
})

let parent=document.getElementById("parent")
parent.addEventListener("click", function(){
  const tableau=document.querySelector(".tables")
  tableau.style.opacity="1"
  tableau.style.zIndex="100"
  document.querySelector(".tables2").style.opacity="0"
  document.querySelector(".tables2").style.zIndex="0"
    document.querySelector(".tables3").style.opacity="0"
    document.querySelector(".tables3").style.zIndex="0"
    document.querySelector(".tables4").style.opacity="0"
    document.querySelector(".tables4").style.zIndex="0"
  document.querySelector(".tables5").style.opacity="0"
  document.querySelector(".tables5").style.zIndex="0"
  document.querySelector(".tables6").style.opacity="0"
  document.querySelector(".tables6").style.zIndex="0"
})

const ajouterParent=document.getElementById("ajouterParent")
ajouterParent.addEventListener("click", function (){
  document.querySelector(".ajouter").classList.add('activation')
})

let joueur=document.getElementById("joueur")
joueur.addEventListener("click", function(){
  const tableau=document.querySelector(".tables2")
  tableau.style.opacity="1"
  tableau.style.zIndex="100"
  document.querySelector(".tables").style.opacity="0"
  document.querySelector(".tables").style.zIndex="0"
    document.querySelector(".tables3").style.opacity="0"
    document.querySelector(".tables3").style.zIndex="0"
    document.querySelector(".tables4").style.opacity="0"
    document.querySelector(".tables4").style.zIndex="0"
  document.querySelector(".tables5").style.opacity="0"
  document.querySelector(".tables5").style.zIndex="0"
  document.querySelector(".tables6").style.opacity="0"
  document.querySelector(".tables6").style.zIndex="0"

})

const ajouterJoueur=document.getElementById("ajouterJoueur")
ajouterJoueur.addEventListener("click", function (){
  document.querySelector(".Ajouterjoueur").classList.add('activation')
})


let Equiper=document.getElementById("Equiper")
Equiper.addEventListener("click", function(){
  const tableau=document.querySelector(".tables3")
  tableau.style.opacity="1"
  tableau.style.zIndex="100"
  document.querySelector(".tables2").style.opacity="0"
  document.querySelector(".tables2").style.zIndex="0"
  document.querySelector(".tables").style.opacity="0"
  document.querySelector(".tables").style.zIndex="0"
   document.querySelector(".tables4").style.opacity="0"
   document.querySelector(".tables4").style.zIndex="0"
  document.querySelector(".tables5").style.opacity="0"
  document.querySelector(".tables5").style.zIndex="0"
  document.querySelector(".tables6").style.opacity="0"
  document.querySelector(".tables6").style.zIndex="0"

})

const ajouterEquipe=document.getElementById("ajouterEquipe")
ajouterEquipe.addEventListener("click", function (){
  document.querySelector(".AjouterEquipes").classList.add('activation')
  console.log("salut")
})


let Entrainaire=document.getElementById("Entrainaire")
Entrainaire.addEventListener("click", function(){
  const tableau=document.querySelector(".tables4")
  tableau.style.opacity="1"
  tableau.style.zIndex="100"
  document.querySelector(".tables2").style.opacity="0"
  document.querySelector(".tables2").style.zIndex="0"
  document.querySelector(".tables3").style.opacity="0"
  document.querySelector(".tables3").style.zIndex="0"
  document.querySelector(".tables").style.opacity="0"
  document.querySelector(".tables").style.zIndex="0"
  document.querySelector(".tables5").style.opacity="0"
  document.querySelector(".tables5").style.zIndex="0"
  document.querySelector(".tables6").style.opacity="0"
  document.querySelector(".tables6").style.zIndex="0"

})

const ajouterEntraineur=document.getElementById("ajouterEntraineur")
ajouterEntraineur.addEventListener("click", function (){
  document.querySelector(".AjouterEntraineur").classList.add('activation')
  console.log("salut")
})


let Formateur=document.getElementById("Formateur")
Formateur.addEventListener("click", function(){
  const tableau=document.querySelector(".tables5")
  tableau.style.opacity="1"
  tableau.style.zIndex="100"
  document.querySelector(".tables2").style.opacity="0"
  document.querySelector(".tables2").style.zIndex="0"
  document.querySelector(".tables3").style.opacity="0"
  document.querySelector(".tables3").style.zIndex="0"
  document.querySelector(".tables4").style.opacity="0"
  document.querySelector(".tables4").style.zIndex="0"
  document.querySelector(".tables").style.opacity="0"
  document.querySelector(".tables").style.zIndex="0"
  document.querySelector(".tables6").style.opacity="0"
  document.querySelector(".tables6").style.zIndex="0"

})

const ajouterFormateurr=document.getElementById("ajouterFormateur")
ajouterFormateur.addEventListener("click", function (){
  document.querySelector(".AjouterFormateur").classList.add('activation')
  console.log("salut")
})

let publier=document.getElementById("publier")
publier.addEventListener("click", function(){
  const tableau=document.querySelector(".tables6")
  tableau.style.opacity="1"
  tableau.style.zIndex="100"
  document.querySelector(".tables2").style.opacity="0"
  document.querySelector(".tables2").style.zIndex="0"
  document.querySelector(".tables3").style.opacity="0"
  document.querySelector(".tables3").style.zIndex="0"
  document.querySelector(".tables4").style.opacity="0"
  document.querySelector(".tables4").style.zIndex="0"
  document.querySelector(".tables").style.opacity="0"
  document.querySelector(".tables").style.zIndex="0"
  document.querySelector(".tables5").style.opacity="0"
  document.querySelector(".tables5").style.zIndex="0"

})



