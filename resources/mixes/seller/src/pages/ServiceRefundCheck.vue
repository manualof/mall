<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/img_logo.png';
    import image2 from '../assets/images/img_banner.png';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                whether: '同意',
                serviceRefund: {
                    refundNumber: '263567946465245485',
                    refundName: 'maijia',
                    refundResponse: '未按时发货',
                    refundMoney: '￥99.00',
                    refundState: '发货太慢',
                    image: image2,
                    pic: image1,
                    content: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD',
                    content1: '¥1999.00 * 1',
                    carriage: '10.00',
                    order: '138.00',
                    serial: 1254525945416,
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
//            removeImage() {
//                this.serviceRefund.image = '';
//            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-refund-check">
            <tabs value="name1">
                <tab-pane label="退款记录-处理" name="name1">
                    <card :bordered="false">
                        <div class="content">
                            <row>
                                <i-col span="15">
                                    <i-form :label-width="200">
                                        <div class="service-box">
                                            <h5>退款服务</h5>
                                            <div class="refund-service">
                                                <steps :current="1">
                                                    <step v-for="step in steps" :title="step.title" :content="step.content"></step>
                                                </steps>
                                            </div>
                                        </div>
                                    </i-form>
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
                                                        <form-item label="凭证上传" prop="image">
                                                            <div class="image-preview" v-if="serviceRefund.image">
                                                                <img :src="serviceRefund.image">
                                                                <icon type="close" @click.native="removeImage"></icon>
                                                            </div>
                                                        </form-item>
                                                    </i-col>
                                                </row>
                                            </div>
                                        </div>
                                    </i-form>
                                    <i-form :label-width="200">
                                        <div class="service-box">
                                            <h5>商家处理意见</h5>
                                            <div>
                                                <row>
                                                    <i-col span="12">
                                                        <form-item label="是否同意">
                                                            <radio-group v-model="whether">
                                                                <radio label="同意"></radio>
                                                                <radio label="拒绝"></radio>
                                                            </radio-group>
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
                                </i-col>
                                <i-col span="9">
                                    <i-form :label-width="200">
                                        <div class="service-box">
                                            <h5>商品交易信息</h5>
                                            <div class="box-information">
                                                <row>
                                                    <img :src="serviceRefund.pic">
                                                    <div class="information-box">
                                                        <span>{{ serviceRefund.content }}</span><br>
                                                        <span> {{ serviceRefund.content1 }} </span>（数量）
                                                    </div>
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
                                </i-col>
                            </row>
                            <i-button type="primary">
                                确认提交
                            </i-button>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>