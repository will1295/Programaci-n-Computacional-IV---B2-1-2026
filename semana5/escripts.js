class MiMensaje extends HTMLElement{
    constructor(){
        super();
        this.innerHTML = '<h1>Hola Mundo!</h1>'
    }
}

customElements.define('mi-mensaje',MiMensaje)

class SaludoNombre extends HTMLElement{
 
    connectedCallback(){
        let nombre = this.getAttribute("nombre")
        this.innerHTML = `Hola ${nombre}`
    }
}
customElements.define('saludo-nombre',SaludoNombre)

class SaludoInput extends HTMLElement{
    constructor(){
        super()
        this.nombre = "Mundo"
    }

    static get observedAttributes(){
        return ['nombre']
    }

    attributeChangedCallback(name,oldValue,newValue){
        if(name === 'nombre' && oldValue !== newValue){
            this.nombre = newValue
            this.render()
        }
    }

    connectedCallback(){
        this.render()
    }

    render(){
        this.innerHTML = `<h1>Hola ${this.nombre}</h1>`
    }

}

customElements.define('saludo-input',SaludoInput)

let input1 = document.getElementById("inputnom")
let elemento = document.querySelector("saludo-input")

input1.addEventListener("input",(e)=>{
    console.log(e.target.value)
    elemento.setAttribute("nombre",e.target.value || "Mundo")
})

class ParrafoShadow extends HTMLElement{
    constructor(){
        super()
        this.attachShadow({mode:"open"})
    }
    connectedCallback(){
          this.shadowRoot.innerHTML = `
            <style>
                p{
                    color:blue
                }
            </style>  

            <p>Hola</p>
        `
    }
}
customElements.define("parrafo-shadow",ParrafoShadow)


class EjemploTemplate extends HTMLElement{
    constructor(){
        super()
        this.attachShadow({mode:"open"})
    }

    connectedCallback(){
        let plantilla = document.getElementById("miplantilla")
        let contenido = plantilla.content.cloneNode(true)
        this.shadowRoot.appendChild(contenido)
    }
}

customElements.define("ejemplo-template",EjemploTemplate)