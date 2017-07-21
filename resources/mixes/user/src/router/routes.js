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
        path: '/mall/user',
        component: Layout,
        children: [
            {
                path: '/mall/user/personnal-center',
                name: 'personnal-center',
                component: PersonnalCenter,
                children: [
                    {
                        path: '/mall/user/personnal-center/all-order',
                        name: 'all-order',
                        component: AllOrder,
                    },
                    {
                        path: '/mall/user/personnal-center/coupon',
                        name: 'coupon',
                        component: Coupon,
                    },
                    {
                        path: '/mall/user/personnal-center/integral',
                        name: 'integral',
                        component: Integral,
                    },
                    {
                        path: '/mall/user/personnal-center/account-security',
                        name: 'account-security',
                        component: AccountSecurity,
                    },
                    {
                        path: '/mall/user/personnal-center/shipping-address',
                        name: 'shipping-address',
                        component: ShippingAddress,
                    },
                    {
                        path: '/mall/user/personnal-center/collect-store',
                        name: 'collect-store',
                        component: CollectStore,
                    },
                    {
                        path: '/mall/user/personnal-center/selaes-return',
                        name: 'selaes-return',
                        component: SelaesReturn,
                    },
                    {
                        path: '/mall/user/personnal-center/footprint',
                        name: 'footprint',
                        component: Footprint,
                    },
                    {
                        path: '/mall/user/personnal-center/my-account',
                        name: 'my-account',
                        component: MyAccount,
                    },
                    {
                        path: '/mall/user/personnal-center/my-collect',
                        name: 'my-collect',
                        component: MyCollect,
                    },
                    {
                        path: '/mall/user/personnal-center/notice',
                        name: 'notice',
                        component: Notice,
                    },
                ],
            },
        ],
    },
];
