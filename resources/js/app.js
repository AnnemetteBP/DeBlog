
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
Vue.component('admin-index-component', require('./components/AdminIndexComponent.vue'));
Vue.component('admin-read-component', require('./components/AdminReadComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});