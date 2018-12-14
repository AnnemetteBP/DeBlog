<template>
    <div>
        <v-divider dark></v-divider>
        <v-layout>
            <v-flex xs12 sm6 offset-sm3>
                <v-card raised dark>
                    <v-img
                            v-bind:src=" post.picture "
                            aspect-ratio="2.75"
                    >

                        <v-container fill-height fluid>
                            <v-layout fill-height>
                                <v-flex xs12 align-end flexbox>
                                    <span class="headline">
                                        <h3 class="headline mb-0">{{ post.title }}</h3>
                                    </span>
                                </v-flex>
                            </v-layout>
                        </v-container>

                    </v-img>

                    <v-card-title primary-title>
                        <div>
                            <div>
                                <p>Tags: <i>{{ post.tags }}</i></p>
                                <p>Rating: <b>{{ post.rating }}</b></p>
                                <p>{{ post.body }}</p>
                            </div>

                        </div>
                    </v-card-title>

                    <v-card-actions>
                        <v-btn v-bind:href=" '/' " dark ripple outline color="green">Back</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
        <v-divider dark></v-divider>
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