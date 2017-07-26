import Layout from '../layouts/Layout.vue';
import PersonnalCenter from '../pages/PersonnalCenter.vue';
import AllOrder from '../pages/AllOrder.vue';
import Coupon from '../pages/Coupon.vue';
import Integral from '../pages/Integral.vue';
import AccountSecurity from '../pages/Security.vue';
import ShippingAddress from '../pages/Address.vue';
import CollectStore from '../pages/CollectStore.vue';
import SelaesReturn from '../pages/SelaesReturn.vue';
import Footprint from '../pages/Footprint.vue';
import MyAccount from '../pages/MyAccount.vue';
import MyCollect from '../pages/MyCollect.vue';
import Notice from '../pages/Notice.vue';

export default [
    {
        path: '/mall',
        component: Layout,
        children: [
            {
                path: 'user',
                name: 'personnal-center',
                component: PersonnalCenter,
                redirect: {
                    name: 'order',
                },
                children: [
                    {
                        path: 'order',
                        name: 'order',
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
                        path: 'address',
                        name: 'address',
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
