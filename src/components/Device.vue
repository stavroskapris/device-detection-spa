<template>
    <div class="container">
        <p class="">{{device.browser}}</p>
        <p class="">{{device.operatingSystem}}</p>
        <p class="">{{device.deviceType}}</p>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                device: {}
            }
        },
        methods: {
            getDevice() {
                fetch('http://localhost:8080/', {
                    method: 'GET',
                }).then(response => response.json()).then(json => this.device = json)
            }
        },
        created() {
            this.getDevice()
        }
    }
</script>
