import Layout from '../layouts/Layout.vue';
import Dashboard from '../pages/Dashboard.vue';
import Home from '../pages/Home.vue';

export default function (injection) {
    injection.useModuleRoute([
        {
            children: [
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Dashboard,
                    path: '/',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Home,
                    path: 'home',
                },
            ],
            component: Layout,
            path: '/seller',
        },
    ]);
}