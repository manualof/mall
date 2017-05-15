<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            return {
                allOrderData: [
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                ],
                managementColumns: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'orderID',
                        title: '订单编号',
                        width: 190,
                    },
                    {
                        align: 'center',
                        key: 'orderAmount',
                        title: '订单金额',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'applyReason',
                        title: '申请原因',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'applyImg',
                        title: '申请图片',
                        width: 170,
                    },
                    {
                        align: 'center',
                        key: 'applyTime',
                        title: '申请时间',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'involvingGoods',
                        title: '涉及商品',
                        width: 170,
                    },
                    {
                        align: 'center',
                        key: 'orderId',
                        title: '商品ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'orderNumber',
                        title: '订单编号',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'processingTime',
                        title: '商家处理时间',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'handlingNotes',
                        title: '商家处理备注',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'merchantID',
                        title: '商家ID',
                        width: 200,
                    },
                    {
                        align: 'left',
                        key: 'buyerID',
                        title: '买家ID',
                        width: 200,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        title: '操作',
                        width: 140,
                        render() {
                            return '<i-button @click.native="refundHandel" type="ghost" size="small">处理</i-button>';
                        },
                    },
                ],
                pendingData: [
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                    {
                        applyReason: '2017-03-21 16:45:45',
                        applyImg: '899（含运费10.00）',
                        applyTime: '交易完成',
                        buyerID: '455646544',
                        handlingNotes: 'ddqwd',
                        involvingGoods: '45654646',
                        merchantID: '4565464',
                        orderID: '65454654546',
                        orderAmount: '移动端',
                        orderId: '钻石店铺',
                        orderNumber: '5464546',
                        processingTime: '2017-03-21 16:45:45',
                    },
                ],
                reasonColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'sort',
                        title: '排序',
                        width: 150,
                    },
                    {
                        align: 'left',
                        key: 'reason',
                        title: '原因',
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        title: '操作',
                        width: 140,
                        render() {
                            return '<i-button type="ghost" size="small" @click.native="reasonEdit">编辑</i-button>';
                        },
                    },
                ],
                reasonData: [
                    {
                        reason: '不能按时发货',
                        sort: 1,
                    },
                ],
                searchCategory: '',
                searchWord: '',
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
            };
        },
        methods: {
            exportData(table) {
                if (table === 1) {
                    this.$refs.pendingTable.exportCsv({
                        filename: '待处理退款数据',
                    });
                } else if (table === 2) {
                    this.$refs.allOrderTable.exportCsv({
                        filename: '所有退款数据',
                    });
                }
            },
            refundHandel() {
                const self = this;
                self.$router.push({
                    path: 'refund/process',
                });
            },
            reasonEdit() {
                const self = this;
                self.$router.push({
                    path: 'refund/reedit',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="store">
            <tabs value="name1">
                <tab-pane label="待处理" name="name1">
                    <card>
                        <div class="prompt-box">
                            <h6>提示</h6>
                            <p>卖家提交申请，商家同意并经平台确认后，退款金额以买家付款方式返回给买家</p>
                        </div>
                        <div class="store-body">
                            <div class="store-body-header">
                                <i-button class="export-btn" @click="exportData(1)" type="ghost">导出数据</i-button>
                                <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                                <div class="store-body-header-right">
                                    <i-input v-model="searchWord" placeholder="请输入关键词进行搜索">
                                        <i-select v-model="searchCategory" slot="prepend" style="width: 100px">
                                            <i-option v-for="item in searchList" :value="item.value"
                                                      :key="item">{{ item.label }}</i-option>
                                        </i-select>
                                        <i-button slot="append" type="primary">搜索</i-button>
                                    </i-input>
                                </div>
                            </div>
                            <i-table highlight-row ref="pendingTable" class="shop-table"
                                     :columns="managementColumns" :context="self" :data="pendingData"></i-table>
                        </div>
                        <div class="page">
                            <page :total="100" show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="所有记录" name="name2">
                    <card>
                        <div class="prompt-box">
                            <h6>提示</h6>
                            <p>卖家提交申请，商家同意并经平台确认后，退款金额以买家付款方式返回给买家</p>
                        </div>
                        <div class="store-body">
                            <div class="store-body-header">
                                <i-button class="export-btn" @click="exportData(2)" type="ghost">导出数据</i-button>
                                <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                                <div class="store-body-header-right">
                                    <i-input v-model="searchWord" placeholder="请输入关键词进行搜索">
                                        <i-select v-model="searchCategory" slot="prepend" style="width: 100px">
                                            <i-option v-for="item in searchList"
                                                      :value="item.value"
                                                      :key="item">{{ item.label }}</i-option>
                                        </i-select>
                                        <i-button slot="append" type="primary">搜索</i-button>
                                    </i-input>
                                </div>
                            </div>
                            <i-table class="shop-table"
                                     :columns="managementColumns"
                                     :data="allOrderData"
                                     highlight-row ref="allOrderTable" ></i-table>
                        </div>
                        <div class="page">
                            <page :total="100" show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="原因设定" name="name3">
                    <card>
                        <div class="prompt-box">
                            <h6>提示</h6>
                            <p>系统初始化的原因不能删除</p>
                            <p>排序显示规则为排序小的在前</p>
                        </div>
                        <div class="store-body">
                            <div class="store-body-header">
                                <div class="store-body-header-right">
                                    <i-input v-model="searchWord" placeholder="请输入关键词进行搜索">
                                        <i-select v-model="searchCategory" slot="prepend" style="width: 100px">
                                            <i-option v-for="item in searchList" :value="item.value"
                                                      :key="item">{{ item.label }}</i-option>
                                        </i-select>
                                        <i-button slot="append" type="primary">搜索</i-button>
                                    </i-input>
                                </div>
                            </div>
                            <i-table highlight-row class="shop-table" :columns="reasonColumns"
                                     :context="self" :data="reasonData" ></i-table>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>