<template>
    <div class="container">
        <div id="app">
            <h3>{{title}}</h3>
            <hr>
            <div class="row">
                <Device/>
            </div>
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
