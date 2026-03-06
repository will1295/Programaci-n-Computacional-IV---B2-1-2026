<script setup>
    import {ref} from 'vue';
    let nombre = ref('');
</script>

<template>
    <input v-model="nombre" type="text" placeholder="Por favor escribe tu nombre">
    <h1>Hola {{ nombre }}</h1>
</template>

<style scoped>

</style>