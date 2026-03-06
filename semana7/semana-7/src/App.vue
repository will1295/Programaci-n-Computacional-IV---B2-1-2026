<script setup>
  import HelloComponent from './components/HelloComponent.vue';
  import SaludoComponent from './components/SaludoComponent.vue';
  import SumaComponent from './components/SumaComponent.vue';
</script>

<template>
  <h1>You did it!</h1>
  <p>
    Visit <a href="https://vuejs.org/" target="_blank" rel="noopener">vuejs.org</a> to read the
    documentation
    <div id="parrafo">
      <p>Soy parte del componente root</p>
    </div>
  </p>

  <HelloComponent></HelloComponent>
  <SaludoComponent></SaludoComponent>
  <SumaComponent></SumaComponent>


</template>

<style scoped>
  #parrafo{
    background-color: aqua;
  }
</style>
