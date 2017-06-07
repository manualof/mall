<script>
    import injection from '../helpers/injection';
    import image from '../assets/images/img_logo.png';

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
                    code: '3333',
                    company: '顺丰速运',
                    freight: '10.00',
                    goodsName: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD',
                    invoice: '普通发票',
                    number: 22222222222,
                    orderNum: 3333333333333,
                    payStyle: '在线支付',
                    phone: 122222222,
                    picture: image,
                    price: '20.00',
                    priceAll: '167.00',
                    replayMessage: 'sssssssss',
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
        <div class="order-detail">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>所有订单-订单详情</span>
            </div>
            <card :bordered="false">
                <div class="logistics-detail">
                    <i-form ref="order" :model="order" :rules="ruleValidate" :label-width="160">
                        <row>
                            <i-col span="12">
                                <h5>订单详情</h5>
                                <row>
                                    <i-col>
                                        <form-item label="收货人">
                                            {{ order.user }} {{ order.phone }} {{ order.address }}
                                        </form-item>
                                    </i-col>
                                </row>
                                <row>
                                    <i-col>
                                        <form-item label="支付方式">
                                            {{ order.payStyle }}
                                        </form-item>
                                    </i-col>
                                </row>
                                <row>
                                    <i-col>
                                        <form-item label="发票">
                                            {{ order.invoice }}
                                        </form-item>
                                    </i-col>
                                </row>
                                <row>
                                    <i-col>
                                        <form-item label="买家留言">
                                            {{ order.replayMessage }}
                                        </form-item>
                                    </i-col>
                                </row>
                                <row>
                                    <i-col>
                                        <form-item label="订单编号">
                                            {{ order.number }}
                                        </form-item>
                                    </i-col>
                                </row>
                                <row>
                                    <i-col>
                                        <form-item label="提货码">
                                            {{ order.code }}
                                        </form-item>
                                    </i-col>
                                </row>
                            </i-col>
                            <i-col span="12">
                                <div class="goods-intro-content">

                                </div>
                            </i-col>
                        </row>
                    </i-form>
                </div>
            </card>
        </div>
    </div>
</template>