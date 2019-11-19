<template>
  <div id="app">
    <h3>{{title}}</h3>
    <div class="row">
      <Device/>
    </div>
  </div>
</template>
<style>
  @import './assets/css/index.css';
</style>
<script>

    import Device from "./components/Device.vue";

    export default {
        name: 'app',
        data() {
            return {
                title: 'Your Device',
            }
        },
        components: {
            Device
        }
    }
</script>
