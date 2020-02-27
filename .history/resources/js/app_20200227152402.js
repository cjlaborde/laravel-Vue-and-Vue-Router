require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import routes from './routes';

Vue.use(VueRouter);

Vue.component('home', require('./components/Home.vue').default);
Vue.component('about', require('./components/About.vue').default);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});