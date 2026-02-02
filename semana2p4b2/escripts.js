var variable;
let variable2;
const constante = 20;

let variable3 = "Esto es una variable";
let variable4 = 200;
let variable5 = true;
let variable6 = null;

//Escribir en la consola del navegador
console.log("Valor de la constate: "+constante)
console.warn("Mensaje!")
console.error("Mensaje")
console.info("Mensaje")

let fechahoy = new Date()
console.log(fechahoy.toDateString('es-ES',
    {
        dateStyle: 'full'
    }
));

let num1 = 20
let num2 = 10
console.log(num1+num2)

let variablebol1 = true
let variablebol2 = false

console.log(variablebol1 && variablebol2)
console.log(variablebol1 || variablebol2)
console.log(!variablebol1)


console.log("Esto es una 'cadena'")
console.log('Esto tambien es una "cadena"')
console.log(`'Esto' es una "cadena"`)

let input1 = document.getElementById("input1")
let input2 = document.getElementById("input2")
let btnsumar = document.getElementById("btnsumar")
let spanresult = document.getElementById("spanresult")

btnsumar.addEventListener("click",function(){
    let resultado = Number(input1.value)+Number(input2.value)
    spanresult.innerHTML = resultado
})


let inputtotal = document.getElementById("inputtotal")
let inputpropina = document.getElementById("inputpropina")
let selecoption = document.getElementById("selectoption")
let btncalcular = document.getElementById("btncalcular")
let spanresult2 = document.getElementById("spanresult2")

console.log(Number(inputtotal.value))

btncalcular.addEventListener("click",function(){

    let resultado = (Number(inputtotal.value))+(Number(inputtotal.value)*Number(inputpropina.value))
    spanresult2.innerHTML = "Tu total es de: "+resultado+" y tu forma de pago es "+selecoption.value
})




