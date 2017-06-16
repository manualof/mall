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
                returnsColumns: [
                    {
                        align: 'left',
                        key: 'returnsTotal',
                        render() {
                            return `<div class="returns-total" v-if="row.isReturns">
                                        <img :src="row.img">
                                        <div>
                                            <p>MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD</p>
                                            <p>订单编号：340789789895609</p>
                                            <p>退货编号：340789789895609</p>
                                        </div>`;
                        },
                        title: '商品/订单号/退货编号',
                        width: 600,
                    },
                    {
                        align: 'right',
                        key: 'returnsMoney',
                        title: '退款金额',
                    },
                    {
                        align: 'center',
                        key: 'returnsName',
                        title: '买家会员名',
                    },
                    {
                        align: 'center',
                        key: 'returnsTime',
                        title: '申请时间',
                    },
                    {
                        align: 'center',
                        key: 'returnsStatus',
                        title: '处理状态',
                    },
                    {
                        align: 'center',
                        key: 'returnsPlatform',
                        title: '平台确认',
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
                returnsData: [
                    {
                        img: image,
                        isReturns: true,
                        returnsMoney: '1999.00',
                        returnsName: 'ibenchu',
                        returnsPlatform: '无',
                        returnsStatus: '待审核',
                        returnsTime: '2017-05-17  22:50:22',
                        isLook: false,
                    },
                    {
                        img: image,
                        isLook: true,
                        isReturns: true,
                        returnsMoney: '1999.00',
                        returnsName: 'ibenchu',
                        returnsPlatform: '已完成',
                        returnsStatus: '同意',
                        returnsTime: '2017-04-01  16:30:31',
                    },
                    {
                        img: image,
                        isLook: true,
                        isReturns: true,
                        returnsMoney: '1999.00',
                        returnsName: 'ibenchu',
                        returnsPlatform: '无',
                        returnsStatus: '不同意',
                        returnsTime: '2017-04-01  16:30:31',
                    },
                ],
                dealReturns: [
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
                returnsSearch: [
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
                        path: 'returns/check',
                    },
                );
            },
            deal() {
                this.$router.push(
                    {
                        path: 'returns/deal',
                    },
                );
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-returns">
            <tabs value="name1">
                <tab-pane label="退货记录" name="name1">
                    <card :bordered="false">
                        <div class="returns-content">
                            <div class="order-money-content">
                                <div class="returns-select">
                                    <ul class="clearfix">
                                        <li class="store-body-header-right">
                                            <i-input  placeholder="请输入关键词进行搜索">
                                                <i-select slot="prepend" style="width: 100px;" placeholder="请输入关键词进行搜索">
                                                    <i-option :value="item.value" v-for="item in returnsSearch">{{ item.label }}</i-option>
                                                </i-select>
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </li>
                                        <li>
                                            处理状态
                                            <i-select style="width:124px">
                                                <i-option :key="item" :value="item.value" v-for="item in dealReturns">{{ item.label }}</i-option>
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
                                <i-table :columns="returnsColumns"
                                         :context="self"
                                         :data="returnsData">
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