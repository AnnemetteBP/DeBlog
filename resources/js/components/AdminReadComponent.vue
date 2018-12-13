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
                <a v-bind:href=" adminurl ">back</a>
                <a v-bind:href=" adminurl + '/change/' + post.id ">change</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "AdminReadComponent",
        props: ['post', 'adminurl'],
    }
</script>

<style scoped>

</style>