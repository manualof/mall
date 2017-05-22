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
                businessmenColumns: [
                    {
                        align: 'center',
                        key: 'activeName',
                        title: '活动名称',
                    },
                    {
                        align: 'center',
                        key: 'businessmenName',
                        title: '商家名称',
                    },
                    {
                        align: 'center',
                        key: 'businessmenId',
                        title: '商家ID',
                    },
                    {
                        align: 'center',
                        key: 'startTime',
                        title: '开始时间',
                    },
                    {
                        align: 'center',
                        key: 'endTime',
                        title: '结束时间',
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render() {
                            return `<i-button class="delete-ad" type="ghost">查看</i-button>
                                    <i-button class="delete-ad" type="ghost">屏蔽</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                businessmenData: [
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                ],
                goodsColumns: [
                    {
                        align: 'center',
                        key: 'goodsName',
                        title: '商品名称',
                        width: 240,
                    },
                    {
                        align: 'center',
                        key: 'goodsImg',
                        render() {
                            return '<icon type="image"></icon>';
                        },
                        title: '商品图片',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'goodsPrice',
                        title: '活动价格',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'prePrice',
                        title: '原价',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'startTime',
                        title: '开始时间',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'endTime',
                        title: '结束时间',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'status',
                        render() {
                            return `<i-switch size="large" v-model="row.status">
                                    <span slot="open">开启</span>
                                    <span slot="close">关闭</span>
                                    </i-switch>`;
                        },
                        title: '状态',
                        width: 240,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render() {
                            return '<i-button class="delete-ad" type="ghost">屏蔽</i-button>';
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                goodsData: [
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                ],
                self: this,
            };
        },
        methods: {
            exportBusinessmenData() {
                this.$refs.businessmenList.exportCsv({
                    filename: '活动商家列表数据',
                });
            },
            exportGoodsData() {
                this.$refs.goodsList.exportCsv({
                    filename: '活动商品列表数据',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-spikes">
            <tabs value="name1">
                <tab-pane label="秒杀活动" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>可以查看活动商品，并屏蔽</p>
                            <p>推荐商品默认在商城显示前五件，其余在商城首页不显示</p>
                        </div>
                        <div class="spikes-content">
                            <tabs type="card">
                                <tab-pane label="活动商品列表">
                                    <div class="goods-body-header">
                                        <i-button class="export-btn" @click="exportGoodsData" type="ghost">导出数据</i-button>
                                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                                        <div class="goods-body-header-right">
                                            <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                                    <i-option v-for="item in searchList"
                                                              :value="item.value">{{ item.label }}</i-option>
                                                </i-select>
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </div>
                                    </div>
                                    <i-table class="goods-table"
                                             :columns="goodsColumns"
                                             :context="self"
                                             :data="goodsData"
                                             ref="goodsList">
                                    </i-table>
                                </tab-pane>
                                <tab-pane label="活动商家列表">
                                    <div class="goods-body-header">
                                        <i-button class="export-btn" @click="exportBusinessmenData" type="ghost">导出数据</i-button>
                                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                                        <div class="goods-body-header-right">
                                            <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                                    <i-option v-for="item in searchList"
                                                              :value="item.value">{{ item.label }}</i-option>
                                                </i-select>
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </div>
                                    </div>
                                    <i-table class="goods-table"
                                             :columns="businessmenColumns"
                                             :context="self"
                                             :data="businessmenData"
                                             ref="businessmenList">
                                    </i-table>
                                </tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
