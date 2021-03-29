<template>
    <div class="binding-html">
        <div class="text-title" :class="classObject" :style="{backgroundColor: color}">
            Đây là test
        </div>
        <div>
            <button @click="isActive = true">Active</button>
        </div>
        <div>
            <button @click="isHide = true">Hide</button>
        </div>
        <div>
            <button @click="isBold = true">Đậm</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            color: 'orange'
        }
    }
}
</script>

<style lang="scss" scoped>
    .active{
        color: red
    }
    .hide{
        display: none;
    }
    .bold{
        font-weight: bold;
    }
</style>
