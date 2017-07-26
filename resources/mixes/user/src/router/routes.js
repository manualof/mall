import Layout from '../layouts/Layout.vue';
import UserLayout from '../layouts/UserLayout.vue';
import UserOrder from '../pages/UserOrder.vue';
import UserCoupon from '../pages/UserCoupon.vue';
import UserIntegral from '../pages/UserIntegral.vue';
import UserSecurity from '../pages/UserSecurity.vue';
import UserAddress from '../pages/UserAddress.vue';
import UserFollow from '../pages/UserFollow.vue';
import SelaesReturn from '../pages/SelaesReturn.vue';
import UserFootprint from '../pages/UserFootprint.vue';
import UserAccount from '../pages/UserAccount.vue';
import UserCollect from '../pages/UserCollect.vue';
import UserNotice from '../pages/UserNotice.vue';

export default [
    {
        path: '/mall',
        component: Layout,
        children: [
            {
                path: 'user',
                name: 'personnal-center',
                component: UserLayout,
                redirect: {
                    name: 'order',
                },
                children: [
                    {
                        component: UserOrder,
                        name: 'order',
                        path: 'order',
                    },
                    {
                        component: UserCoupon,
                        name: 'coupon',
                        path: 'coupon',
                    },
                    {
                        component: UserIntegral,
                        name: 'integral',
                        path: 'integral',
                    },
                    {
                        component: UserSecurity,
                        name: 'account-security',
                        path: 'account-security',
                    },
                    {
                        component: UserAddress,
                        name: 'address',
                        path: 'address',
                    },
                    {
                        component: UserFollow,
                        name: 'collect-store',
                        path: 'collect-store',
                    },
                    {
                        component: SelaesReturn,
                        name: 'selaes-return',
                        path: 'selaes-return',
                    },
                    {
                        component: UserFootprint,
                        name: 'footprint',
                        path: 'footprint',
                    },
                    {
                        component: UserAccount,
                        name: 'my-account',
                        path: 'my-account',
                    },
                    {
                        component: UserCollect,
                        name: 'my-collect',
                        path: 'my-collect',
                    },
                    {
                        component: UserNotice,
                        name: 'notice',
                        path: 'notice',
                    },
                ],
            },
        ],
    },
];
