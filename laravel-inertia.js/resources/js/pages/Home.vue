<template>
    <Nav/>
    Home
</template>

<script>

import Nav from "./Nav";

export default {
    name: "Welcome",
    components: {Nav},
    props: {
        name: {
            type: String,
            default: "Marien"
        },
        frameworks: {
            type: Array,
            default: null
        }
    }
}
</script>

<style scoped>

</style>
