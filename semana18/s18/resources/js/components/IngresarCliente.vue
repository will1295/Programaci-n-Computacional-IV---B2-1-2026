<template>
    <h3>Registrar nuevo cliente</h3>

    <form @submit.prevent="guardarCliente">
        <input type="text" v-model="form.nombre" required placeholder="Nombre">
        <input type="number" v-model="form.telefono" required placeholder="Telefono">
        <input type="number" v-model="form.dui" required placeholder="DUI">
        <input type="text" v-model="form.direccion" required placeholder="Direccion">
        <button type="submit">Guardar</button>
    </form>
</template>

<script setup>
import { ref, defineEmits } from 'vue';
import axios from 'axios';

const emit = defineEmits(['cliente-agregado']);

const form = ref({
    nombre: '',
    telefono: '',
    dui: '',
    direccion: ''
});

const guardarCliente = async () => {
    try {
        const response = await axios.post('http://127.0.0.1:8000/api/clientes', form.value);
        alert('Cliente registrado con éxito');
        emit('cliente-agregado', response.data);
        form.value = { nombre: '', telefono: '', dui: '', direccion: '' };
    } catch (error) {
        alert('Error al registrar el cliente');
    }
};
</script>

<style>
</style>