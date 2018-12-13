<template>
    <div>
        <v-divider dark></v-divider>
        <v-layout>
            <v-flex xs12 sm6 offset-sm3>
                <v-card raised dark>
                    <v-img
                            src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
                            aspect-ratio="2.75"
                    >

                        <v-container fill-height fluid>
                            <v-layout fill-height>
                                <v-flex xs12 align-end flexbox>
                                    <span class="headline">
                                        <h3 class="headline mb-0">Write new post</h3>
                                    </span>
                                </v-flex>
                            </v-layout>
                        </v-container>

                    </v-img>

                    <v-card-title primary-title>
                        <div>
                            <div>
                            </div>
                        </div>
                    </v-card-title>

                    <div class="container">
                        <v-form id="write-form" :action="adminurl + '/update/' + post.id" method="POST">
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="hidden" name="_method" value="PUT">
                            <v-text-field type="text" name="title" :value="post.title"
                                          placeholder="Title"></v-text-field>
                            <v-text-field type="text" name="rating" :value="post.rating"
                                          placeholder="rating"></v-text-field>
                            <v-text-field type="text" name="tags" :value="post.tags" placeholder="tags"></v-text-field>
                            <v-text-field type="text" name="body" :value="post.body" placeholder="body"></v-text-field>
                            <v-btn block type="submit" form="write-form" dark outline color="yellow">Change</v-btn>
                        </v-form>
                    </div>

                    <v-card-actions>
                        <v-btn outline dark color="green" v-bind:href=" adminurl ">back</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
        <v-divider dark></v-divider>
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