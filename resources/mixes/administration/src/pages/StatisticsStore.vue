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
                isPriceArea: false,
                loading: false,
                newAddShop: {
                    legend: {
                        bottom: 'auto',
                        data: ['昨天', '今天'],
                    },
                    series: [
                        {
                            data: [120, 132, 220, 250, 90, 230, 210],
                            name: '今天',
                            stack: '下单金额',
                            type: 'line',
                        },
                        {
                            data: [220, 182, 191, 234, 290, 330, 310],
                            name: '昨天',
                            stack: '下单金额',
                            type: 'line',
                        },
                    ],
                    tooltip: {
                        trigger: 'axis',
                    },
                    xAxis: {
                        boundaryGap: false,
                        data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
                        type: 'category',
                    },
                    yAxis: {
                        type: 'value',
                    },
                },
                provinceColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'province',
                        title: '省份',
                    },
                    {
                        key: 'shopNum',
                        title: '该地区店铺数量',
                    },
                    {
                        key: 'action',
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                provinceData: [
                    {
                        num: 4,
                        province: '陕西',
                        shopNum: 222,
                    },
                    {
                        num: 4,
                        province: '陕西',
                        shopNum: 222,
                    },
                    {
                        num: 4,
                        province: '陕西',
                        shopNum: 222,
                    },
                    {
                        num: 4,
                        province: '陕西',
                        shopNum: 222,
                    },
                ],
                shopColumns: [
                    {
                        key: 'data',
                        title: '日期',
                    },
                    {
                        key: 'lastMonth',
                        title: '上月',
                    },
                    {
                        key: 'month',
                        title: '本月',
                    },
                    {
                        key: 'rate',
                        title: '同比',
                    },
                    {
                        key: 'action',
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
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
                sortHotColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'amount',
                        title: '下单量',
                    },
                    {
                        key: 'rate',
                        title: '升降幅度',
                    },
                    {
                        key: 'action',
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                sortHotData: [
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                ],
                sortMoneyHotColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'amount',
                        title: '下单量',
                    },
                    {
                        key: 'rate',
                        title: '升降幅度',
                    },
                    {
                        key: 'action',
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                sortMoneyHotData: [
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                ],
                sortMoneyTopColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'amount',
                        title: '下单量',
                    },
                    {
                        key: 'rate',
                        title: '升降幅度',
                    },
                    {
                        key: 'action',
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                sortMoneyTopData: [
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                ],
                sortTopColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'amount',
                        title: '下单量',
                    },
                    {
                        key: 'rate',
                        title: '升降幅度',
                    },
                    {
                        key: 'action',
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                sortTopData: [
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                    {
                        amount: 22,
                        num: 333,
                        shopName: 4,
                        rate: '',
                    },
                ],
                salesColumns: [
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'memberNum',
                        title: '下单会员数',
                    },
                    {
                        key: 'amount',
                        title: '下单量',
                    },
                    {
                        key: 'money',
                        title: '下单金额（元）',
                    },
                    {
                        key: 'action',
                        title: '操作',
                        width: 120,
                        render() {
                            return '<i-button type="ghost" size="small">查看</i-button>';
                        },
                    },
                ],
                salesData: [
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        shopName: 'shop',
                    },
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        shopName: 'shop',
                    },
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        shopName: 'shop',
                    },
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        shopName: 'shop',
                    },
                ],
                self: this,
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
            exportSalesData() {
                this.$refs.salesList.exportCsv({
                    filename: '销售统计数据',
                });
            },
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
                            <div class="order-money-content search-select-item">
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="newAddShop" @ready="onReady" @click="onClick"></i-echarts>
                            </div>
                            <i-button type="ghost" class="export-btn" @click="exportData">导出数据</i-button>
                            <i-table :columns="shopColumns" :context="self"
                                     :data="shopData" ref="shopList"></i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
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
                                            <i-table :columns="sortTopColumns" :context="self"
                                                     :data="sortTopData" ref="sortTopList"></i-table>
                                            <div class="page">
                                                <page :total="100" show-elevator></page>
                                            </div>
                                        </div>
                                        <div>
                                            <p>店铺热卖飙升榜</p>
                                            <i-table :columns="sortHotColumns" :context="self"
                                                     :data="sortHotData" ref="sortHotList"></i-table>
                                            <div class="page">
                                                <page :total="100" show-elevator></page>
                                            </div>
                                        </div>
                                    </div>
                                </tab-pane>
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
                                        <div class="order-module-content">
                                            <p>店铺热卖TOP榜</p>
                                            <i-table :columns="sortMoneyTopColumns" :context="self"
                                                     :data="sortMoneyTopData" ref="sortList"></i-table>
                                            <div class="page">
                                                <page :total="100" show-elevator></page>
                                            </div>
                                        </div>
                                        <div>
                                            <p>店铺热卖飙升榜</p>
                                            <i-table :columns="sortMoneyHotColumns" :context="self"
                                                     :data="sortMoneyHotData" ref="sortList"></i-table>
                                            <div class="page">
                                                <page :total="100" show-elevator></page>
                                            </div>
                                        </div>
                                    </div>
                                </tab-pane>
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
                            <p>列表展示了店铺在搜索时间段内的有效订单总金额、订单量和下单会员数，并可以点击列表上方的"导出数据"
                                将列表数据导出为Excel文件</p>
                            <p>默认按照"下单会员数"降序排列</p>
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
                                <i-button type="ghost" class="export-btn export-sales-btn"
                                          @click="exportSalesData">导出数据</i-button>
                                <i-table :columns="salesColumns" :context="self"
                                         :data="salesData" ref="salesList"></i-table>
                                <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="地区分析" name="name4">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>列表展示了时间段内所有会员有效订单的订单数量、下单商品数量和订单总金额统计数据，
                                并可以点击列表上方的"导出数据"，将列表数据导出为Excel文件</p>
                        </div>
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <ul>
                                        <li>
                                            <i-select v-model="model2" style="width:124px" placeholder="店铺分类">
                                                <i-option v-for="item in shopsList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </li>
                                        <li class="province-data">
                                            <date-picker type="date" placeholder="截止时间"></date-picker>
                                        </li>
                                    </ul>
                                </div>
                                <div style="height: 350px">

                                </div>
                                <i-button type="ghost" class="export-btn" @click="exportProvinceData">导出数据</i-button>
                                <i-table :columns="provinceColumns"
                                         :context="self"
                                         :data="provinceData"
                                         ref="provinceList">
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