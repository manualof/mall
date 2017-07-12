<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                industryGoods: {
                    color: ['#3398DB'],
                    series: [
                        {
                            barWidth: '60%',
                            data: [10, 52, 200, 334, 390, 330, 220],
                            name: '直接访问',
                            type: 'bar',
                        },
                    ],
                    tooltip: {
                        axisPointer: {
                            type: 'line',
                        },
                        trigger: 'axis',
                    },
                    xAxis: [
                        {
                            axisTick: {
                                alignWithLabel: true,
                            },
                            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                            type: 'category',
                        },
                    ],
                    yAxis: [
                        {
                            type: 'value',
                        },
                    ],
                },
                orderAccount: {
                    series: [
                        {
                            data: [120, 132, 220, 250, 90, 230, 210],
                            name: '下单金额',
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
                orderNumber: {
                    series: [
                        {
                            data: [120, 132, 220, 250, 90, 230, 210],
                            name: '下单金额',
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
                self: this,
                style: 'height: 400px;',
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
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="statistics-flow">
            <tabs value="name1">
                <tab-pane label="店铺总流量" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>统计图展示了店铺在搜索时间段内的访问量走势情况</p>
                        </div>
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content" style="top: -10px">
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="orderAccount"
                                           :style="style"
                                           @click="onClick"
                                           @ready="onReady" ></i-echarts>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="商品流量排名" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>统计图展示了在搜索时间段内访问次数多的店铺商品前30名 </p>
                        </div>
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content" style="top: -10px">
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="industryGoods"
                                           :style="style"
                                           @click="onClick"
                                           @ready="onReady" ></i-echarts>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>