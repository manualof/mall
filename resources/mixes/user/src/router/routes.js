import Layout from '../layouts/Layout.vue';
import PersonnalCenter from '../layouts/UserLayout.vue';
import AllOrder from '../pages/UserOrder.vue';
import Coupon from '../pages/UserCoupon.vue';
import Integral from '../pages/UserIntegral.vue';
import AccountSecurity from '../pages/UserSecurity.vue';
import ShippingAddress from '../pages/UserAddress.vue';
import CollectStore from '../pages/UserFollow.vue';
import SelaesReturn from '../pages/SelaesReturn.vue';
import Footprint from '../pages/UserFootprint.vue';
import MyAccount from '../pages/UserAccount.vue';
import MyCollect from '../pages/UserCollect.vue';
import Notice from '../pages/UserNotice.vue';

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
