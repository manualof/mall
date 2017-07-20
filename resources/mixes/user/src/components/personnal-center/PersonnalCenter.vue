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
                        to: '/mall/user/personnal-center/all-order',
                        text: '我的订单',
                    },
                    {
                        to: '/mall/user/personnal-center/notice',
                        text: '预约/到货通知',
                    },
                    {
                        to: '/mall/user/personnal-center/selaes-return',
                        text: '退款退货',
                    },
                    {
                        to: '/mall/user/personnal-center/my-collect',
                        text: '我的收藏',
                    },
                    {
                        to: '/mall/user/personnal-center/collect-store',
                        text: '店铺关注',
                    },
                    {
                        to: '/mall/user/personnal-center/footprint',
                        text: '我的足迹',
                    },
                    {
                        to: '/mall/user/personnal-center/my-account',
                        text: '账户信息',
                    },
                    {
                        to: '/mall/user/personnal-center/account-security',
                        text: '账户安全',
                    },
                    {
                        to: '/mall/user/personnal-center/shipping-address',
                        text: '收货地址',
                    },
                    {
                        to: '/mall/user/personnal-center/integral',
                        text: '我的积分',
                    },
                    {
                        to: '/mall/user/personnal-center/coupon',
                        text: '优惠券',
                    },
                ],
            };
        },
    };
</script>