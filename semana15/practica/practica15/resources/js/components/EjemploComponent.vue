<template>
    <h3>Registro de usuarios</h3>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item,index) in lista">
                <td>{{ item.nombre }}</td>
                <td>{{ item.apellido }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>
import {ref} from 'vue';

const props = defineProps({datos:Array})
const lista = ref ([...props.datos]);

</script>

<style scoped>

</style>