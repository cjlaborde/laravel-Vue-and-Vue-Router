require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router');
window.routes = require('routes');

Vue.use(VueRouter);

Vue.component('home', require('./components/Home.vue').default);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});