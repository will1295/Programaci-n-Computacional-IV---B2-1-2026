<template>

<h1>Categorias disponibles</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="categoria in categorias">
            <td>{{ categoria.nombre }}</td>
            <td>{{ categoria.descripcion }}</td>
        </tr>
    </tbody>
</table>

</template>

<script setup>
import {ref} from 'vue'
import axios from 'axios'

const props = defineProps({
    categoriasData:Array
})
const categorias = ref(props.categoriasData)

</script>

<style>

</style>