require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router');
window.routes = require('routes');
Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
