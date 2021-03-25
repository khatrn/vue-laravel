<template>
    <div class="list-rendering">
        <ul>
            <li v-for="todo in listCompleteTodo">
                {{ todo.work }} - {{ todo.isComplete }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            todos: [
                {
                    work: 'Đánh răng, rửa mặt',
                    isComplete: true
                },
                {
                    work: 'Ăn sáng',
                    isComplete: true
                },
                {
                    work: 'Đi làm',
                    isComplete: false
                },
                {
                    work: 'Đi ăn cơm trưa',
                    isComplete: false
                }
            ],
        }
    },
    computed: {
        listCompleteTodo() {
            return this.todos.filter(item => item.isComplete)
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
