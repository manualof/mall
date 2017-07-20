import Layout from '../components/library/Layout';
import Businessmen from '../components/Businessmen';
import ShopHome from '../components/ShopHome';

export default [
    {
        path: '/',
        component: Layout,
        redirect: { name: 'businessmen' },
        children: [
            {
                path: 'businessmen',
                name: 'businessmen',
                component: Businessmen,
            },
            {
                path: 'shop-home',
                name: 'shop-home',
                component: ShopHome,
            },
        ],
    },
];