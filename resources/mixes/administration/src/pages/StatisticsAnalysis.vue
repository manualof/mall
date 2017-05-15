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
                goodsColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'goodsName',
                        title: '商品名称',
                    },
                    {
                        key: 'amount',
                        title: '下单商品数',
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
                goodsData: [
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 1,
                    },
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 2,
                    },
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 3,
                    },
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 4,
                    },
                ],
                isPriceArea: false,
                orderBar: {
                    legend: {
                        data: ['昨天', '今天'],
                        bottom: 'auto',
                    },
                    tooltip: {
                        trigger: 'axis',
                    },
                    xAxis: {
                        type: 'category',
                        boundaryGap: false,
                        data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
                    },
                    yAxis: {
                        type: 'value',
                    },
                    series: [
                        {
                            name: '今天',
                            type: 'line',
                            stack: '下单金额',
                            data: [120, 132, 220, 250, 90, 230, 210],
                        },
                        {
                            name: '昨天',
                            type: 'line',
                            stack: '下单金额',
                            data: [220, 182, 191, 234, 290, 330, 310],
                        },
                    ],
                },
                self: this,
                shopsColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'goodsName',
                        title: '商品名称',
                    },
                    {
                        key: 'amount',
                        title: '下单商品数',
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
                shopsData: [
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 1,
                    },
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 2,
                    },
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 3,
                    },
                    {
                        amount: 99,
                        goodsName: 'xxx旗舰店',
                        num: 4,
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
                    {
                        label: '按照天统计',
                        value: '3',
                    },
                ],
            };
        },
        methods: {
            onReady(instance) {
                console.log(instance);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="statistics-analysis">
            <tabs value="name1">
                <tab-pane label="概况总览" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>在“提示”下可以选择不同的商品分类和时间查询数据</p>
                            <p>统计某行业子分类在不同时间段的下单金额、下单商品数、下单量，为分析行业销量提供依据</p>
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
                                    </div>
                                    <div class="echarts">
                                        <i-echarts :option="orderBar" @ready="onReady" @click="onClick"></i-echarts>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单商品数">标签二的内容</tab-pane>
                                <tab-pane label="下单量">标签三的内容</tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="行业排行" name="name2">
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="orderBar" @ready="onReady" @click="onClick"></i-echarts>
                            </div>
                            <i-table :columns="goodsColumns" :context="self" :data="goodsData"></i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="orderBar" @ready="onReady" @click="onClick"></i-echarts>
                            </div>
                            <i-table :columns="shopsColumns" :context="self" :data="shopsData"></i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="价格分析" name="name3">
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

                            <div class="echarts">
                                <i-echarts :option="orderBar" @ready="onReady" @click="onClick"></i-echarts>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>