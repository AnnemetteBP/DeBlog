<template>
    <div>
        <ul>
            <li>
                <h2>{{ post.title }}</h2>
                <p>{{ post.rating }}</p>
                <i>{{ post.tags }}</i>
                <p>
                    {{ post.body }}
                </p>
                <a v-bind:href=" '/' ">back</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "ReadComponent",
        props: ['post'],
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
    }
</script>

<style scoped>

</style>