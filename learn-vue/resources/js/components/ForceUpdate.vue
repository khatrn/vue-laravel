<template>
    <div>
        <div>
            Tên: {{ person.name }}
        </div>
        <div>
            Nickname: {{ person.nickname }}
        </div>
        <div>
            <button @click="changeName">Đổi tên</button>
        </div>
        <div>
            <button @click="changeNickName">Đổi nickname</button>
        </div>
        <div>
            <button @click="changeNicknameProperly()">Đổi nickname chính xác</button>
        </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            person: {
                name: 'Kha'
            }
        }
    },
    methods: {
        changeName() {
            this.person.name = 'Nguyen Kha'
        },
        changeNickName() {
            this.person.nickname = Math.random().toString(36).substring(7)
        },
        changeNicknameProperly() {
            Vue.set(this.person, 'nickname', 'khatn')
        }
    }
}
</script>

<style scoped>

</style>
