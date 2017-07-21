import Layout from '../components/public/Layout.vue';
import PersonnalCenter from '../components/personnal-center/PersonnalCenter.vue';
import AllOrder from '../components/personnal-center/AllOrder.vue';
import Coupon from '../components/personnal-center/Coupon.vue';
import Integral from '../components/personnal-center/Integral.vue';
import AccountSecurity from '../components/personnal-center/Security.vue';
import ShippingAddress from '../components/personnal-center/Address.vue';
import CollectStore from '../components/personnal-center/CollectStore.vue';
import SelaesReturn from '../components/personnal-center/SelaesReturn.vue';
import Footprint from '../components/personnal-center/Footprint.vue';
import MyAccount from '../components/personnal-center/MyAccount.vue';
import MyCollect from '../components/personnal-center/MyCollect.vue';
import Notice from '../components/personnal-center/Notice.vue';

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
