<template>
    <div class="my-component">
        <div>Kiểu tin nhắn: {{ message.type }}</div>
        <div>Mess: {{ message.text }}</div>
        <div><button @click="changeType">Đổi kiểu</button></div>
        <div><button @click="changeMessage">Đổi tin nhắn</button></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: {
                type: 'Age',
                text: '25 tuổi'
            }
        }
    },
    methods: {
        changeType() {
            this.message.type = 'Age After Year'
        },
        changeMessage() {
            this.message.text = '26 tuổi'
        }
    },
    computed: {
        getType() {
            return this.message.type
        },
        getMessage() {
            return this.message.text
        }
    },
    watch: {
        getType() {
            console.log('Kiểu đã thay đổi')
        },
        getMessage() {
            console.log('Text đã thay đổi')
        }
    }
}
</script>

<style lang="scss" scoped>
    .my-component{
        color: #ff0000;
    }
</style>
