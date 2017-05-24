import Layout from '../layouts/Layout.vue';
import Dashboard from '../pages/Dashboard.vue';
import Home from '../pages/Home.vue';
import Goods from '../pages/Goods.vue';
import GoodsEdit from '../pages/GoodsEdit.vue';

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
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Goods,
                    path: 'goods',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: GoodsEdit,
                    path: 'goods/edit',
                },
            ],
            component: Layout,
            path: '/seller',
        },
    ]);
}