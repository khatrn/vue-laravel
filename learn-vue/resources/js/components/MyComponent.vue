<template>
    <div class="my-component">{{ revertMessage }}</div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Bà con cô bác, ai bị bệnh xương khớp, hãy gọi cho tôi'
        }
    },
    computed: {
        revertMessage() {
            return this.message.split('').reverse().join('');
        }
    }
}
</script>

<style lang="scss" scoped>
    .my-component{
        color: #ff0000;
    }
</style>
