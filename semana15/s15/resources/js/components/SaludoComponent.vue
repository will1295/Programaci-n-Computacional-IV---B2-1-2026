<template>
    <div>
        <h2>Saludo</h2>
        <input v-model="nombre" type="text" placeholder="Escribe tu nombre">
    </div>
    <p>Hola {{ nombre }}</p>

    <button @click="saludar">Haz click aqui!</button>
    <p>{{ mensaje }}</p>
    
</template>

<script setup>
import { ref } from 'vue';
const mensaje = ref("")
const nombre = ref("")

function saludar(){
    mensaje.value = "Hola "+nombre.value
}


</script>

<style>

</style>