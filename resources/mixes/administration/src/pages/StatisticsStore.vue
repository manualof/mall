<script>
    import iEcharts from 'vue-echarts-v3';
    import injection from '../helpers/injection';

    export default {
        components: {
            iEcharts,
        },
        data() {
            return {
                isPriceArea: false,
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
                provinceColumns: [
                    {
                        title: '省份',
                        key: 'province',
                    },
                    {
                        title: '下单会员数',
                        key: 'memberNum',
                    },
                    {
                        title: '下单金额（元）',
                        key: 'money',
                    },
                    {
                        title: '下单量',
                        key: 'amount',
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
                        memberNum: 4,
                        money: 222,
                        amount: 20,
                    },
                    {
                        province: '陕西',
                        memberNum: 4,
                        money: 222,
                        amount: 20,
                    },
                    {
                        province: '陕西',
                        memberNum: 4,
                        money: 222,
                        amount: 20,
                    },
                    {
                        province: '陕西',
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
        <div class="statistics-store">
            <tabs value="name1">
                <tab-pane label="新增店铺" name="name1">
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
                <tab-pane label="热卖排行" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>"店铺热卖TOP榜"展示了时间段内店铺有效订单的订单数量和订单总金额高的前15名店铺</p>
                            <p>"店铺热卖飙升榜"展示了时间段内店铺有效订单的订单数量和订单总金额增长率高的前15名店铺</p>
                        </div>
                        <div class="analysis-content">
                            <tabs type="card">
                                <tab-pane label="下单量">
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
                                        <div class="order-module-content">
                                            <p>店铺热卖TOP榜</p>
                                            <i-table :columns="sortColumns" :context="self"
                                                     :data="sortData" ref="sortList"></i-table>
                                            <div class="page">
                                                <page :total="100" show-elevator></page>
                                            </div>
                                        </div>
                                        <div>
                                            <p>店铺热卖飙升榜</p>
                                            <i-table :columns="sortColumns" :context="self"
                                                     :data="sortData" ref="sortList"></i-table>
                                            <div class="page">
                                                <page :total="100" show-elevator></page>
                                            </div>
                                        </div>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单金额">标签二的内容</tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="销售统计" name="name3">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>点击“设置价格区间”进入设置价格区间页面，下方统计图将根据您设置的价格区间进行统计</p>
                            <p>统计图展示符合搜索条件的有效订单中商品的单价所在价格区间中的总销售额和总下单商品数量走势</p>
                        </div>
                        <div class="analysis-content">
                            <tabs type="card">
                                <tab-pane label="下单金额">
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
                                        <i-button type="ghost" class="export-btn" @click="exportProvinceData">导出数据</i-button>
                                        <i-table :columns="provinceColumns" :context="self"
                                                 :data="provinceData" ref="provinceList"></i-table>
                                        <div class="page">
                                            <page :total="100" show-elevator></page>
                                        </div>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单商品数">标签二的内容</tab-pane>
                                <tab-pane label="下单量">标签三的内容</tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="地区分析" name="name4">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>点击“设置价格区间”进入设置价格区间页面，下方统计图将根据您设置的价格区间进行统计</p>
                            <p>统计图展示符合搜索条件的有效订单中商品的单价所在价格区间中的总销售额和总下单商品数量走势</p>
                        </div>
                        <div class="analysis-content">
                            <tabs type="card">
                                <tab-pane label="下单金额">
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
                                        <i-button type="ghost" class="export-btn" @click="exportProvinceData">导出数据</i-button>
                                        <i-table :columns="provinceColumns" :context="self"
                                                 :data="provinceData" ref="provinceList"></i-table>
                                        <div class="page">
                                            <page :total="100" show-elevator></page>
                                        </div>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单商品数">标签二的内容</tab-pane>
                                <tab-pane label="下单量">标签三的内容</tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>