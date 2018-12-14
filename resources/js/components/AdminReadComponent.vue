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
                        <v-btn v-bind:href=" adminurl " dark ripple outline color="green">Back</v-btn>
                        <v-btn v-bind:href=" adminurl + '/change/' + post.id " dark ripple outline color="yellow">
                            Change
                        </v-btn>
                        <v-btn type="submit" dark ripple outline color="red" form="remove-form" left>Remove</v-btn>
                        <form id="remove-form" :action=" adminurl + '/delete/' + post.id " method="POST">
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
        <v-divider dark></v-divider>
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