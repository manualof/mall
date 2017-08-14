<script>
    import head from '../assets/images/head.png';

    export default {
        data() {
            return {
                user: {
                    integral: 3264,
                    headImg: head,
                    name: 'yonghuming',
                    level: '金牌会员',
                    order: {
                        pendingPayment: 1,
                        unShip: 5,
                        unReceipt: 4,
                        unEvaluate: 10,
                    },
                },
            };
        },
    };
</script>
<template>
    <div class="user">
        <div class="userInfo clearfix">
            <img class="pull-left" :src="user.headImg" alt="">
            <div class="pull-left">
                <p><b>{{ user.name }}</b></p>
                <p>会员等级： {{ user.level }}</p>
                <p>积分： {{ user.integral }}</p>
            </div>
            <ul class="pull-right clearfix">
                <li class="pull-left">
                    <p>待付款</p>
                    <p>{{ user.order.pendingPayment }}</p>
                </li>
                <li class="pull-left">
                    <p>待发货</p>
                    <p>{{ user.order.unShip }}</p>
                </li>
                <li class="pull-left">
                    <p>待收货</p>
                    <p>{{ user.order.unReceipt }}</p>
                </li>
                <li class="pull-left">
                    <p>待评价</p>
                    <p>{{ user.order.unEvaluate }}</p>
                </li>
            </ul>
        </div>
    </div>
</template>