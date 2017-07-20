import Layout from '../components/public/Layout';

import PersonnalCenter from '../components/personnal-center/PersonnalCenter';
import AllOrder from '../components/personnal-center/AllOrder';
import Coupon from '../components/personnal-center/Coupon';
import Integral from '../components/personnal-center/Integral';
import AccountSecurity from '../components/personnal-center/AccountSecurity';
import ShippingAddress from '../components/personnal-center/ShippingAddress';
import CollectStore from '../components/personnal-center/CollectStore';
import SelaesReturn from '../components/personnal-center/SelaesReturn';
import Footprint from '../components/personnal-center/Footprint';
import MyAccount from '../components/personnal-center/MyAccount';
import MyCollect from '../components/personnal-center/MyCollect';
import Notice from '../components/personnal-center/Notice';

export default [
    {
        path: '/',
        component: Layout,
        redirect: { name: 'personnal-center' },
        children: [
            {
                path: 'personnal-center',
                name: 'personnal-center',
                component: PersonnalCenter,
                redirect: { name: 'all-order' },
                children: [
                    {
                        path: 'all-order',
                        name: 'all-order',
                        component: AllOrder,
                    },
                    {
                        path: 'coupon',
                        name: 'coupon',
                        component: Coupon,
                    },
                    {
                        path: 'integral',
                        name: 'integral',
                        component: Integral,
                    },
                    {
                        path: 'account-security',
                        name: 'account-security',
                        component: AccountSecurity,
                    },
                    {
                        path: 'shipping-address',
                        name: 'shipping-address',
                        component: ShippingAddress,
                    },
                    {
                        path: 'collect-store',
                        name: 'collect-store',
                        component: CollectStore,
                    },
                    {
                        path: 'selaes-return',
                        name: 'selaes-return',
                        component: SelaesReturn,
                    },
                    {
                        path: 'footprint',
                        name: 'footprint',
                        component: Footprint,
                    },
                    {
                        path: 'my-account',
                        name: 'my-account',
                        component: MyAccount,
                    },
                    {
                        path: 'my-collect',
                        name: 'my-collect',
                        component: MyCollect,
                    },
                    {
                        path: 'notice',
                        name: 'notice',
                        component: Notice,
                    },
                ],
            },
        ],
    },
];
