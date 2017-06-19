import Vue from 'vue'
import VueResource from 'vue-resource'
import App from './App'
import router from './router'
import 'bootstrap'

Vue.use(VueResource)

Vue.directive('router-link', RouterLink)

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: { App }
})
