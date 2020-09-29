import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Articles from '../components/Articles.vue'
import Conatctnous from '../components/Contact-nous.vue'
import Galerie from '../components/Galerie.vue'
import ArticleDetails from '../components/ArticleDetails.vue';
import AdminIndex from '../components/admin/AdminIndex.vue';

const routes = [
    { path: '/', component: Articles, name: 'Articles' },
    { path: '/article/:slug', component: ArticleDetails, name: 'ArticleDetails' },
    { path: '/contact-nous', component: Conatctnous, name: 'Contact-nous' },
    { path: '/galerie', component: Galerie, name: 'Galerie' },
    { path: '/admin', component: AdminIndex, name: 'AdminIndex' },
];

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router;
