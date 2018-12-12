
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
let Vuetify = require('vuetify/dist/vuetify.js');
Vue.use(Vuetify);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/AdminIndexComponent.vue -> <example-component></example-component>
 */

Vue.component('admin-index-component', require('./components/AdminIndexComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

const adminApp = new Vue({
    el: '#admin-app',
    data: {
        posts: [
            {
                id: 1,
                title: 'Title',
                body: 'The body',
                rating: 5,
                tags: 'The tags',
            }
        ],
    },
    methods: {
        getIndex: function() {
            let posts = '';
            window.axios.get('/admin/index')
                .then(function (response) {
                    posts = response.data.posts.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            return posts;
        },
    },
});
