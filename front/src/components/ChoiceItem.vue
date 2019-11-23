<template>
    <button :value="choice.value" v-on:click="sendChoice">{{choice.text}}</button>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "ChoiceItem",
        props: {
            choice: {
                type: Object,
                required: true,
            }
        },
        methods: {
            sendChoice: function () {
                axios.post('apiUrl', {
                    choice: this.choice.value
                }).then(function () {

                }).catch(function (error) {
                    alert(error);
                })
            }
        }
    }
</script>

<style scoped>

</style>
