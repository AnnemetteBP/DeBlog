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
        <form :action=" adminurl + '/delete/' + post.id " method="POST">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Remove" class="btn btn-danger-outlined">
        </form>
    </div>
</template>

<script>
    export default {
        name: "AdminReadComponent",
        props: ['post', 'adminurl'],
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
    }
</script>

<style scoped>

</style>