<template>
    <div class="list-user">
        <table class="tbl-list-user">
            <tr>
                <th>Tên</th>
                <th>Vị trí</th>
                <th>DOB</th>
            </tr>
            <tr v-for="user in userData">
                <td><a @click="selectUser(user)">{{ user.name.title }} - {{ user.name.last }} - {{ user.name.first }}</a></td>
                <td>{{ user.location.city }}</td>
                <td>{{ user.dob.date }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
import data from '../data.json'
export default {
    data() {
        return {
            userData: data,
            number: 1998,
            string: 'HTD'
        }
    },
    methods: {
        selectUser(user) {
            this.$emit('userSelected', user, this.number, this.string)
        }
    }

}
</script>

<style lang="scss" scoped>
    .tbl-list-user{
        width: 100%;
    }
</style>
