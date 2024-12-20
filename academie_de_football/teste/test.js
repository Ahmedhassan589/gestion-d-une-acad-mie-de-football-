const button=document.querySelector("button")
const section=document.querySelector("p")
const titre=document.querySelector("h1")
const H2=document.querySelector("h2")
let ali=H2.innerHTML
button.addEventListener("click" , function(){
    Notification.requestPermission().then(perm=>{
        if(perm==="granted"){
            const notication=new Notification("salut je m'appel abdirahman.",{
                body: Math.random(),
                data:{hello: ali},
                tag:"Message de l'Administrateur"
            })
            titre.innerHTML=notication.tag
            section.innerHTML=notication.data.hello
            // notication.addEventListener("error",e=>{
            //     alert('hello')
            // })
        }
    })
})

// document.addEventListener("visiblitychange",()=>{
//     new Notification("Come Back please",{
//         body:"pleasseee",
//         tag:"Come Back",
//     })
// })

