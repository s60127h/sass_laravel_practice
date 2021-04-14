require('./bootstrap');

import Vue from 'vue'
import App from './views/map.vue'

const app = new Vue({
    el: '#map',
    components: { App }
});
