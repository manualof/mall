<template>
    <div class="personnal-center padding-attribute">
        <div class="container">
            <div class="dashboard-sidebar">
                <div class="dashboard-brand">个人中心</div>
                <ul class="dashboard-sidebar-nav">
                    <li v-for="item in list">
                        <router-link :to="item.to">{{ item.text }}</router-link>
                    </li>
                </ul>
            </div>
            <div class="dashboard-view">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list: [
                    {
                        to: { name: 'all-order' },
                        text: '我的订单',
                    },
                    {
                        to: { name: 'coupon' },
                        text: '我的优惠券',
                    },
                    {
                        to: { name: 'integral' },
                        text: '我的积分',
                    },
                    {
                        to: { name: 'footprint' },
                        text: '我的足迹',
                    },
                    {
                        to: { name: 'collect-store' },
                        text: '店铺关注',
                    },
                    {
                        to: { name: 'account-security' },
                        text: '账户安全',
                    },
                    {
                        to: { name: 'my-account' },
                        text: '我的账户',
                    },
                    {
                        to: { name: 'selaes-return' },
                        text: '退货退款',
                    },
                    {
                        to: { name: 'shipping-address' },
                        text: '管理收货地址',
                    },
                ],
            };
        },
    };
</script>