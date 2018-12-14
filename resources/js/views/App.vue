<template>
    <v-app>
        <v-toolbar dark>
            <v-toolbar-title>De Blog</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
            </v-toolbar-items>
        </v-toolbar>

        <router-view></router-view>

    </v-app>
</template>

<script>
    export default {
        name: "App",
    }
</script>

<style scoped>

</style>