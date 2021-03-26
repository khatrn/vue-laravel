<template>
    <div class="form-input-binding">
        <div class="text">
            {{ message }}
        </div>
        <div class="input-form">
            <input type="text" v-model.trim="message" name="">
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: ''
        }
    }
}
</script>

<style scoped>

</style>
