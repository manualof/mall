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
                refundColumns: [
                    {
                        align: 'left',
                        key: 'refundTotal',
                        render() {
                            return `<div class="refund-total" v-if="row.isRefund">
                                        <img :src="row.img">
                                        <div>
                                            <p>MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD</p>
                                            <p>订单编号：3232656564988</p>
                                            <p>退款编号：3232656564988</p>
                                        </div>`;
                        },
                        title: '商品/订单号/退款号',
                    },
                    {
                        align: 'center',
                        key: 'refundMoney',
                        title: '退款金额',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'refundName',
                        title: '买家会员名',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'refundTime',
                        title: '申请时间',
                        width: 160,
                    },
                    {
                        align: 'center',
                        key: 'refundStatus',
                        title: '处理状态',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'refundPlatform',
                        title: '平台确认',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'complaintAction',
                        render(row, column, index) {
                            return `<i-button @click.native="check(${index})" size="small" type="ghost" v-if="row.isLook">查看</i-button>
                                     <i-button  @click.native="deal(${index})" size="small" type="ghost" v-if="!row.isLook">处理</i-button>`;
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                refundData: [
                    {
                        img: image,
                        isLook: true,
                        isRefund: true,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundPlatform: '已完成',
                        refundStatus: '同意',
                        refundTime: '2017-04-01  16:30:31',
                    },
                    {
                        img: image,
                        isLook: false,
                        isRefund: true,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundStatus: '同意',
                        refundTime: '2017-04-01  16:30:31',
                    },
                    {
                        img: image,
                        isRefund: true,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundStatus: '同意',
                        refundTime: '2017-04-01  16:30:31',
                    },
                    {
                        img: image,
                        isRefund: true,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundStatus: '同意',
                        refundTime: '2017-04-01  16:30:31',
                    },
                    {
                        img: image,
                        isRefund: true,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundStatus: '同意',
                        refundTime: '2017-04-01  16:30:31',
                    },
                    {
                        img: image,
                        isRefund: true,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundStatus: '同意',
                        refundTime: '2017-04-01  16:30:31',
                    },
                    {
                        img: image,
                        isRefund: true,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundStatus: '同意',
                        refundTime: '2017-04-01  16:30:31',
                    },
                ],
                dealRefund: [
                    {
                        label: '待审核',
                        value: '1',
                    },
                    {
                        label: '同意',
                        value: '2',
                    },
                    {
                        label: '不同意',
                        value: '2',
                    },
                ],
                refundSearch: [
                    {
                        label: '订单编号',
                        value: '1',
                    },
                    {
                        label: '退货编号',
                        value: '2',
                    },
                    {
                        label: '买家会员名',
                        value: '3',
                    },
                ],
                self: this,
            };
        },
        methods: {
            check() {
                this.$router.push(
                    {
                        path: 'refund/check',
                    },
                );
            },
            deal() {
                this.$router.push(
                    {
                        path: 'refund/deal',
                    },
                );
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-refund">
            <tabs value="name1">
                <tab-pane label="退款记录" name="name1">
                    <card :bordered="false">
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <ul class="clearfix">
                                        <li class="store-body-header-right">
                                            <i-input  placeholder="请输入关键词进行搜索">
                                                <i-select slot="prepend" style="width: 100px;" placeholder="请输入关键词进行搜索">
                                                    <i-option :value="item.value" v-for="item in refundSearch">{{ item.label }}</i-option>
                                                </i-select>
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </li>
                                        <li>
                                            处理状态
                                            <i-select style="width:124px">
                                                <i-option :key="item" :value="item.value" v-for="item in dealRefund">{{ item.label }}</i-option>
                                            </i-select>
                                        </li>
                                        <li>
                                            申请时间
                                            <date-picker placeholder="选择日期" style="width: 124px" type="date"></date-picker>
                                            -
                                            <date-picker placeholder="选择日期" style="width: 124px" type="date"></date-picker>
                                        </li>
                                    </ul>
                                </div>
                                <i-table :columns="refundColumns"
                                         :context="self"
                                         :data="refundData"
                                         ref="refundList">
                                </i-table>
                                <div class="page">
                                    <page  show-elevator :total="100"></page>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>