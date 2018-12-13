<template>
    <div>
        <form :action="adminurl + '/create/'" method="POST">
            <input type="hidden" name="_token" :value="csrf">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="rating" placeholder="rating">
            <input type="text" name="tags" placeholder="tags">
            <input type="text" name="body" placeholder="body">
            <input type="submit" class="btn btn-outline-primary" value="Change">
        </form>
        <a v-bind:href=" adminurl ">back</a>
    </div>
</template>

<script>
    export default {
        name: "AdminWriteComponent",
        props: ['adminurl'],
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
    }
</script>

<style scoped>

</style>