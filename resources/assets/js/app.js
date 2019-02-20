
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue';
import Cleave from 'vue-cleave-component';
import VeeValidate from 'vee-validate';

Vue.use(Cleave);
Vue.use(VeeValidate);

// Vue.component('example', require('./components/Example.vue'));
Vue.component('card-component', require('./components/Card/CardComponent').default);

const app = new Vue({
    el: '#app'
});
