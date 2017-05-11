<script>
    import injection from '../helpers/injection';

    export default {
        data() {
            return {
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
                shopColumns: [
                    {
                        title: '日期',
                        key: 'data',
                    },
                    {
                        title: '上月',
                        key: 'lastMonth',
                    },
                    {
                        title: '本月',
                        key: 'month',
                    },
                    {
                        title: '同比',
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
                shopData: [
                    {
                        data: 1,
                        lastMonth: 0,
                        month: 2,
                        rate: 2,
                    },
                    {
                        data: 1,
                        lastMonth: 0,
                        month: 2,
                        rate: 2,
                    },
                    {
                        data: 1,
                        lastMonth: 0,
                        month: 2,
                        rate: 2,
                    },
                    {
                        data: 1,
                        lastMonth: 0,
                        month: 2,
                        rate: 2,
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
                self: this,
                loading: false,
            };
        },
        methods: {
            exportData() {
                this.$refs.shopList.exportCsv({
                    filename: '新增店铺数据',
                });
            },
            exportSalesData() {
                this.$refs.salesList.exportCsv({
                    filename: '销售统计数据',
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
        <div class="statistics-aftersales">
            <tabs value="name1">
                <tab-pane label="退款统计" name="name1">
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