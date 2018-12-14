import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import Routes from '@/js/routes.js';
import App from '@/js/views/App';
Vue.component('pagination', require('laravel-vue-pagination'));

window.Vue = Vue;
Vue.use(Vuetify);
Vue.prototype.$http = window.axios;

const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App)
});

export default app;