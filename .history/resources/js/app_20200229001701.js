require('./bootstrap');

window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import VueRouter from 'vue-router'
import routes from './routes';


Vue.use(VueRouter);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});