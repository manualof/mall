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
                analysisColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'memberName',
                        title: '会员名称',
                    },
                    {
                        key: 'amount',
                        title: '下单量',
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
                analysisData: [
                    {
                        amount: 22,
                        memberName: 4,
                        num: 333,
                    },
                    {
                        amount: 22,
                        memberName: 4,
                        num: 333,
                    },
                    {
                        amount: 22,
                        memberName: 4,
                        num: 333,
                    },
                    {
                        amount: 22,
                        memberName: 4,
                        num: 333,
                    },
                ],
                isPriceArea: false,
                loading: false,
                memberColumns: [
                    {
                        key: 'hour',
                        title: '小时',
                    },
                    {
                        key: 'yesterday',
                        title: '昨天',
                    },
                    {
                        key: 'today',
                        title: '今天',
                    },
                    {
                        key: 'rate',
                        title: '同比',
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
                memberData: [
                    {
                        hour: 1,
                        rate: 2,
                        today: 2,
                        yesterday: 0,
                    },
                    {
                        hour: 1,
                        rate: 2,
                        today: 2,
                        yesterday: 0,
                    },
                    {
                        hour: 1,
                        rate: 2,
                        today: 2,
                        yesterday: 0,
                    },
                    {
                        hour: 1,
                        rate: 2,
                        today: 2,
                        yesterday: 0,
                    },
                ],
                newAddMember: {
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
                orderMoney: {
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
                        key: 'province',
                        title: '省份',
                    },
                    {
                        key: 'memberNum',
                        title: '下单会员数',
                    },
                    {
                        key: 'money',
                        title: '下单金额（元）',
                    },
                    {
                        key: 'amount',
                        title: '下单量',
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
                provinceData: [
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        province: '陕西',
                    },
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        province: '陕西',
                    },
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        province: '陕西',
                    },
                    {
                        amount: 20,
                        memberNum: 4,
                        money: 222,
                        province: '陕西',
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
            exportData() {
                this.$refs.memberList.exportCsv({
                    filename: '新增会员数据',
                });
            },
            exportMemberData() {
                this.$refs.analysisList.exportCsv({
                    filename: '会员分析数据',
                });
            },
            exportProvinceData() {
                this.$refs.provinceList.exportCsv({
                    filename: '地区分析数据',
                });
            },
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
                            </div>
                            <div class="echarts">
                                <i-echarts :option="newAddMember" @ready="onReady" @click="onClick"></i-echarts>
                            </div>

                            <i-button type="ghost" class="export-btn" @click="exportData">导出数据</i-button>
                            <i-table :columns="memberColumns" :context="self"
                                     :data="memberData" ref="memberList"></i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="会员分析" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1、采用在线支付方式支付并且已付款；
                                2、采用货到付款方式支付并且交易已完成</p>
                            <p>列表展示了时间段内所有会员有效订单的订单数量、下单商品数量和订单总金额统计数据，
                                并可以点击列表上方的"导出数据"，将列表数据导出为Excel文件</p>
                        </div>
                        <div class="analysis-content">
                            <tabs type="card">
                                <tab-pane label="下单金额">
                                    <div class="order-money-content">
                                        <h5>买家排行榜TOP15</h5>
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
                                        <i-echarts :option="orderMoney" @ready="onReady" @click="onClick"></i-echarts>
                                    </div>

                                    <i-button type="ghost" class="export-btn"
                                              @click="exportMemberData">导出数据</i-button>
                                    <i-table :columns="analysisColumns" :context="self"
                                             :data="analysisData" ref="analysisList"></i-table>
                                    <div class="page">
                                        <page :total="100" show-elevator></page>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单商品数">标签二的内容</tab-pane>
                                <tab-pane label="下单量">标签三的内容</tab-pane>
                            </tabs>
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
                            <tabs type="card">
                                <tab-pane label="下单金额">
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
                                    </div>
                                    <div class="echarts">
                                        <i-echarts :option="orderMoney" @ready="onReady" @click="onClick"></i-echarts>
                                    </div>
                                    <i-button type="ghost" class="export-btn"
                                              @click="exportProvinceData">导出数据</i-button>
                                    <i-table :columns="provinceColumns" :context="self"
                                             :data="provinceData" ref="provinceList"></i-table>
                                    <div class="page">
                                        <page :total="100" show-elevator></page>
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