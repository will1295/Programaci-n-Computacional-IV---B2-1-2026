import './bootstrap';
import {createApp} from 'vue';
import VerCliente from './components/VerCliente.vue';
import IngresarCliente from './components/IngresarCliente.vue';

const app = createApp({});
app.component('ver-clientes',VerCliente);
app.component('ingresar-cliente',IngresarCliente);
app.mount('#app');