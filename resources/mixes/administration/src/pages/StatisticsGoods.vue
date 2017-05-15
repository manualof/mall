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
                loading: false,
                orderColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'goodName',
                        title: '商品名称',
                    },
                    {
                        key: 'amount',
                        title: '下单金额(元)',
                    },
                ],
                orderData: [
                    {
                        num: 333,
                        goodName: 4,
                        amount: 22,
                    },
                    {
                        num: 333,
                        goodName: 4,
                        amount: 22,
                    },
                    {
                        num: 333,
                        goodName: 4,
                        amount: 22,
                    },
                    {
                        num: 333,
                        goodName: 4,
                        amount: 22,
                    },
                ],
                salesColumns: [
                    {
                        key: 'goodName',
                        title: '商品名称',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'spu',
                        title: 'SPU',
                    },
                    {
                        key: 'amountNum',
                        title: '下单商品件数',
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
                        amountNum: 222,
                        goodName: '洗护套装买二送一',
                        money: 444,
                        shopName: 'shop',
                        spu: 4,
                    },
                    {
                        amount: 20,
                        amountNum: 222,
                        goodName: '洗护套装买二送一',
                        money: 444,
                        shopName: 'shop',
                        spu: 4,
                    },
                    {
                        amount: 20,
                        amountNum: 222,
                        goodName: '洗护套装买二送一',
                        money: 444,
                        shopName: 'shop',
                        spu: 4,
                    },
                    {
                        amount: 20,
                        amountNum: 222,
                        goodName: '洗护套装买二送一',
                        money: 444,
                        shopName: 'shop',
                        spu: 4,
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
                self: this,
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
            exportSalesData() {
                this.$refs.salesList.exportCsv({
                    filename: '商品销售明细数据',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="statistics-goods">
            <tabs value="name1">
                <tab-pane label="价格销量" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>点击"设置价格区间"进入设置价格区间页面，下方统计图将根据您设置的价格区间进行统计</p>
                            <p>统计图展示了符合搜索条件的有效订单中的商品单价，在所设置的价格区间的分布情况</p>
                        </div>
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <i-button type="ghost" class="export-btn">设置价格区间</i-button>
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
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="热卖商品" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>图表展示了符合搜索条件的有效订单中的下单总金额和下单量排名前50位的商品</p>
                        </div>
                        <div class="analysis-content">
                            <tabs type="card">
                                <tab-pane label="下单量">
                                    <div class="order-money-content">
                                        <div class="select-content hot-sales-goods">
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
                                        <div class="order-module-content">
                                            <i-table :columns="orderColumns" :context="self"
                                                     :data="orderData" ref="orderList"></i-table>
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
                <tab-pane label="商品销售明细" name="name3">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>以下列表为符合搜索条件的有效订单中所有商品数据，及时间段内的销量、下单量、下单总金额</p>
                            <p>默认按照"下单商品件数"降序排列</p>
                        </div>
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <i-button type="ghost" class="export-btn export-sales-btn"
                                              @click="exportSalesData">导出数据</i-button>
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
                                        <li class="store-body-header-right">
                                            <i-input v-model="applicationWord" placeholder="请输入关键词进行搜索">
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </li>
                                    </ul>
                                </div>
                                <i-table :columns="salesColumns" :context="self"
                                         :data="salesData" ref="salesList"></i-table>
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