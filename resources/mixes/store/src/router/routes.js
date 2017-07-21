import Layout from '../components/library/Layout';
import Businessmen from '../components/Businessmen';
import ShopHome from '../components/ShopHome';

export default [
    {
        path: '/mall/store',
        component: Layout,
        redirect: { name: 'businessmen' },
        children: [
            {
                path: '/mall/store/businessmen',
                name: 'businessmen',
                component: Businessmen,
            },
            {
                path: '/mall/store/shop-home',
                name: 'shop-home',
                component: ShopHome,
            },
        ],
    },
];