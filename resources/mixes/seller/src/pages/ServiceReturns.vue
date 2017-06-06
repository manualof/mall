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
                returnRequest: {
                    returnNumber: '263567946465245485',
                    returnName: 'maijia',
                    returnResponse: '尺码不标准',
                    returnMoney: '￥99.00',
                    returnState: '发货太慢',
                    img: image1,
                },
                merchantsAdvice: {
                    returnsIdea: '同意',
                    returnsNote: '退款',
                    returnsLogistics: '圆通快递 323264991323',
                    returnsGoods: '确认物品完整',
                },
                mallAudit: {
                    returnsPlatform: '已完成',
                    returnsRefund: '退款',
                },
                commodityTrading: {
                    content: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD¥1999.00 * 1（数量）',
                    carriage: '10.00',
                    order: '138.00',
                    serial: 1254525945416,
                },
                logisticsInformation: {
                    logisticsCompany: '顺丰快递',
                    trackingNumber: '326596623565694313',
                    logisticsInformation: '2016-12-21 11:30:31  发往西安中转',
                },
            };
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-returns">
            <tabs value="name1">
                <tab-pane label="退货记录-查看" name="name1">
                    <div class="content">
                        <row>
                            <!--左侧-->
                            <i-col span="15">
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="returns-box">
                                            <h5>退款服务</h5>
                                            <div class="returns-service">
                                                <steps :current="current">
                                                    <step title="买家申请退款" content="2016-12-21 13:11"></step>
                                                    <step title="商家处理申请" content="2016-12-21 13:11"></step>
                                                    <step title="平台审核"></step>
                                                    <step title="退货完成"></step>
                                                </steps>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                                <!--买家退货申请-->
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="returns-box">
                                            <h5>买家退款申请</h5>
                                            <div>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款编号">
                                                            {{ returnRequest.returnNumber }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="申请人(买家)">
                                                            {{ returnRequest.returnName }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款原因">
                                                            {{ returnRequest.returnResponse }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款金额">
                                                            {{ returnRequest.returnMoney }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款说明">
                                                            {{ returnRequest.returnState }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="凭证上传">
                                                            {{ returnRequest.returnState }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                                <!--商家处理意见-->
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="returns-box">
                                            <h5>商家处理意见</h5>
                                            <div>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="是否同意">
                                                            {{ merchantsAdvice.returnsIdea }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="备注信息">
                                                            {{ merchantsAdvice.returnsNote }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="物流单号">
                                                            {{ merchantsAdvice.returnsLogistics }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="收货备注">
                                                            {{ merchantsAdvice.returnsGoods }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                                <!--商城平台审核-->
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="returns-box">
                                            <h5>商城平台审核</h5>
                                            <div>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="平台确认">
                                                            {{ mallAudit.returnsPlatform }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款方式">
                                                            {{ mallAudit.returnsRefund }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                            </i-col>
                            <!--右侧-->
                            <i-col span="9">
                                <!--商品交易信息-->
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="returns-box">
                                            <h5>商品交易信息</h5>
                                            <div>
                                                <row>
                                                    <i-col span="1">
                                                        <img :src="commodityTrading.pic">
                                                    </i-col>
                                                    <i-col span="20">
                                                        <form-item>
                                                            {{ commodityTrading.content }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="运费">
                                                            {{ commodityTrading.carriage }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="订单总额">
                                                            {{ commodityTrading.order }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="订单编号">
                                                            {{ commodityTrading.serial }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                                <!--物流信息-->
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="returns-box">
                                            <h5>物流信息</h5>
                                            <div>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="物流公司">
                                                            {{ logisticsInformation.logisticsCompany }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="运单号码">
                                                            {{ logisticsInformation.trackingNumber }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="18">
                                                        <form-item label="物流信息">
                                                            {{ logisticsInformation.logisticsInformation }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                            </i-col>
                        </row>
                    </div>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>