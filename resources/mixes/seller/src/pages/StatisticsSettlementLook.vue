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
                billDetail: {
                    accountData: '2015-02-01',
                    payMoney: ' 0.00 = 0.00 (订单金额) - 0.00 (佣金金额) - 0.00 (退单金额) + 0.00 (退还佣金) ' +
                    '- 0.00 (店铺促销费用)',
                    settlementNum: '2165468784246',
                    settlementStatus: '已出帐',
                },
                commissionColumns: [
                    {
                        align: 'center',
                        key: 'goodName',
                        title: '商品名称',
                    },
                    {
                        align: 'center',
                        key: 'orderId',
                        title: '订单编号',
                    },
                    {
                        align: 'center',
                        key: 'orderMoney',
                        title: '支付金额',
                    },
                    {
                        align: 'center',
                        key: 'refundMoney',
                        title: '退款金额',
                    },
                    {
                        align: 'center',
                        key: 'proportion',
                        title: '佣金比例',
                    },
                    {
                        align: 'center',
                        key: 'commission',
                        title: '已结佣金',
                    },
                    {
                        align: 'center',
                        key: 'time',
                        title: '结算时间',
                    },
                ],
                commissionData: [
                    {
                        commission: '99.00',
                        goodName: '名称',
                        orderId: 111,
                        orderMoney: '99.00',
                        proportion: '23',
                        refundMoney: '33.55',
                        time: '2017-06-02',
                    },
                ],
                loading: false,
                managementSearch: '',
                modal: false,
                payModal: {
                    billInformation: '',
                    billNum: '213624925721571',
                    endDate: '2016-12-22',
                    startDate: '2016-12-22',
                },
                payValidate: {
                    startDate: [
                        {
                            message: '日期不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
                promotionColumns: [
                    {
                        align: 'center',
                        key: 'name',
                        title: '促销名称',
                    },
                    {
                        align: 'center',
                        key: 'fee',
                        title: '促销费用',
                    },
                    {
                        align: 'center',
                        key: 'data',
                        title: '申请日期',
                    },
                ],
                promotionData: [
                    {
                        data: '2016-12-21 ',
                        fee: '66.00',
                        name: '买二赠一',
                    },
                ],
                refundColumns: [
                    {
                        align: 'center',
                        key: 'number',
                        title: '退单编号',
                    },
                    {
                        align: 'center',
                        key: 'orderNum',
                        title: '订单编号',
                    },
                    {
                        align: 'center',
                        key: 'orderMoney',
                        title: '退款金额',
                    },
                    {
                        align: 'center',
                        key: 'commission',
                        title: '退还佣金',
                    },
                    {
                        align: 'center',
                        key: 'redEnvelopes',
                        title: '退还红包',
                    },
                    {
                        align: 'center',
                        key: 'type',
                        title: '类型',
                    },
                    {
                        align: 'center',
                        key: 'dealData',
                        title: '退单时间',
                    },
                ],
                refundData: [
                    {
                        commission: '37.00',
                        dealData: '2017-2-24',
                        number: '01',
                        orderMoney: '999.00',
                        orderNum: '324235346',
                        redEnvelopes: '0.00',
                        type: '端午节优惠活动',
                    },
                    {
                        commission: '37.00',
                        dealData: '2017-2-24',
                        number: '01',
                        orderMoney: '999.00',
                        orderNum: '324235346',
                        redEnvelopes: '0.00',
                        type: '端午节优惠活动',
                    },
                    {
                        commission: '37.00',
                        dealData: '2017-2-24',
                        number: '01',
                        orderMoney: '999.00',
                        orderNum: '324235346',
                        redEnvelopes: '0.00',
                        type: '端午节优惠活动',
                    },
                ],
                refundDataList: [
                    {
                        label: '店铺名称',
                        value: '订单编号',
                    },
                    {
                        label: '商品名称',
                        value: '商品名称',
                    },
                    {
                        label: '商品分类',
                        value: '商品分类',
                    },
                ],
                refundSearchData: '',
                searchList: [
                    {
                        label: '店铺名称',
                        value: '订单编号',
                    },
                    {
                        label: '商品名称',
                        value: '商品名称',
                    },
                    {
                        label: '商品分类',
                        value: '商品分类',
                    },
                ],
                self: this,
                settlementStatus: 1,
                typeColumns: [
                    {
                        align: 'center',
                        key: 'number',
                        title: '订单编号',
                    },
                    {
                        align: 'center',
                        key: 'orderData',
                        title: '下单时间',
                    },
                    {
                        align: 'center',
                        key: 'dealData',
                        title: '成交时间',
                    },
                    {
                        align: 'center',
                        key: 'orderMoney',
                        title: '订单金额',
                    },
                    {
                        align: 'center',
                        key: 'freight',
                        title: '运费',
                    },
                    {
                        align: 'center',
                        key: 'commission',
                        title: '佣金金额',
                    },
                    {
                        align: 'center',
                        key: 'redEnvelopes',
                        title: '平台红包',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button size="small" type="ghost" @click.native="look(${index})">查看</i-button>`;
                        },
                        title: '操作',
                    },
                ],
                typeData: [
                    {
                        commission: '37.00',
                        dealData: '2017-2-24',
                        freight: '12.00',
                        redEnvelopes: '0.00',
                        number: '01',
                        orderMoney: '999.00',
                        orderData: '2017-2-21',
                    },
                    {
                        commission: '37.00',
                        dealData: '2017-2-24',
                        freight: '12.00',
                        redEnvelopes: '0.00',
                        number: '01',
                        orderMoney: '999.00',
                        orderData: '2017-2-21',
                    },
                    {
                        commission: '37.00',
                        dealData: '2017-2-24',
                        freight: '12.00',
                        redEnvelopes: '0.00',
                        number: '01',
                        orderMoney: '999.00',
                        orderData: '2017-2-21',
                    },
                    {
                        commission: '37.00',
                        dealData: '2017-2-24',
                        freight: '12.00',
                        redEnvelopes: '0.00',
                        number: '01',
                        orderMoney: '999.00',
                        orderData: '2017-2-21',
                    },
                ],
            };
        },
        methods: {
            exportData() {
                this.$refs.orderTable.exportCsv({
                    filename: '订单列表数据',
                });
            },
            exportRefundData() {
                this.$refs.refundTable.exportCsv({
                    filename: '退单列表数据',
                });
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            pay() {
                this.modal = true;
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.payModal.validate(valid => {
                    if (valid) {
                        window.console.log(valid);
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="statistics-settlement-look">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>订单结算-查看</span>
            </div>
            <card :bordered="false">
                <i-form ref="billDetail" :model="billDetail" :rules="ruleValidate" :label-width="200">
                    <div class="bill-information">
                        <h5>本期结算</h5>
                        <div class="bill-content">
                            <row>
                                <i-col span="18">
                                    <form-item label="结算单号">
                                        {{billDetail.settlementNum}}
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="18">
                                    <form-item label="出账时间">
                                        ￥{{billDetail.accountData}}
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="20">
                                    <form-item label="本期应收">
                                        {{billDetail.payMoney}}
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="18">
                                    <form-item label="结算状态">
                                        {{billDetail.settlementStatus}}
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="18">
                                    <form-item label="">
                                        <i-button type="primary" v-if="settlementStatus === 0">审核</i-button>
                                        <i-button type="primary" v-if="settlementStatus === 1"
                                                  @click.native="pay">付款完成</i-button>
                                        <i-button type="primary" v-if="settlementStatus === 2">打印</i-button>
                                    </form-item>
                                </i-col>
                            </row>
                        </div>
                    </div>
                </i-form>
                <tabs type="card">
                    <tab-pane label="订单列表">
                        <div class="album-action">
                            <i-button class="add-data" type="ghost" @click.native="exportData">导出数据</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            <div class="goods-body-header-right">
                                <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                    <i-select v-model="managementSearch" slot="prepend" style="width: 150px;">
                                        <i-option v-for="item in searchList"
                                                  :value="item.value">{{ item.label }}</i-option>
                                    </i-select>
                                    <i-button slot="append" type="primary">搜索</i-button>
                                </i-input>
                            </div>
                        </div>
                        <i-table highlight-row :columns="typeColumns" :context="self"
                                 :data="typeData" ref="orderTable"></i-table>
                    </tab-pane>
                    <tab-pane label="退款订单">
                        <div class="album-action">
                            <i-button class="add-data" type="ghost" @click.native="exportRefundData">导出数据</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            <div class="goods-body-header-right">
                                <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                    <i-select v-model="refundSearchData" slot="prepend" style="width: 150px;">
                                        <i-option v-for="item in refundDataList"
                                                  :value="item.value">{{ item.label }}</i-option>
                                    </i-select>
                                    <i-button slot="append" type="primary">搜索</i-button>
                                </i-input>
                            </div>
                        </div>
                        <i-table highlight-row :columns="refundColumns" :context="self"
                                 :data="refundData" ref="refundTable"></i-table>
                    </tab-pane>
                    <tab-pane label="促销费用">
                        <i-table highlight-row
                                 :columns="promotionColumns"
                                 :context="self"
                                 :data="promotionData"
                                 class="margin-table"></i-table>
                    </tab-pane>
                    <tab-pane label="分销佣金">
                        <i-table highlight-row
                                 :columns="commissionColumns"
                                 :context="self"
                                 :data="commissionData"
                                 class="margin-table"></i-table>
                    </tab-pane>
                </tabs>
            </card>
        </div>
    </div>
</template>