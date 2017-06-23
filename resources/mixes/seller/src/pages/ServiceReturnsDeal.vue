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
                dealAdvice: {
                    returnsIdea: '同意',
                    returnsGoods: '确认收货完成',
                    returnsLogistics: '圆通快递 3478956389',
                    returnsNote: 'b',
                },
                dealAudit: {
                    returnsPlatform: '已完成',
                    returnsRefund: '在线付款',
                },
                dealInformation: {
                    logisticsCompany: '顺丰快递',
                    trackingNumber: '326596623565694313',
                },
                dealLogistics: [
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                ],
                dealTrading: {
                    amount: 1,
                    carriage: 10.00,
                    content: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD',
                    content1: 1999.00,
                    order: '',
                    pic: image,
                    serial: 346952350274,
                },
                returnsRequest: {
                    picture: image,
                    returnMoney: '1999.00',
                    returnName: 'ibenchu',
                    returnNumber: '30789539893479537',
                    returnResponse: '商品质量存在问题',
                    returnState: '已经过去一个礼拜还没有发货',
                },
                steps: [
                    {
                        content: '2016-12-21 13:11:20',
                        title: '买家申请退货',
                    },
                    {
                        content: '2016-12-21 13:11:20',
                        title: '商家处理退货申请',
                    },
                    {
                        title: '买家退货给商家',
                    },
                    {
                        title: '确认收货，平台审核完成退款',
                    },
                ],
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
        computed: {
            totalAmount() {
                return (this.dealTrading.content1 * this.dealTrading.amount)
                        + this.dealTrading.carriage;
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-returns-deal">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>退货记录-处理</span>
            </div>
            <card :bordered="false">
                <div class="returns-deal">
                    <row>
                        <i-col span="15">
                            <!--退货服务-->
                            <row>
                                <i-col>
                                    <h5>退货服务</h5>
                                    <i-form :label-width="160">
                                        <row>
                                            <div class="returns-deal-step">
                                                <steps :current="1">
                                                    <step :content="step.content" :title="step.title" v-for="step in steps"></step>
                                                </steps>
                                            </div>
                                        </row>
                                    </i-form>
                                </i-col>
                            </row>
                            <!--买家退款申请-->
                            <i-col>
                                <h5>买家退货申请</h5>
                                <i-form :label-width="160">
                                    <form-item label="退货编号">
                                        {{ returnsRequest.returnNumber }}
                                    </form-item>
                                    <form-item label="申请人(买家)">
                                        {{ returnsRequest.returnName }}
                                    </form-item>
                                    <form-item label="退货原因">
                                        {{ returnsRequest.returnResponse }}
                                    </form-item>
                                    <form-item label="退货金额">
                                        &yen;{{ returnsRequest.returnMoney }}
                                    </form-item>
                                    <row>
                                        <form-item label="退货说明">
                                            {{ returnsRequest.returnState }}
                                        </form-item>
                                        <form-item label="凭证上传">
                                            <img :src="returnsRequest.picture" alt="">
                                        </form-item>
                                    </row>
                                </i-form>
                            </i-col>
                            <!--商家处理意见-->
                            <i-col>
                                <h5>商家处理意见</h5>
                                <i-form :label-width="160">
                                    <form-item label="处理状态">
                                        {{ dealAdvice.returnsIdea }}
                                    </form-item>
                                    <form-item label="商家备注">
                                        {{ dealAdvice.returnsNote }}
                                    </form-item>
                                    <form-item label="物流信息">
                                        {{ dealAdvice.returnsLogistics }}
                                    </form-item>
                                    <form-item label="收货备注">
                                        {{ dealAdvice.returnsGoods }}
                                    </form-item>
                                </i-form>
                            </i-col>
                            <!--商城平台处理审核-->
                            <i-col>
                                <h5>商城平台处理审核</h5>
                                <i-form :label-width="160">
                                    <form-item label="平台确认">
                                        {{ dealAudit.returnsPlatform }}
                                    </form-item>
                                    <row>
                                        <form-item label="退货方式">
                                            {{ dealAudit.returnsRefund }}
                                        </form-item>
                                    </row>
                                </i-form>
                            </i-col>
                        </i-col>
                        <i-col span="9">
                            <h5>商品交易信息</h5>
                            <i-form :label-width="160">
                                <div class="deal-intro-content">
                                    <row>
                                        <i-col span="5">
                                            <img :src="dealTrading.pic">
                                        </i-col>
                                        <i-col span="19">
                                            <p>{{ dealTrading.content }}</p>
                                            <p><i>&yen;{{ dealTrading.content1 }}</i>*{{ dealTrading.amount }}(数量)</p>
                                        </i-col>
                                    </row>
                                </div>
                                <form-item label="运费">
                                    {{ dealTrading.carriage }}
                                </form-item>
                                <form-item label="订单总额">
                                    {{ totalAmount }}
                                </form-item>
                                <row class="refund-number">
                                    <form-item label="订单编号">
                                        {{ dealTrading.serial }}
                                    </form-item>
                                </row>
                            </i-form>
                            <!--物流信息-->
                            <h5>物流信息</h5>
                            <i-form :label-width="160">
                                <form-item label="物流公司">
                                    {{ dealInformation.logisticsCompany }}
                                </form-item>
                                <form-item label="运单号码">
                                    {{ dealInformation.trackingNumber }}
                                </form-item>
                                <row>
                                    <!--<i-col span="16">-->
                                    <i-col span="24">
                                        <form-item label="物流信息">
                                        <span v-for="item in dealLogistics" class="logistics">
                                            {{ item.information }}
                                        </span>
                                        </form-item>
                                    </i-col>
                                </row>
                            </i-form>
                        </i-col>
                    </row>
                </div>
            </card>
        </div>
    </div>
</template>