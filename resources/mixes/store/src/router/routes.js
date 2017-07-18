import Layout from '../components/library/Layout';
import Businessmen from '../components/Businessmen';

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
        ],
    },
];