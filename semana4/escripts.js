let btnalerta = document.getElementById("btnalerta")
let encabezado = document.querySelector(".encabezado")
let parrafos = document.querySelectorAll("p")
let btncrear = document.querySelector("#btncrear")
let agregar = document.querySelector("#agregar")

agregar.addEventListener("mouseover",function(){
    agregar.setAttribute("class","estilonuevo")
})


//document.body.removeChild(encabezado)


btncrear.addEventListener("click",()=>{
    var encabezado2 = document.createElement("h2")
    encabezado2.innerHTML = "Hola soy un elemento creado con js"
    encabezado2.style.color = "green"
    encabezado2.style.fontFamily="Verdana, Geneva, Tahoma, sans-serif"
    document.body.append(encabezado2)
})


parrafos.forEach((parrafo,index)=>{
    parrafo.addEventListener("mouseover",()=>{
        parrafo.style.color="red"      
    })

    parrafo.addEventListener("mouseleave",()=>{
        parrafo.style.color="black"
    })
})

encabezado.addEventListener("mouseover",()=>{
    console.log("El mouse esta sobre el elemento h1")
})

function alerta(){
    alert("Esto es una alerta!")
}

function cambio(){
    console.log("El input esta en el foco")
}

function salida(){
    console.log("El input esta fuera de foco")
}

btnalerta.addEventListener("click",function(){
    alert("Este evento se activa por un listener")
})