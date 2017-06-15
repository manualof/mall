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
                commodityTrading: {
                    carriage: '10.00',
                    content: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD',
                    content1: '¥1999.00 * 1',
                    order: '138.00',
                    pic: image,
                    serial: 1254525945416,
                },
                logistics: [
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                    { information: '2016-12-21 11:30:31  发往西安中转' },
                ],
                logisticsInformation: {
                    logisticsCompany: '顺丰快递',
                    trackingNumber: '326596623565694313',
                },
                mallAudit: {
                    returnsPlatform: '已完成',
                    returnsRefund: '退款',
                },
                merchantsAdvice: {
                    returnsIdea: '同意',
                    returnsGoods: '确认物品完整',
                    returnsLogistics: '圆通快递 323264991323',
                    returnsNote: '退款',
                },
                returnRequest: {
                    picture: image,
                    returnMoney: '￥99.00',
                    returnName: 'maijia',
                    returnNumber: '263567946465245485',
                    returnResponse: '尺码不标准',
                    returnState: '发货太慢',
                },
                steps: [
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
        <div class="service-returns-check">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>退货记录-查看</span>
            </div>
            <card :bordered="false">
                <div class="returns-details">
                    <row>
                        <i-col span="15">
                            <!--退货服务-->
                            <row>
                                <i-col>
                                    <h5>退款服务</h5>
                                    <i-form :label-width="160">
                                        <row>
                                            <div class="check-step">
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
                                <h5>买家退款申请</h5>
                                <i-form :label-width="160">
                                    <form-item label="退款编号">
                                        {{ returnRequest.returnNumber }}
                                    </form-item>
                                    <form-item label="申请人(买家)">
                                        {{ returnRequest.returnName }}
                                    </form-item>
                                    <form-item label="退款原因">
                                        {{ returnRequest.returnResponse }}
                                    </form-item>
                                    <form-item label="退款金额">
                                        &yen;{{ returnRequest.returnMoney }}
                                    </form-item>
                                    <row>
                                        <form-item label="退款说明">
                                            {{ returnRequest.returnState }}
                                        </form-item>
                                        <form-item label="凭证上传">
                                            <img :src="returnRequest.picture" alt="">
                                        </form-item>
                                    </row>
                                </i-form>
                            </i-col>
                            <!--商家处理意见-->
                            <i-col>
                                <h5>商家处理意见</h5>
                                <i-form :label-width="160">
                                    <form-item label="是否同意">
                                        {{ merchantsAdvice.returnsIdea }}
                                    </form-item>
                                    <form-item label="备注信息">
                                        {{ merchantsAdvice.returnsNote }}
                                    </form-item>
                                    <form-item label="物流单号">
                                        {{ merchantsAdvice.returnsLogistics }}
                                    </form-item>
                                    <form-item label="收货备注">
                                        {{ merchantsAdvice.returnsGoods }}
                                    </form-item>
                                </i-form>
                            </i-col>
                            <!--商城平台审核-->
                            <i-col>
                                <h5>商城平台审核</h5>
                                <i-form :label-width="160">
                                    <form-item label="平台确认">
                                        {{ mallAudit.returnsPlatform }}
                                    </form-item>
                                    <row>
                                        <form-item label="退款方式">
                                            {{ mallAudit.returnsRefund }}
                                        </form-item>
                                    </row>
                                </i-form>
                            </i-col>
                        </i-col>
                        <i-col span="9">
                            <h5>商品交易信息</h5>
                            <i-form :label-width="160">
                                <div class="check-intro-content">
                                    <row>
                                        <i-col span="5">
                                            <img :src="commodityTrading.pic">
                                        </i-col>
                                        <i-col span="19">
                                            <p>{{ commodityTrading.content }}</p>
                                            <p><i>&yen;{{ commodityTrading.content1 }}</i>*{{ commodityTrading.amount }}(数量)</p>
                                        </i-col>
                                    </row>
                                </div>
                                <form-item label="运费">
                                    {{ commodityTrading.carriage }}
                                </form-item>
                                <form-item label="订单总额">
                                    {{ commodityTrading.order }}
                                </form-item>
                                <row class="refund-number">
                                    <form-item label="订单编号">
                                        {{ commodityTrading.serial }}
                                    </form-item>
                                </row>
                            </i-form>
                            <!--物流信息-->
                            <h5>物流信息</h5>
                            <i-form :label-width="160">
                                <form-item label="物流公司">
                                    {{ logisticsInformation.logisticsCompany }}
                                </form-item>
                                <form-item label="运单号码">
                                    {{ logisticsInformation.trackingNumber }}
                                </form-item>
                                <row>
                                    <i-col span="18">
                                        <form-item label="物流信息">
                                        <span v-for="item in logistics">
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