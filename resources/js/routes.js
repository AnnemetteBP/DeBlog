import Vue from 'vue';
import VueRouter from 'vue-router';
import Index from '@/js/components/IndexComponent';
import Read from '@/js/components/ReadComponent';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'index',
            component: Index
        },
        {
            path: '/show/:id',
            name: 'show',
            component: Read
        }
    ]
});

export default router;