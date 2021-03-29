<template>
    <div id="my-text">
       <list-rendering v-if="isShow"></list-rendering>
        <button @click="toggleShow">Hủy</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isShow: true
        }
    },
    methods: {
        toggleShow() {
            this.isShow = !this.isShow
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
