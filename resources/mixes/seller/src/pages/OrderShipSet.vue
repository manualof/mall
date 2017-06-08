<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/img_logo.png';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                order: {
                    address: '陕西省西安市雁塔区科技四路中段陕西国土资源大厦公寓楼2304',
                    amount: 2,
                    company: '顺丰速运',
                    createTime: '2017-02-09 ',
                    freight: '10.00',
                    goods: [
                        {
                            amount: 2,
                            image: image1,
                            name: 'MIUI/小米 小米手机4 小米4 MI4智能4G手机包邮 黑色 D-LT（4G）/TD-SCD',
                            price: '100.00',
                        },
                        {
                            amount: 2,
                            image: image1,
                            name: 'MIUI/小米 小米手机4 小米4 MI4智能4G手机包邮 黑色 D-LT（4G）/TD-SCD',
                            price: '100.00',
                        },
                    ],
                    goodsName: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD',
                    message: '',
                    number: 22222222222,
                    orderNum: 3333333333333,
                    phone: 122222222,
                    price: '20.00',
                    priceAll: '167.00',
                    process: [
                        {
                            status: '2016-12-21 11:30:31 发往西安中转',
                        },
                        {
                            status: '2016-12-21 11:30:31 发往西安中转',
                        },
                        {
                            status: '2016-12-21 11:30:31 西安市高新二路揽件',
                        },
                    ],
                    user: '旺旺',
                },
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="order-ship-set">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>待发货-设置发货</span>
            </div>
            <card :bordered="false">
                <div>
                    <h5>
                        <span>第一步</span>
                        确认收货信息及交易详情
                    </h5>
                    <table class="order-table">
                        <tbody>
                        <tr class="space">
                            <td colspan="2">
                                <span>订单号:{{ order.orderNum }}</span>
                                <span>下单时间:{{ order.createTime }}</span>
                                <button class="print-btn">打印发货单</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <div class="goods-name-row" v-for="item in order.goods">
                                        <div class="img-text">
                                            <div class="img">
                                                <img :src="item.image" alt="">
                                            </div>
                                            <div class="goods-name">
                                                <p>{{ item.name }}</p>
                                                <p>&yen;{{ item.price }} X {{ item.amount }}件</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <i-form ref="order" :model="order" :rules="ruleValidate" :label-width="80">
                                    <row>
                                        <i-col span="20">
                                            <form-item label="运费">{{ order.freight}}</form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="20">
                                            <form-item label="发货备注">
                                                <i-input type="textarea" v-model="order.message"
                                                         :autosize="{minRows: 3,maxRows: 5}"></i-input>
                                            </form-item>
                                        </i-col>
                                    </row>
                                </i-form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="address-information clearfix">
                        <span>收货人信息: {{ order.user }} {{ order.phone }} {{ order.address }}</span>
                        <i-button type="ghost">编辑</i-button>
                    </div>
                </div>
                <div>
                    <h5>
                        <span>第二步</span>
                        确认发货信息
                    </h5>
                    <div class="address-information clearfix insure-infomation">
                        <span>收货人信息: {{ order.user }} {{ order.phone }} {{ order.address }}</span>
                        <i-button type="ghost">编辑</i-button>
                    </div>
                </div>
            </card>
        </div>
    </div>
</template>