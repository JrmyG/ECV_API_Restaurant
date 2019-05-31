/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueApiRequest from 'vue-api-request';
Vue.use(VueApiRequest);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('slider-component', require('./components/SliderComponent.vue').default);
Vue.component('entree-component', require('./components/EntreeComponent.vue').default);
Vue.component('dessert-component', require('./components/DessertComponent.vue').default);
Vue.component('plat-component', require('./components/PlatComponent.vue').default);
Vue.component('listplat-component', require('./components/ListPlatComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',


});

const entree = new Vue({
    el: '#entree',


});

const plat = new Vue({
    el: '#plat',


});

const dessert = new Vue({
    el: '#dessert',


});



