
require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');


Vue.component('cat-list', require('./components/Cat-list.vue'));

const app = new Vue({
    el: '#app'
});
