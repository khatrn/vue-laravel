<template>
    <div class="user-detail-container" v-if="Object.keys(userDetailInfo).length !== 0">
        <div class="user-name">
            Tên: {{ userDetailInfo.name.last }} {{ userDetailInfo.name.first }}
        </div>
        <div class="user-email">
            Email: {{ userDetailInfo.email }}
        </div>
        <div class="user-dob">
            DOB: {{ userDetailInfo.dob.date }}
        </div>
        <div class="user-gender">
            Giới tính: {{ userDetailInfo.gender }}
        </div>
        <div class="user-address">
            Địa chỉ: {{ userDetailInfo.location.city }}
        </div>
    </div>
</template>

<script>
export default {
    props: {
        userDetailInfo: {
            type: Object
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
