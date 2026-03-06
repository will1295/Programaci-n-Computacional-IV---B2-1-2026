<script setup>
    import {ref} from 'vue';

    let numero1 = ref(0)
    let numero2 = ref(0)
    let operacion = ref('suma')
    let resultado = ref(0)

    let calcular = () =>{
        if(operacion.value === 'suma'){
            resultado.value = numero1.value + numero2.value    
        }
        else if(operacion.value === 'resta'){
            resultado.value = numero1.value - numero2.value
        }  
    }

</script>

<template>
    <h2>Sumar de dos numeros</h2>

    <label for="">Numero 1</label>
    <input v-model="numero1" type="number">
    <label for="">Numero 2</label>
    <input v-model="numero2" type="number">
    <select v-model="operacion">
        <option value="suma">Sumar</option>
        <option value="resta">Restar</option>
    </select>


    <button @click="calcular" type="button">Calcular</button>

    <p>El resultado es: {{ resultado }}</p>

</template>

<style scoped>

</style>