//Arreglos

      ///  0,1,2,3,4,5,6,7
numeros = [1,2,3,4,5,6,7,9]
console.log(numeros[2])
//metodo push()
numeros[4]=20
numeros.push()
console.log(numeros)
nombres = []


meses = new Array("junio","febrero","marzo")
console.log(meses[1])
//metodo pop
meses.pop()
console.log(meses)
personas = new Array()


dias = ["Lunes","Martes","Miercoles","Jueves","Viernes"]
//metodo delete
delete(dias[3])
console.log(dias)

//metodo splice
dias.splice(2,3)
console.log(dias)

frutas = ["manzana","uva","sandia","melon"]
frutas.splice(1,0,"pera")
console.log(frutas)

//metodo unshit

cola = ["Cliente 1","Cliente 2","Cliente 3"]
cola.unshift("Cliente prioriotario")
console.log(cola)


//metodo filter

let numeros2 = [2,5,1,6,8,9]
let pares = numeros2.filter(n=>n %2 == 0)
console.log(pares)

//metodo map

let numeros3 = [5,7,1,3,12,6,35]
let cuadrados = numeros3.map(n=>n*n)
console.log(cuadrados)

//metodo reduce

let numeros5 = [23,45,12,67,34]
let mayor = numeros5.reduce((max,num)=>{
    return num > max ? num: max
},0)
console.log(mayor)

//estructura if
let num1 = 20
let num2 = 10

if(num1 > num2 ){
    console.log("El mayor es: "+num1)
}else if(num2>num1){
    console.log("El mayor es: "+num2)
}
else{
    console.log("Valores invalidos")
}


//estructura switch
let opcion = 1

switch(opcion){
    case 1:
        console.log("Escogiste la primera opcion")
        break

    case 2:
        console.log("Escogiste la segunda opcion")
        break
    
    case 3:
        console.log("Escogiste la tercera opcion")
        break

    default:
        console.log("Opcion invalida")
        break
}


//for
arreglo1 = [1,2,4,5,6]
for(let i = 0; i<arreglo1.length;i++){
    console.log(`Indice ${i}: ${arreglo1[i]}`)
}

//for or
for(numero of arreglo1){
    console.log(numero)
}

//foreach
let valores = [10,20,30]

valores.forEach((num,index)=>{
    console.log(`El numero en la posicion ${index} es ${num}`)
})

//for .. in

let usuario = {nombre:"Pedro",apellido:"Perez"}

for (let clave in usuario){
    console.log(`${clave}: ${usuario[clave]}`)
}


//do y do while

let valor = 3

while (valor>0){
    console.log(valor)
    valor--
}

let intentos = 0

do{
    console.log(intentos)
    intentos++
}while(intentos<0)

let numero1 = 20
let numero2 = 0

try {
    resultado = numero1/numero2
    
} catch (error) {
    console.log("No puedes dividir entre cero!")
    
}

function cuadrado(numero) {
    return numero*numero
}
console.log(cuadrado(20))

function operacion(numero,multiplicador=2){
    return numero*multiplicador
}

console.log(operacion(40))
console.log(operacion(60,3))

let multiplicacion = function(num1,num2){
   return num1*num2 
}
console.log(multiplicacion(20,2))


let restar = (n1,n2) => n1-n2
console.log(restar(10,4))

let edad = 17
let estado = (edad >= 18) ? "Es mayor de edad":"Es menor de edad"
console.log(estado)

































