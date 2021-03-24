<template>
    <div class="conditional-rendering">
        <div class="block-1" v-show="isActive == false">
            Khối 1
        </div>
        <div class="block-2" v-show="isActive == true">
            Khối 2
        </div>
        <div>
            <button @click="isActive = !isActive">Nhấn</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isActive: true
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
