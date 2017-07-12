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
                loading: false,
                returnForm: {
                    enabled: '',
                    message: '',
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
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.returnForm.validate(valid => {
                    if (valid) {
                        self.$Message.success('提交成功!');
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
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
                                <i-form ref="returnForm" :model="returnForm" :rules="ruleValidate" :label-width="160">
                                    <form-item label="是否同意">
                                        <radio-group v-model="returnForm.enabled">
                                            <radio label="同意"></radio>
                                            <radio label="弃货"></radio>
                                            <radio label="拒绝"></radio>
                                        </radio-group>
                                        <p class="tip">如果选择弃货，买家将不用退回原商品，提交后直接由管理员确认退款</p>
                                    </form-item>
                                    <row>
                                        <i-col span="20">
                                            <form-item label="备注信息" class="deal-advise">
                                                <i-input type="textarea" v-model="returnForm.message"
                                                         :autosize="{minRows: 3,maxRows: 5}"></i-input>
                                                <p class="tip">如是同意退货，请及时关注买家的发货情况，并机型收货（发货5天后可以
                                                    选择未收到，超过7天不处理按弃货处理）</p>
                                            </form-item>
                                        </i-col>
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
                        </i-col>
                    </row>
                </div>
                <row>
                    <i-col span="18">
                        <i-button :loading="loading" @click.native="submit"
                                  class="return-button" type="primary">
                            <span v-if="!loading">确认提交</span>
                            <span v-else>正在提交…</span>
                        </i-button>
                    </i-col>
                </row>
            </card>
        </div>
    </div>
</template>