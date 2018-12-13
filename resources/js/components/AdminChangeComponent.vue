<template>
    <div>
        <form v-bind:action="adminurl + '/update/' + post.id" method="POST">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="PUT">
            <input type="text" name="title" :value="post.title" placeholder="Title">
            <input type="text" name="rating" :value="post.rating" placeholder="rating">
            <input type="text" name="tags" :value="post.tags" placeholder="tags">
            <input type="text" name="body" :value="post.body" placeholder="body">
            <input type="submit" class="btn btn-outline-primary" value="Change">
        </form>
        <a v-bind:href=" adminurl ">back</a>
    </div>
</template>

<script>
    export default {
        name: "AdminChangeComponent",
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