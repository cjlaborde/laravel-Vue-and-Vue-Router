require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router');
window.Vue = require('vue');
Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
