<script setup>
    import {ref} from 'vue';
    import imagenLocal from '../assets/social-impact.png'
    let imagen = ref(imagenLocal)
    let imagen2 = ref('https://facturacion.ugb.edu.sv/img/job-profile2.a5201693.png');
    let num1 = ref(0)
    let num2 = ref(0)
    let resultado = ref(0)
    /*function calcular(){
    }*/

    let calcular = ()=>{
        resultado.value = num1.value+num2.value
    }

</script>

<template>
    <img :src="imagen" alt="" srcset="">
    <img :src="imagen2" alt="" srcset="">
    <input v-model="num1" type="number" name="" id="" placeholder="Escribe un numero">
    <input v-model="num2" type="number" name="" id="" placeholder="Escribe otro numero">
    <button @click="calcular">Sumar</button>
    <p>{{ resultado }}</p>
    <!--Agregar resta,mult,div y que el usuario pueda escoger
    la operacion por medio un select-->

</template>

<style></style>