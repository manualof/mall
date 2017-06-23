<script>
    import image from '../assets/images/img_logo.png';
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                checkSteps: [
                    {
                        content: '2016-12-21 13:11:20',
                        title: '买家申请退款',
                    },
                    {
                        content: '2016-12-21 13:11:20',
                        title: '商家处理申请',
                    },
                    {
                        title: '平台审核',
                    },
                    {
                        title: '退货完成',
                    },
                ],
                refund: {
                    amount: 1,
                    freight: 10.00,
                    goodsName: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD',
                    information: '退款',
                    money: 99.00,
                    number: 263567946465245485,
                    numbering: 1254525945416,
                    person: 'maijia',
                    price: 1999.00,
                    picture: image,
                    response: '未按时发货',
                    state: '发货太慢',
                    whether: '同意',
                },
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
        computed: {
            refundTotal() {
                return (this.refund.price * this.refund.amount)
                        + this.refund.freight;
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-refund-check">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>退款记录-查看</span>
            </div>
            <card :bordered="false">
                <div class="refund-details">
                    <row>
                        <i-col span="15">
                            <!--退货服务-->
                            <row>
                                <i-col>
                                    <h5>退货服务</h5>
                                    <i-form :label-width="160">
                                        <row>
                                            <div class="check-step">
                                                <steps :current="1">
                                                    <step :content="step.content" :title="step.title" v-for="step in checkSteps"></step>
                                                </steps>
                                            </div>
                                        </row>
                                    </i-form>
                                </i-col>
                            </row>
                            <!--买家退款申请-->
                            <i-col>
                                <h5>买家退款申请</h5>
                                <i-form :label-width="160">
                                    <form-item label="退款编号">
                                        {{ refund.number }}
                                    </form-item>
                                    <form-item label="申请人(买家)">
                                        {{ refund.person }}
                                    </form-item>
                                    <form-item label="退款原因">
                                        {{ refund.response }}
                                    </form-item>
                                    <form-item label="退款金额">
                                        &yen;{{ refund.money }}
                                    </form-item>
                                    <row>
                                        <form-item label="退款说明">
                                            {{ refund.state }}
                                        </form-item>
                                        <form-item label="凭证上传">
                                            <img :src="refund.picture" alt="">
                                        </form-item>
                                    </row>
                                </i-form>
                            </i-col>
                            <!--商家处理意见-->
                            <i-col>
                                <h5>商家处理意见</h5>
                                <i-form :label-width="160">
                                    <form-item label="是否同意">
                                        {{ refund.whether }}
                                    </form-item>
                                    <row>
                                        <form-item label="备注信息">
                                            {{ refund.information }}
                                        </form-item>
                                    </row>
                                </i-form>
                            </i-col>
                        </i-col>
                        <i-col span="9">
                            <h5>商品交易信息</h5>
                            <i-form :label-width="160">
                                <div class="goods-intro-content">
                                    <row>
                                        <i-col span="5">
                                            <img :src="refund.picture">
                                        </i-col>
                                        <i-col span="19">
                                            <p>{{ refund.goodsName }}</p>
                                            <p><i>&yen;{{ refund.price }}</i>*{{ refund.amount }}(数量)</p>
                                        </i-col>
                                    </row>
                                </div>
                                <form-item label="运费">
                                    {{ refund.freight }}
                                </form-item>
                                <form-item label="订单总额">
                                    {{ refundTotal }}
                                </form-item>
                                <row class="refund-number">
                                    <form-item label="订单编号">
                                        {{ refund.numbering }}
                                    </form-item>
                                </row>
                            </i-form>
                        </i-col>
                    </row>
                </div>
            </card>
        </div>
    </div>
</template>