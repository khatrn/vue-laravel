<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <h4>Danh sách người dùng</h4>
            <ListUser @userSelected="childrenSelectUser"></ListUser>
        </div>
        <div class="user-detail-comp">
            <h4>Chi tiết người dùng</h4>
            <UserDetail :userDetailInfo="userSelectedFromChild"></UserDetail>
        </div>
    </div>
</template>

<script>

import ListUser from './ListUser'
import UserDetail from './UserDetail'

export default {
    components: {
        ListUser,
        UserDetail
    },
    data() {
        return {
            userSelectedFromChild: {}
        }
    },
    methods: {
        childrenSelectUser(user, number, string){
            console.log(user)
            console.log(number)
            console.log(string)
            this.userSelectedFromChild = user
        },
    }
}
</script>

<style lang="scss" scoped>

</style>
