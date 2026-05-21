import './bootstrap';
import { createApp } from 'vue';
import CategoriasIndex from './components/CategoriasIndex.vue';

const app = createApp({})
app.component('categorias-index',CategoriasIndex)
app.mount('#app');