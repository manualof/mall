<template>
    <div class="payment-success  ">
        <header-bar></header-bar>
        <div class="header-bar-logo header-bar-line">
            <div class="container">
                <img src="../assets/images/logo.png" alt="">
            </div>
        </div>
        <div class="container">
            <div class="pay-success-model">
                <div class="top-status bottom-line">
                    <ul class="clearfix">
                        <li class="clearfix" v-for="(step, index) in steps" :class="{ already:status>index }">
                            <div class="step pull-left">
                                <i class="icon iconfont" :class="step.icon"> </i>
                                <p>{{ step.name }}</p>
                                <p>{{ step.time }}</p>
                            </div>
                            <ul class="clearfix cricle-box pull-left">
                                <li class="cricle" v-for="item in 13"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="wait-pay bottom-line step-status" v-if="status===1">
                    <h4>当前状态：等待买家付款</h4>
                    <p>请于<span class="time"> 0小时30分07秒 </span>内进行付款，若未及时付款，系统将自动取消订单</p>
                    <p class="remind-btn">
                        <button class="order-btn">立即付款</button>
                        <a href="">取消订单</a>
                    </p>
                </div>
                <div class="current-status bottom-line step-status"  v-if="status===2">
                    <h4>当前状态：待发货</h4>
                    <p>订单已提交，商家进行备货发货准备。若您想取消购买，可与商家沟通后申请退款。</p>
                    <p class="remind-btn">
                        <button class="order-btn">申请退款</button>
                    </p>
                </div>
                <div class="bottom-line step-status wait-receipt">
                    <h4>当前状态：卖家已发货，请查看页面下方物流信息了解宝贝寄送情况</h4>
                    <button class="remind-btn order-btn">确认收货</button>
                    <p>物流公司： 顺丰速运</p>
                    <p>运单号码： 2017020615400000710016792</p>
                    <div class="logistics-information clearfix">
                        <span>物流信息： </span>
                        <ul class="right-content">
                            <li class="address" v-for="logic in logisticsInfo" :class="{active:logic.current}">
                                <span class="point" :class="{active:logic.current}"></span>
                                <span>{{ logic.time }}&nbsp;&nbsp;&nbsp;{{ logic.address }}  {{ logic.status }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="wait-receipt bottom-line transaction step-status">
                    <h4>当前状态：交易成功</h4>
                    <p class="click">若对此订单有异议，可点击 <a href="">申请售后</a></p>
                    <p>物流公司： 顺丰速运</p>
                    <p>运单号码： 2017020615400000710016792</p>
                    <div class="logistics-information clearfix">
                        <span>物流信息： </span>
                        <ul class="right-content">
                            <li class="address" v-for="logic in logisticsInfo" :class="{active:logic.current}">
                                <span class="point" :class="{active:logic.current}"></span>
                                <span>{{ logic.time }}&nbsp;&nbsp;&nbsp;{{ logic.address }}  {{ logic.status }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="receipt-address bottom-line">
                    <p>收货地址：</p>
                    <p>王茂&nbsp;&nbsp;176****000&nbsp;&nbsp;陕西省西安市雁塔区高新二路36号xx大厦</p>
                    <p>订单号：2017020615400000710016792</p>
                    <p>支付金额：¥75.00（支付宝支付）</p>
                    <p> 下单时间：2017-02-06 15:40:32</p>
                </div>
                <div class="product-information">
                    <table width="100%">
                        <thead>
                        <tr>
                            <th class="th-img"></th>
                            <th class="name">商品信息</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>金额</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="td-img"><img src="../assets/images/img_06.png" alt=""></td>
                            <td class="td-information">Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童
                                可爱短袜5双装  <p>尺码：M</p></td>
                            <td><s>&yen;126.07</s>
                                <p>&yen;39.9</p></td>
                            <td>1</td>
                            <td>&yen;39.90</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="order-submit">
                    <div class="order-submit-content clearfix">
                        <span class="order-price">-&yen;16.60</span>
                        <div class="name">
                            <span class="integral">积分兑换(1660)：</span>
                        </div>
                    </div>
                    <div class="order-submit-content clearfix">
                        <span class="order-price">-&yen;16.60</span>
                        <span class="name">运费：</span>
                    </div>
                    <div class="order-submit-content clearfix">
                        <span class="order-price price">&yen;1034.88</span>
                        <span class="name">实付款：</span>
                    </div>
                </div>
            </div>
        </div>
        <right-side></right-side>
        <everyone-browse></everyone-browse>
        <myself-browse></myself-browse>
        <footer-content></footer-content>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import EveryoneBrowse from './dashboard/EveryoneBrowse';
    import FooterBar from './dashboard/FooterBar';
    import FooterContent from './dashboard/FooterContent';
    import HeaderBar from './dashboard/HeaderBar';
    import MyselfBrowse from './dashboard/MyselfBrowse';
    import RightSide from './dashboard/RightSide';

    export default {
        components: {
            EveryoneBrowse,
            FooterBar,
            FooterContent,
            HeaderBar,
            MyselfBrowse,
            RightSide,
        },
        data() {
            return {
                logisticsInfo: [
                    {
                        address: '北京海淀区xx大道',
                        current: true,
                        time: '2016-12-29  13:06:03',
                        status: '已收入',
                    },
                    {
                        address: '北京海淀区xx大道',
                        current: false,
                        time: '2016-12-29  13:06:03',
                        status: '已收入',
                    },
                    {
                        address: '北京海淀区xx大道',
                        current: false,
                        time: '2016-12-29  13:06:03',
                        status: '已收入',
                    },
                    {
                        address: '北京海淀区xx大道',
                        current: false,
                        time: '2016-12-29  13:06:03',
                        status: '已收入',
                    },
                ],
                status: 1,
                steps: [
                    {
                        icon: 'icon-icon',
                        name: '提交订单',
                        time: '2017-05-10 12:30:10',
                    },
                    {
                        icon: 'icon-fukuan',
                        name: '付款成功',
                    },
                    {
                        icon: 'icon-feiji',
                        name: '商家发货',
                    },
                    {
                        icon: 'icon-shouhuo',
                        name: '确认收货',
                    },
                    {
                        icon: 'icon-pingjia',
                        name: '评价',
                    },
                ],
            };
        },
    };
</script>
