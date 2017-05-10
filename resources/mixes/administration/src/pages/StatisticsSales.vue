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
                isPriceArea: false,
                provinceColumns: [
                    {
                        title: '序号',
                        key: 'num',
                    },
                    {
                        title: '省份',
                        key: 'province',
                    },
                    {
                        title: '该地区店铺数量',
                        key: 'shopNum',
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
                provinceData: [
                    {
                        province: '陕西',
                        num: 4,
                        shopNum: 222,
                    },
                    {
                        province: '陕西',
                        num: 4,
                        shopNum: 222,
                    },
                    {
                        province: '陕西',
                        num: 4,
                        shopNum: 222,
                    },
                    {
                        province: '陕西',
                        num: 4,
                        shopNum: 222,
                    },
                ],
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
                sortColumns: [
                    {
                        title: '序号',
                        key: 'num',
                    },
                    {
                        title: '店铺名称',
                        key: 'shopName',
                    },
                    {
                        title: '下单金额',
                        key: 'amount',
                    },
                    {
                        title: '升降幅度',
                        key: 'rate',
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
                sortData: [
                    {
                        num: 333,
                        shopName: 4,
                        amount: 22,
                        rate: '',
                    },
                    {
                        num: 333,
                        shopName: 4,
                        amount: 22,
                        rate: '',
                    },
                    {
                        num: 333,
                        shopName: 4,
                        amount: 22,
                        rate: '',
                    },
                    {
                        num: 333,
                        shopName: 4,
                        amount: 22,
                        rate: '',
                    },
                ],
                salesColumns: [
                    {
                        title: '店铺名称',
                        key: 'shopName',
                    },
                    {
                        title: '下单会员数',
                        key: 'memberNum',
                    },
                    {
                        title: '下单量',
                        key: 'amount',
                    },
                    {
                        title: '下单金额（元）',
                        key: 'money',
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
                salesData: [
                    {
                        shopName: 'shop',
                        memberNum: 4,
                        money: 222,
                        amount: 20,
                    },
                    {
                        shopName: 'shop',
                        memberNum: 4,
                        money: 222,
                        amount: 20,
                    },
                    {
                        shopName: 'shop',
                        memberNum: 4,
                        money: 222,
                        amount: 20,
                    },
                    {
                        shopName: 'shop',
                        memberNum: 4,
                        money: 222,
                        amount: 20,
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
            exportProvinceData() {
                this.$refs.provinceList.exportCsv({
                    filename: '地区分析数据',
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
                        <div class="analysis-content">
                            <div class="order-money-content">
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
                                <div style="height: 350px">

                                </div>
                                <i-button type="ghost" class="export-btn" @click="exportData">导出数据</i-button>
                                <i-table :columns="shopColumns" :context="self"
                                         :data="shopData" ref="shopList"></i-table>
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