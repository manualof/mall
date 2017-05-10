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
                memberColumns: [
                    {
                        title: '小时',
                        key: 'hour',
                    },
                    {
                        title: '昨天',
                        key: 'yesterday',
                    },
                    {
                        title: '今天',
                        key: 'today',
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
                memberData: [
                    {
                        hour: 1,
                        yesterday: 0,
                        today: 2,
                        rate: 2,
                    },
                    {
                        hour: 1,
                        yesterday: 0,
                        today: 2,
                        rate: 2,
                    },
                    {
                        hour: 1,
                        yesterday: 0,
                        today: 2,
                        rate: 2,
                    },
                    {
                        hour: 1,
                        yesterday: 0,
                        today: 2,
                        rate: 2,
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
                goodsColumns: [
                    {
                        title: '序号',
                        key: 'num',
                    },
                    {
                        title: '商品名称',
                        key: 'goodsName',
                    },
                    {
                        title: '下单商品数',
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
                goodsData: [
                    {
                        num: 1,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 2,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 3,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 4,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                ],
                shopsColumns: [
                    {
                        title: '序号',
                        key: 'num',
                    },
                    {
                        title: '商品名称',
                        key: 'goodsName',
                    },
                    {
                        title: '下单商品数',
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
                shopsData: [
                    {
                        num: 1,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 2,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 3,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 4,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
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
                this.$refs.memberList.exportCsv({
                    filename: '新增会员数据',
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
        <div class="statistics-member">
            <tabs value="name1">
                <tab-pane label="新增会员" name="name1">
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
                                <i-button type="ghost" class="export-btn" @click="exportData">导出数据</i-button>
                                <i-table :columns="memberColumns" :context="self"
                                         :data="memberData" ref="memberList"></i-table>
                                <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="会员分析" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>在“提示”下可以选择不同的商品分类和时间查询数据</p>
                            <p>统计某行业在不同时间段下单量前50名商品和前30名店铺</p>
                        </div>
                        <div class="analysis-content">
                            <h5 v-if="!isPriceArea">行业商品TOP50</h5>
                            <div class="order-money-content">
                                <div class="select-content" style="top: -10px">
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
                                <i-table :columns="goodsColumns" :context="self" :data="goodsData"></i-table>
                                <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>
                            </div>
                            <h5 v-if="!isPriceArea">行业店铺TOP50</h5>
                            <div class="order-money-content">
                                <div class="select-content" style="top: -10px">
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
                <tab-pane label="地区分析" name="name3">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>点击“设置价格区间”进入设置价格区间页面，下方统计图将根据您设置的价格区间进行统计</p>
                            <p>统计图展示符合搜索条件的有效订单中商品的单价所在价格区间中的总销售额和总下单商品数量走势</p>
                        </div>
                        <div class="analysis-content">
                            <i-button type="ghost">设置价格区间</i-button>
                            <h5>行业价格分布图</h5>
                            <div class="order-money-content">
                                <h5 v-if="!isPriceArea">下单金额</h5>
                                <div class="select-content" style="top: -10px">
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
                                <div v-if="isPriceArea" class="set-price-area">
                                    <p>看行业价格分布情况前，请先设置价格区间</p>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>