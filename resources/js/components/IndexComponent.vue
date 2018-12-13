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
                <a v-bind:href=" '/read/' + post.id">read</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "IndexComponent",
        props: ['post'],
    }
</script>
