<script setup>
    import {ref} from 'vue';

    let imagen = ref("https://facturacion.ugb.edu.sv/img/job-profile2.a5201693.png");

    function cambiarimagen(){
        imagen.value = "https://dei.uca.edu.sv/wp-content/uploads/bfi_thumb/logo-ugb-vertical-3nfblpu05m74w6trcigem8.png"
    }

    let colorTexto = ref("blue")
    let tamaño = ref(16)

    function cambiar(){
        colorTexto.value = "red"
        tamaño.value +=20
    }

    let nombre = ref('')
    let mensaje = ref('')
    let estado = ref(false)
    let pais = ref("sv")
    let frutas = ref([
        'Manzanas',
        'Uvas',
        'Sandias',
        'Mangos'
    ])

    let productos = ref([
        {id:1,nombre:"Laptop",precio:1200},
        {id:2,nombre:"Mouse",precio:25},
        {id:3,nombre:"Teclado",precio:35}
    ])

    let mostrar = ref(true)
    let proceso = ref(12312)
    let visible = ref(false)
    let parrafo = ref("<h1 style='color:red'>Este codigo se va a ver como un titulo</h1>")

    let vColor = {
        mounted(el,binding){
            el.style.color = binding.value
        }
    }

</script>

<template>
    <img v-bind:src="imagen" alt="" srcset="">
    <button @click="cambiarimagen">Haz click aqui!</button>

    <p :style="{color:colorTexto,fontSize: tamaño + 'px'}">Mira lo que pasa!</p>
    <button v-on:click="cambiar">Haz click</button>

      <input v-model="nombre" type="text">
      <p>Hola {{ nombre }}</p>

      <textarea v-model="mensaje"></textarea>
      <p>Mensaje {{ mensaje }}</p>

      <input v-model="estado" type="checkbox" name="" id="">
      <p>El usuario ha aceptado? {{ estado ? "Si":"No" }}</p>

      <p>Escoge tu pais</p>
      <select v-model="pais" name="" id="">
        <option value="gt">Guatemala</option>
        <option value="ho">Honduras</option>
        <option value="sv">El Salvador</option>
      </select>
 
      <p>Pais: {{ pais }}</p>

      <ul v-for="(fruta,index) in frutas">
        <li>{{ index+1 }} - {{ fruta }}</li>
      </ul>

      <ul v-for="fruta in frutas" :key="fruta">
        <li>{{ fruta }}</li>
      </ul>

      <h2>Registro de productos</h2>
      <table>
        <thead>
            <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Precio</th>
            </tr>
        </thead>
        <tbody v-for="producto in productos" :key="producto.id">
            <tr>
                <td>{{ producto.id }}</td>
                <td>{{ producto.nombre }}</td>
                <td>${{ producto.precio }}</td>
            </tr>
        </tbody>
      </table>

        <p v-if="mostrar">Mensaje visible</p>

        <p v-if="proceso ==1">Cargando datos</p>
        <p v-else-if="proceso ==2">Datos cargados</p>
        <p v-else>Error!</p>

        <p v-show="visible">Si ves este campo mi estado es true!</p>

        <p v-html="parrafo"></p>

        <p v-color="'blue'">Texto!</p>

</template>

<style scoped>

</style>