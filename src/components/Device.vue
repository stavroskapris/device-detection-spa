<template>
    <div class="col-md-12">
        <div class="pnd-device">
            <div :class="`pnd-device-icon pnd-device-icon-${device.deviceType} pnd-device-icon-${device.deviceType}-${device.operatingSystem.toLowerCase()}`"></div>
            <div :class="`pnd-browser-icon pnd-browser-icon-${device.browser.toLowerCase()}`"></div>
        </div>
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
