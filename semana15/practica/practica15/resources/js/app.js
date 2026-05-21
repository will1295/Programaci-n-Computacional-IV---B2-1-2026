import './bootstrap';
import { createApp } from 'vue';
import EjemploComponent from './components/EjemploComponent.vue';

const app = createApp({});
app.component('ejemplo-component',EjemploComponent);
app.mount("#app");
