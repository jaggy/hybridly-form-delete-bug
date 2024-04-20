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

const handlePost = () => router.post('/endpoint')
const handlePut = () => router.put('/endpoint')
const handleDelete = () => router.delete('/endpoint')
</script>

<template layout>
    <div>
        <div>
            <h2>useForm</h2>

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

        <div>
            <h2>router</h2>

            <button @click.prevent="handlePost">POST</button>

            <button @click.prevent="handlePut">PUT</button>

            <button @click.prevent="handleDelete">DELETE</button>
        </div>
    </div>
</template>

<style scoped></style>
