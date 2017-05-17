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
                analysisMoneyColumns: [
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
                        title: '下单金额',
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
                analysisMoneyData: [
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
                analysisNumberColumns: [
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
                        title: '下单商品数',
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
                analysisNumberData: [
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
                analysisCountColumns: [
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
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                analysisCountData: [
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
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
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
                orderMoneyProvince: {
                    tooltip: {},
                    visualMap: {
                        min: 0,
                        max: 1500,
                        left: 'left',
                        top: 'bottom',
                        text: ['High', 'Low'],
                        seriesIndex: [1],
                        inRange: {
                            color: ['#e0ffff', '#006edd'],
                        },
                        calculable: true,
                    },
                    geo: {
                        map: 'china',
                        roam: true,
                        label: {
                            normal: {
                                show: true,
                                textStyle: {
                                    color: 'rgba(0,0,0,0.4)',
                                },
                            },
                        },
                        itemStyle: {
                            normal: {
                                borderColor: 'rgba(0, 0, 0, 0.2)',
                            },
                            emphasis: {
                                areaColor: null,
                                shadowOffsetX: 0,
                                shadowOffsetY: 0,
                                shadowBlur: 20,
                                borderWidth: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)',
                            },
                        },
                    },
                    series: [
                        {
                            type: 'scatter',
                            coordinateSystem: 'geo',
                            data: this.convertData(),
                            symbolSize: 20,
                            symbol: 'path://M1705.06,1318.313v-89.254l-319.9-221.799l0.073-208.063c0.521-84.662-26.' +
                            '629-121.796-63.961-121.491c-37.332-0.305-64.482,36.829-63.961,121.491l0.073,208.063l-319.9,' +
                            '221.799v89.254l330.343-157.288l12.238,241.308l-134.449,92.931l0.531,' +
                            '42.034l175.125-42.917l175.125,42.917l0.531-42.034l-134.449-92.931l12.238-241.308L1705.06,' +
                            '1318.313z',
                            symbolRotate: 35,
                            label: {
                                normal: {
                                    formatter: '{b}',
                                    position: 'right',
                                    show: false,
                                },
                                emphasis: {
                                    show: true,
                                },
                            },
                            itemStyle: {
                                normal: {
                                    color: '#F06C00',
                                },
                            },
                        },
                        {
                            name: '销量',
                            type: 'map',
                            geoIndex: 0,
                            data: [
                                {
                                    name: '北京',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '天津',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '上海',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '重庆',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '河北',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '河南',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '云南',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '辽宁',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '黑龙江',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '湖南',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '安徽',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '山东',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '新疆',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '江苏',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '浙江',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '江西',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '湖北',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '广西',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '甘肃',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '山西',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '内蒙古',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '陕西',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '吉林',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '福建',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '贵州',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '广东',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '青海',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '西藏',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '四川',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '宁夏',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '海南',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '台湾',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '香港',
                                    value: this.randomValue(),
                                },
                                {
                                    name: '澳门',
                                    value: this.randomValue(),
                                },
                            ],
                        },
                    ],
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
                        render() {
                            return '<i-button size="small" type="ghost">查看</i-button>';
                        },
                        title: '操作',
                        width: 120,
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
            convertData() {
                const data = [];
                const res = [];
                const geoCoordMap = {};
                for (let i = 0; i < data.length; i += 1) {
                    const geoCoord = geoCoordMap[data[i].name];
                    if (geoCoord) {
                        res.push({
                            name: data[i].name,
                            value: geoCoord.concat(data[i].value),
                        });
                    }
                }
                return res;
            },
            exportData() {
                this.$refs.memberList.exportCsv({
                    filename: '新增会员数据',
                });
            },
            exportMemberMoneyData() {
                this.$refs.analysisMoneyList.exportCsv({
                    filename: '会员分析下单金额数据',
                });
            },
            exportMemberNumberData() {
                this.$refs.analysisNumberList.exportCsv({
                    filename: '会员分析下单商品数数据',
                });
            },
            exportMemberCountData() {
                this.$refs.analysisCountList.exportCsv({
                    filename: '会员分析下单量数据',
                });
            },
            exportProvinceData() {
                this.$refs.provinceList.exportCsv({
                    filename: '地区分析数据',
                });
            },
            randomValue() {
                return Math.round(Math.random() * 1000);
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
                                              @click="exportMemberMoneyData">导出数据</i-button>
                                    <i-table :columns="analysisMoneyColumns" :context="self"
                                             :data="analysisMoneyData" ref="analysisMoneyList"></i-table>
                                    <div class="page">
                                        <page :total="100" show-elevator></page>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单商品数">
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
                                              @click="exportMemberNumberData">导出数据</i-button>
                                    <i-table :columns="analysisNumberColumns" :context="self"
                                             :data="analysisNumberData" ref="analysisNumberList"></i-table>
                                    <div class="page">
                                        <page :total="100" show-elevator></page>
                                    </div>
                                </tab-pane>
                                <tab-pane label="下单量">
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
                                              @click="exportMemberCountData">导出数据</i-button>
                                    <i-table :columns="analysisCountColumns" :context="self"
                                             :data="analysisCountData" ref="analysisCountList"></i-table>
                                    <div class="page">
                                        <page :total="100" show-elevator></page>
                                    </div>
                                </tab-pane>
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
                                        <i-echarts :option="orderMoneyProvince" @ready="onReady" @click="onClick"></i-echarts>
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