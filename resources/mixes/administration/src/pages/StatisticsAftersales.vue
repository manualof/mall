<script>
    import injection from '../helpers/injection';

    export default {
        data() {
            return {
                refundColumns: [
                    {
                        title: '订单编号',
                        key: 'orderNum',
                    },
                    {
                        title: '退款编号',
                        key: 'refundNum',
                    },
                    {
                        title: '店铺名称',
                        key: 'shopName',
                    },
                    {
                        title: '商品名称',
                        key: 'goodName',
                    },
                    {
                        title: '申请时间',
                        key: 'time',
                    },
                    {
                        title: '退款金额',
                        key: 'refundMoney',
                    },
                    {
                        title: '操作',
                        key: 'action',
                        width: 120,
                        render() {
                            return '<i-button type="ghost" size="small">查看</i-button>';
                        },
                    },
                ],
                refundData: [
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                ],
                goodsColumns: [
                    {
                        title: '订单编号',
                        key: 'orderNum',
                    },
                    {
                        title: '退款编号',
                        key: 'refundNum',
                    },
                    {
                        title: '店铺名称',
                        key: 'shopName',
                    },
                    {
                        title: '商品名称',
                        key: 'goodName',
                    },
                    {
                        title: '申请时间',
                        key: 'time',
                    },
                    {
                        title: '退款金额',
                        key: 'refundMoney',
                    },
                    {
                        title: '操作',
                        key: 'action',
                        width: 120,
                        render() {
                            return '<i-button type="ghost" size="small">查看</i-button>';
                        },
                    },
                ],
                goodsData: [
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                    {
                        orderNum: '36589554555',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        goodName: '用户套装买二送一',
                        time: '2017-04-01',
                        refundMoney: '99.00',
                    },
                ],
                goodsList: [
                    {
                        label: '商品1',
                        value: '1',
                    },
                    {
                        label: '商品2',
                        value: '2',
                    },
                ],
                shopsList: [
                    {
                        label: '商品1',
                        value: '1',
                    },
                    {
                        label: '商品2',
                        value: '2',
                    },
                ],
                timeList: [
                    {
                        label: '按照月统计',
                        value: '1',
                    },
                    {
                        label: '按照周统计',
                        value: '2',
                    },
                ],
                self: this,
                loading: false,
            };
        },
        methods: {
            exportData() {
                this.$refs.refundList.exportCsv({
                    filename: '新增店铺数据',
                });
            },
            exportGoodsData() {
                this.$refs.goodsList.exportCsv({
                    filename: '退货统计数据',
                });
            },
        },
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="statistics-aftersales">
            <tabs value="name1">
                <tab-pane label="退款统计" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>统计图展现了时间段内退款金额的走势情况</p>
                            <p>统计图列表展现了时间段内退款记录的详细信息，并可以点击列表上方的"导出数据"
                                将列表数据导出为Excel文件</p>
                        </div>
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <ul>
                                        <li>
                                            时间周期
                                            <i-select v-model="model2" style="width:124px">
                                                <i-option v-for="item in timeList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </li>
                                        <li>
                                            <date-picker type="date" placeholder="选择日期"></date-picker>
                                        </li>
                                    </ul>
                                </div>
                                <div style="height: 350px">

                                </div>
                                <i-button type="ghost" class="export-btn" @click="exportData">导出数据</i-button>
                                <i-table :columns="refundColumns" :context="self"
                                         :data="refundData" ref="refundList"></i-table>
                                <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="退货统计" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>统计图展示了时间段内新增会员数的走势和与前一时间段的对比</p>
                            <p>统计表展示了时间段内新增会员数值和与前一时间段的同比数值，点击每条记录后的"查看"，
                                了解新增会员的详细信息</p>
                            <p>点击列表上方的“导出数据”，将列表数据导出为Excel文件</p>
                        </div>
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <ul>
                                        <li>
                                            时间周期
                                            <i-select v-model="model2" style="width:124px">
                                                <i-option v-for="item in timeList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </li>
                                        <li>
                                            <date-picker type="date" placeholder="选择日期"></date-picker>
                                        </li>
                                    </ul>
                                </div>
                                <div style="height: 350px">

                                </div>
                                <i-button type="ghost" class="export-btn" @click="exportGoodsData">导出数据</i-button>
                                <i-table :columns="goodsColumns" :context="self"
                                         :data="goodsData" ref="goodsList"></i-table>
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