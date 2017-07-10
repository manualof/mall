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
                goodsColumns: [
                    {
                        key: 'orderNum',
                        title: '订单编号',
                    },
                    {
                        key: 'refundNum',
                        title: '退款编号',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'goodName',
                        title: '商品名称',
                    },
                    {
                        key: 'time',
                        title: '申请时间',
                    },
                    {
                        key: 'refundMoney',
                        title: '退款金额',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h) {
                            return h('i-button', {
                                props: {
                                    size: 'small',
                                    type: 'ghost',
                                },
                            }, '查看');
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                goodsData: [
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
                    },
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
                    },
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
                    },
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
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
                loading: false,
                refundColumns: [
                    {
                        key: 'orderNum',
                        title: '订单编号',
                    },
                    {
                        key: 'refundNum',
                        title: '退款编号',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'goodName',
                        title: '商品名称',
                    },
                    {
                        key: 'time',
                        title: '申请时间',
                    },
                    {
                        key: 'refundMoney',
                        title: '退款金额',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h) {
                            return h('i-button', {
                                props: {
                                    size: 'small',
                                    type: 'ghost',
                                },
                            }, '查看');
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                refundData: [
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
                    },
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
                    },
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
                    },
                    {
                        goodName: '用户套装买二送一',
                        orderNum: '36589554555',
                        refundMoney: '99.00',
                        refundNum: '36589554555',
                        shopName: '旗舰店',
                        time: '2017-04-01',
                    },
                ],
                refundStatistics: {
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
                returnStatistics: {
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
                ],
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
                            <div class="order-money-content search-select-item">
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="refundStatistics"
                                           :style="style"
                                           @click="onClick"
                                           @ready="onReady" ></i-echarts>
                            </div>
                            <i-button type="ghost" class="export-btn" @click="exportData">导出数据</i-button>
                            <i-table :columns="refundColumns" :context="self"
                                     :data="refundData" ref="refundList"></i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
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
                            <div class="order-money-content search-select-item">
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="returnStatistics"
                                           :style="style"
                                           @click="onClick"
                                           @ready="onReady" ></i-echarts>
                            </div>
                            <i-button type="ghost" class="export-btn" @click="exportGoodsData">导出数据</i-button>
                            <i-table :columns="goodsColumns" :context="self"
                                     :data="goodsData" ref="goodsList"></i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>