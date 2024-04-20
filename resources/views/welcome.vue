<script setup lang="ts">
useHead({
	title: 'Welcome'
})

const post = useForm({
    method: 'POST',
    url: '/endpoint',
    fields: {},
})

const put_with_fields = useForm({
    method: 'PUT',
    url: '/endpoint',
    fields: { },
})

const put_without_fields = useForm({
    method: 'PUT',
    url: '/endpoint',
})


const put_with_method = useForm({
    method: 'PUT',
    url: '/endpoint',
    fields: {
        _method: 'PUT',
    }
})

const destroy_with_fields = useForm({
    method: 'DELETE',
    url: '/endpoint',
    fields: {},
})

const destroy_without_fields = useForm({
    method: 'DELETE',
    url: '/endpoint',
})


const destroy_with_method = useForm({
    method: 'DELETE',
    url: '/endpoint',
    fields: {
        _method: 'DELETE',
    }
})

const handlePost = () => router.post('/endpoint')
const handlePut = () => router.put('/endpoint')
const handleDelete = () => router.delete('/endpoint')
</script>

<template layout>
    <div class="grid">
        <div>
            <h2>useForm</h2>

            <div class="buttons">
                <form @submit.prevent="post.submit">
                    <button>POST</button>
                </form>

                <form @submit.prevent="put_with_fields.submit">
                    <button>PUT WITH fields</button>
                </form>

                <form @submit.prevent="put_without_fields.submit">
                    <button>PUT WITHOUT fields</button>
                </form>

                <form @submit.prevent="put_with_method.submit">
                    <button>PUT WITH _method</button>
                </form>

                <form @submit.prevent="destroy_with_fields.submit">
                    <button>DELETE WITH fields</button>
                </form>

                <form @submit.prevent="destroy_without_fields.submit">
                    <button>DELETE WITHOUT fields</button>
                </form>

                <form @submit.prevent="destroy_with_method.submit">
                    <button>DELETE WITH _method</button>
                </form>
            </div>
        </div>

        <div>
            <h2>router</h2>

            <div class="buttons">
                <div>
                    <button @click.prevent="handlePost">POST</button>
                </div>

                <div>
                    <button @click.prevent="handlePut">PUT</button>
                </div>

                <div>
                    <button @click.prevent="handleDelete">DELETE</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.grid {
    padding: 12rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

h2 {
    font-size: 1.5rem;
    font-weight: 700;
    letter-spacing: -0.02em;
    font-family: Monaco, monospace;
}

.buttons {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-top: 2rem;
}
</style>
