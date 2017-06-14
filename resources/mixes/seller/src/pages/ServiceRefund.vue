<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                refundList: [
                    {
                        label: '进行中',
                        value: '1',
                    },
                    {
                        label: '已完成',
                        value: '2',
                    },
                ],
                searchList: [
                    {
                        label: '退款人',
                        value: '1',
                    },
                    {
                        label: '退款主题',
                        value: '2',
                    },
                    {
                        label: '退款编号',
                        value: '3',
                    },
                ],
                refundColumns: [
                    {
                        align: 'center',
                        key: 'refundTotal',
                        title: '商品/订单号/退款号',
                    },
                    {
                        align: 'right',
                        key: 'refundMoney',
                        title: '退款金额',
                    },
                    {
                        align: 'center',
                        key: 'refundName',
                        title: '买家会员名',
                    },
                    {
                        align: 'center',
                        key: 'refundTime',
                        title: '申请时间',
                    },
                    {
                        align: 'center',
                        key: 'refundStatus',
                        title: '处理状态',
                    },
                    {
                        align: 'center',
                        key: 'refundPlatform',
                        title: '平台确认',
                    },
                    {
                        align: 'center',
                        key: 'complaintAction',
                        render(row, column, index) {
                            return `<i-button @click.native="check(${index})" size="small" type="ghost">查看</i-button>`;
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                refundData: [
                    {
                        refundTotal: 2646846526,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundTime: '2017-04-01  16:30:31',
                        refundStatus: '同意',
                        refundPlatform: '已完成',
                    },
                    {
                        refundTotal: 2646846526,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundTime: '2017-04-01  16:30:31',
                        refundStatus: '同意',
                        refundPlatform: '已完成',
                    },
                    {
                        refundTotal: 2646846526,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundTime: '2017-04-01  16:30:31',
                        refundStatus: '同意',
                        refundPlatform: '已完成',
                    },
                    {
                        refundTotal: 2646846526,
                        refundMoney: '300.00',
                        refundName: 'huiyuanming',
                        refundTime: '2017-04-01  16:30:31',
                        refundStatus: '同意',
                        refundPlatform: '已完成',
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
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-complaint">
            <tabs value="name1">
                <tab-pane label="退款记录" name="name1">
                    <card :bordered="false">
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <ul class="clearfix">
                                        <li class="store-body-header-right">
                                            <i-input v-model="applicationWord" placeholder="请输入关键词进行搜索">
                                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                                    <i-option v-for="item in searchList"
                                                              :value="item.value">{{ item.label }}</i-option>
                                                </i-select>
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </li>
                                        <li>
                                            处理状态
                                            <i-select v-model="model2" style="width:124px">
                                                <i-option v-for="item in refundList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </li>
                                        <li>
                                            申请时间
                                            <date-picker type="date" placeholder="选择日期"
                                                         style="width: 124px"></date-picker>
                                            -
                                            <date-picker type="date" placeholder="选择日期"
                                                         style="width: 124px"></date-picker>
                                        </li>
                                    </ul>
                                </div>
                                <i-table :columns="refundColumns"
                                         :context="self"
                                         :data="refundData"
                                         ref="refundList">
                                </i-table>
                                <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>