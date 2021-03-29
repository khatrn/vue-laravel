<template>
    <div class="event-handling">
        <input @keyup.enter="sayWelcome">
    </div>
</template>

<script>
export default {
    methods: {
        sayWelcome() {
            alert('Hallo')
        }
    }
}
</script>

<style scoped>

</style>
