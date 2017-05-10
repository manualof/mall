<script>
    import iEcharts from 'vue-echarts-v3';
    import injection from '../helpers/injection';

    export default {
        components: {
            iEcharts,
        },
        data() {
            return {
                applicationWord: '',
                shopsColumns: [
                    {
                        title: '店铺名称',
                        key: 'shopName',
                    },
                    {
                        title: '订单金额（元）',
                        key: 'orderMoney',
                    },
                    {
                        title: '退单金额（元）',
                        key: 'refundMoney',
                    },
                    {
                        title: '结算金额（元）',
                        key: 'allMoney',
                    },
                    {
                        title: '店铺费用（元）',
                        key: 'shopMoney',
                    },
                ],
                shopsData: [
                    {
                        shopName: '艾派数码',
                        orderMoney: '99.00',
                        refundMoney: '33.00',
                        allMoney: '22.00',
                        shopMoney: '100.00',
                    },
                    {
                        shopName: '艾派数码',
                        orderMoney: '99.00',
                        refundMoney: '33.00',
                        allMoney: '22.00',
                        shopMoney: '100.00',
                    },
                    {
                        shopName: '艾派数码',
                        orderMoney: '99.00',
                        refundMoney: '33.00',
                        allMoney: '22.00',
                        shopMoney: '100.00',
                    },
                    {
                        shopName: '艾派数码',
                        orderMoney: '99.00',
                        refundMoney: '33.00',
                        allMoney: '22.00',
                        shopMoney: '100.00',
                    },
                ],
                orderColumns: [
                    {
                        title: '订单编号',
                        key: 'orderNum',
                    },
                    {
                        title: '买家名称',
                        key: 'buyer',
                    },
                    {
                        title: '店铺名称',
                        key: 'shopName',
                    },
                    {
                        title: '下单时间',
                        key: 'orderTime',
                    },
                    {
                        title: '订单总额（元）',
                        key: 'account',
                    },
                    {
                        title: '订单状态',
                        key: 'status',
                    },
                ],
                orderData: [
                    {
                        orderNum: 111111111,
                        buyer: 111,
                        shopName: '店铺111',
                        orderTime: '2017-2-2',
                        account: '99.00',
                        status: '已完成',
                    },
                    {
                        orderNum: 111111111,
                        buyer: 111,
                        shopName: '店铺111',
                        orderTime: '2017-2-2',
                        account: '99.00',
                        status: '已完成',
                    },
                    {
                        orderNum: 111111111,
                        buyer: 111,
                        shopName: '店铺111',
                        orderTime: '2017-2-2',
                        account: '99.00',
                        status: '已完成',
                    },
                    {
                        orderNum: 111111111,
                        buyer: 111,
                        shopName: '店铺111',
                        orderTime: '2017-2-2',
                        account: '99.00',
                        status: '已完成',
                    },
                ],
                goodsList: [
                    {
                        value: '1',
                        label: '商品1',
                    },
                    {
                        value: '2',
                        label: '商品2',
                    },
                ],
                shopsList: [
                    {
                        value: '1',
                        label: '商品1',
                    },
                    {
                        value: '2',
                        label: '商品2',
                    },
                ],
                timeList: [
                    {
                        value: '1',
                        label: '按照月统计',
                    },
                    {
                        value: '2',
                        label: '按照周统计',
                    },
                ],
                informationList: [
                    {
                        title: '收款金额',
                        price: '4444',
                    },
                    {
                        title: '退款金额',
                        price: '4444',
                    },
                    {
                        title: '实收金额',
                        price: '4444',
                    },
                    {
                        title: '店铺费用',
                        price: '4444',
                    },
                    {
                        title: '总收入',
                        price: '4444',
                    },
                ],
                orderStatistics: [
                    {
                        title: '总销售额',
                        price: '4444',
                    },
                    {
                        title: '总订单量',
                        price: '4444',
                    },
                ],
                self: this,
                loading: false,
            };
        },
        methods: {
            exportShopsData() {
                this.$refs.shopsList.exportCsv({
                    filename: '收入统计数据',
                });
            },
            exportOrderData() {
                this.$refs.orderList.exportCsv({
                    filename: '订单统计数据',
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
        <div class="statistics-sales">
            <tabs value="name1">
                <tab-pane label="收入统计" name="name1">
                    <card :bordered="false">
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="information-content">
                                    <div v-for="item in informationList">
                                        <span class="title">{{ item.title }}</span>
                                        <span class="price"> <i>{{ item.price }}</i> 元</span>
                                    </div>
                                </div>
                                <div class="select-content">
                                    <i-button type="ghost" class="export-btn export-sales-btn"
                                              @click="exportShopsData">导出数据</i-button>
                                    <ul>
                                        <li>日期筛选</li>
                                        <li>
                                            <date-picker type="date" placeholder="起始时间"></date-picker>
                                        </li>
                                        <li>
                                            <date-picker type="date" placeholder="截止时间"></date-picker>
                                        </li>
                                        <li class="store-body-header-right">
                                            <i-input v-model="applicationWord" placeholder="请输入关键词进行搜索">
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </li>
                                    </ul>
                                </div>
                                <i-table :columns="shopsColumns" :context="self"
                                         :data="shopsData" ref="shopsList"></i-table>
                                <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="订单统计" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>统计图展示了符合搜索条件的有效订单中的下单总金额和下单数量在时间段内的走势情况及与
                                前一个时间段的趋势对比</p>
                            <p>统计表显示了符合搜索条件的全部有效订单记录并可以点击“导出数据”将订单记录导出为Excel文件</p>
                        </div>
                        <div class="information-content order-information-content">
                            <div v-for="item in orderStatistics">
                                <span class="title">{{ item.title }}</span>
                                <span class="price"> <i>{{ item.price }}</i> 元</span>
                            </div>
                        </div>
                        <div class="analysis-content">
                            <tabs type="card">
                                <tab-pane label="下单量">
                                    <div class="order-money-content">
                                        <div class="select-order-content">
                                            <div class="select-content">
                                                <ul>
                                                    <li>
                                                        商品分类
                                                        <i-select v-model="model2" style="width:124px">
                                                            <i-option v-for="item in goodsList" :value="item.value"
                                                                      :key="item">{{ item.label }}</i-option>
                                                        </i-select>
                                                    </li>
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
                                            <div style="height: 250px"></div>
                                        </div>
                                        <i-button type="ghost" class="export-btn "
                                                  @click="exportOrderData">导出数据</i-button>
                                        <i-table :columns="orderColumns" :context="self"
                                                 :data="orderData" ref="orderList"></i-table>
                                        <div class="page">
                                            <page :total="100" show-elevator></page>
                                        </div>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单金额">标签二的内容</tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>