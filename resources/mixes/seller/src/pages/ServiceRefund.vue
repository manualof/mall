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
                serviceRefund: {
                    refundNumber: '263567946465245485',
                    refundName: 'maijia',
                    refundResponse: '未按时发货',
                    refundMoney: '￥99.00',
                    refundState: '发货太慢',
                    img: image1,
                    content: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD¥1999.00 * 1（数量）',
                    carriage: '10.00',
                    order: '138.00',
                    serial: 1254525945416,
                },
            };
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-refund">
            <tabs value="name1">
                <tab-pane label="退款记录-处理" name="name1">
                    <div class="content">
                        <row>
                            <i-col span="15">
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="service-box">
                                            <h5>退款服务</h5>
                                            <div class="refund-service">
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
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="service-box">
                                            <h5>买家退款申请</h5>
                                            <div>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款编号">
                                                            {{ serviceRefund.refundNumber }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="申请人(买家)">
                                                            {{ serviceRefund.refundName }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款原因">
                                                            {{ serviceRefund.refundResponse }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款金额">
                                                            {{ serviceRefund.refundMoney }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="退款说明">
                                                            {{ serviceRefund.refundState }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="凭证上传">
                                                            {{ serviceRefund.refundNumber }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="service-box">
                                            <h5>商家处理意见</h5>
                                            <div>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="是否同意">
                                                            <radio>同意</radio>
                                                            <radio>拒绝</radio>
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="21">
                                                        <form-item label="备注信息">
                                                            <i-input v-model="value8" type="textarea" :autosize="{minRows: 2,maxRows: 5}"></i-input>
                                                            <p class="tip">只能提交一次，请认真选择，同意并经过平台确认后会将金额返还给买家，不同意买家可以向平台投诉或再次申请</p>
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                </card>
                                <i-button type="primary" size="small">
                                    确认提交
                                </i-button>
                            </i-col>
                            <i-col span="9">
                                <card :bordered="false">
                                    <i-form :label-width="200">
                                        <div class="service-box">
                                            <h5>商品交易信息</h5>
                                            <div>
                                                <row>
                                                    <i-col span="1">
                                                        <img :src="serviceRefund.pic">
                                                    </i-col>
                                                    <i-col span="20">
                                                        <form-item>
                                                            {{ serviceRefund.content }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="运费">
                                                            {{ serviceRefund.carriage }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="订单总额">
                                                            {{ serviceRefund.order }}
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="订单编号">
                                                            {{ serviceRefund.serial }}
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