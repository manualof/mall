import Vue from 'vue';
import VueResource from 'vue-resource';
import App from './App';
import router from './router';
import 'bootstrap';

import RouterLink from './directives/router-link';
import './assets/less/bootstrap-muying.less';

Vue.use(VueResource);

Vue.directive('router-link', RouterLink)

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: { App },
});
