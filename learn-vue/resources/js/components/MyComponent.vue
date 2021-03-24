<template>
    <div class="my-component">{{ message }}</div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Đây là component đầu tiên của tôi'
        }
    }
}
</script>

<style lang="scss" scoped>
    .my-component{
        color: red;
    }
</style>
