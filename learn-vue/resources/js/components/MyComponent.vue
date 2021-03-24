<template>
    <div class="my-component">
        <div>{{ sayHello(message) }}</div>
        <div><button @click="sayHello">Enter</button></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Tham số'
        }
    },
    methods: {
        sayHello(text) {
            return text.toUpperCase();
        }
    }
}
</script>

<style lang="scss" scoped>
    .my-component{
        color: red;
    }
</style>
