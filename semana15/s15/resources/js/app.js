import './bootstrap';
import { createApp } from 'vue';
import SaludoComponent from './components/SaludoComponent.vue';
import NombreComponent from './components/NombreComponent.vue';

const app = createApp({});
app.component('saludo-component',SaludoComponent)
app.component('nombre-component',NombreComponent)
app.mount('#app');