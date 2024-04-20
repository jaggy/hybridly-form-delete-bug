<script setup lang="ts">
useHead({
	title: 'Welcome'
})

const post = useForm({
    method: 'POST',
    url: '/endpoint',
    fields: {},
})

const put = useForm({
    method: 'PUT',
    url: '/endpoint',
    fields: {},
})

const destroy = useForm({
    method: 'DELETE',
    url: '/endpoint',
    fields: {},
})
</script>

<template layout>
    <div>
        <form @submit.prevent="post.submit">
            <button>POST</button>
        </form>

        <form @submit.prevent="put.submit">
            <button>PUT</button>
        </form>

        <form @submit.prevent="destroy.submit">
            <button>DELETE</button>
        </form>
    </div>
</template>

<style scoped></style>
