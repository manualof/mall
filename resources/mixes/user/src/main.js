import Vue from 'vue';
import VueResource from 'vue-resource';
import 'bootstrap';
import jQuery from 'jquery';
import App from './App';
import router from './router';

import RouterLink from './directives/router-link';
import './assets/less/main.less';

global.window.jQuery = jQuery;

Vue.use(VueResource);

Vue.directive('router-link', RouterLink);

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: { App },
});
