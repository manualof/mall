import Vue from 'vue';
import Scrollspy from 'vue2-scrollspy';
import App from './App';
import router from './router';

import injection from './helpers/injection';
import RouterLink from './directives/router-link';
import './assets/less/main.less';

Vue.use(Scrollspy);
Vue.use(injection);

Vue.directive('router-link', RouterLink);

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: { App },
});
