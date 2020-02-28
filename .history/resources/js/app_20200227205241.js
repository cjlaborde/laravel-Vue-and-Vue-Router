require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import routes from './routes';

Vue.use(VueRouter);

Vue.component('logo', require('./components/Logo.vue').default);
Vue.component('logo-symbol', require('./components/LogoSymbol.vue').default);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});