/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
let Vuetify = require('vuetify/dist/vuetify.js');
Vue.use(Vuetify);
Vue.prototype.$http = window.axios;
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/AdminIndexComponent.vue -> <example-component></example-component>
 */
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('index-component', require('./components/IndexComponent.vue'));
Vue.component('read-component', require('./components/ReadComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    data: {
        title: 'Admin Read-Component',
        post: {
            id: 1,
            title: 'Learn JavaScript',
            body: 'The ultimate diet for the overweight programmer, who needs depression, stress and complete utter fustration ruling their lives.',
            rating: 5,
            tags: 'fast, juicy',
        },
    },
    mounted() {
        // Fetch initial results
        this.getResults($('#page').attr('class'));
    },
    methods: {
        // Our method to GET results from a Laravel endpoint
        getResults(page = 1) {
            let vm = this;
            axios.get('/show/' + page)
                .then(function (response) {
                    vm.post = response.data.post;
                });
        }
    }
});