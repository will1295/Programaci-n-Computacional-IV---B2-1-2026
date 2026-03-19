<script setup>
import {ref} from 'vue';

let nombre = ref('Juan');
let texto = ref('');
let numero = ref('');
let cuadrado = ref('');

let mensaje = ()=>{
    alert("Soy un mensaje!")
}

let calculo = ()=>{
    cuadrado.value = (numero.value)**2
}

</script>

<template>
    <h1>Hola Mundo desde Vue!</h1>
    <h2>Hola mi nombre es {{ nombre }}</h2>
    <input v-model="texto" type="text" placeholder="Escribe algo..">
    <p>Esto fue lo que escribiste: {{ texto }}</p>
    <button @click="mensaje">Haz click aqui!</button>

    <input v-model="numero" type="number">
    <button @click="calculo">Haz click para ver el cuadrado</button>
    <label for="">{{ cuadrado }}</label>

</template>

<style scoped>

</style>