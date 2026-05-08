<template>
    <h2>Saludo</h2>
    <p>Hola {{ nombre}}</p>
    
</template>

<script setup>
import { ref } from 'vue';

defineProps({
    nombre:String
})

</script>

<style>

</style>