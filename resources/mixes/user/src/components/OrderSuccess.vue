<template>
    <div class="order-success  ">
        <header-bar></header-bar>
        <div class="header-bar-logo header-bar-line">
            <div class="container">
                <img src="../assets/images/logo.png" alt="">
            </div>
        </div>
        <div class="padding-attribute container">
            <div class="submit-success" v-if="orderDetail">
                <div class="submit-title text-center">
                    订单提交成功，请于<span>30分00秒</span>内完成支付~
                </div>
                <p>订单编号：{{ orderDetail.number }}</p>
                <p>收货地址：{{ orderDetail.address }}，{{ orderDetail.user }}，{{ orderDetail.phone }} </p>
                <p>{{ orderDetail.name }}
                    <span>数量：{{ orderDetail.num }}</span> <span>号码: {{ orderDetail.size }}</span></p>
            </div>
            <div class="order-pay">
                <div class="need-pay">
                    应付金额: <span> ￥{{ orderDetail.money }}</span>
                </div>
                <p class="alipay">
                    <label class="form-control-radio">
                        <input type="radio" name="pay">
                        <span></span>
                        <img src="../assets/images/alipay.png" alt="alipay">
                    </label>
                </p>
                <p class="weixin">
                    <label class="form-control-radio">
                        <input type="radio" name="pay">
                        <span></span>
                        <img src="../assets/images/weixin.png" alt="weixin">
                    </label>
                </p>
                <router-link :to="{ name: 'pay-result' }" class="order-btn">立即支付</router-link>
            </div>
        </div>
        <right-side></right-side>
        <footer-content></footer-content>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import RightSide from './dashboard/RightSide';

    import HeaderBar from './dashboard/HeaderBar';
    import FooterBar from './dashboard/FooterBar';
    import FooterContent from './dashboard/FooterContent';

    export default {
        data () {
            return {
                orderDetail: {
                    number: 1122154857863,
                    address: '北京市朝阳区群众',
                    user: '王茂',
                    phone: 12345654321,
                    name: 'Purrfectdiary 咕噜日记 1-8岁儿童中筒袜1双袜子随机发货中筒袜1双袜子随机发货',
                    num: 3,
                    size: 'M',
                    money: 1034.88,
                },
            };
        },
        components: {
            RightSide,
            HeaderBar,
            FooterBar,
            FooterContent,
        },
    };
</script>