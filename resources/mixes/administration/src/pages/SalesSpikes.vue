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
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'goodsName',
                        title: '商品名称',
                        width: 190,
                    },
                    {
                        align: 'center',
                        key: 'spu',
                        title: 'spu',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'goodsPrice',
                        title: '商品价格',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'goodsStatus',
                        title: '商品状态',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'reviewStatus',
                        title: '审核状态',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'goodsImg',
                        render() {
                            return '<icon type="image"></icon>';
                        },
                        title: '商品图片',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'adWord',
                        title: '广告词',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'styleId',
                        title: '分类ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'styleName',
                        title: '分类名称',
                        width: 200,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(row, column, index) {
                            return `<dropdown>
                                    <i-button type="ghost">设置<icon type="arrow-down-b"></icon></i-button>
                                    <dropdown-menu slot="list">
                                    <dropdown-item>查看商品详情</dropdown-item>
                                    <dropdown-item name="goodSku" @click.native="lookGoodsSku">查看商品SKU</dropdown-item>
                                    <dropdown-item>加入商品库</dropdown-item>
                                    </dropdown-menu></dropdown>
                                    <i-button @click.native="remove(${index})" class="delete-ad"
                                     type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                goodsData: [
                    {
                        adWord: '纯棉易用七天',
                        goodsName: '太阳镜眼睛放蓝光紫外线',
                        goodsPrice: '99.00',
                        goodsStatus: '出售中',
                        reviewStatus: '通过',
                        spu: '001',
                        styleId: 30,
                        styleName: '运动健康>户外>鞋服',
                    },
                    {
                        adWord: '纯棉易用七天',
                        goodsName: '太阳镜眼睛放蓝光紫外线',
                        goodsPrice: '99.00',
                        goodsStatus: '出售中',
                        reviewStatus: '通过',
                        spu: '001',
                        styleId: 30,
                        styleName: '运动健康>户外>鞋服',
                    },
                    {
                        adWord: '纯棉易用七天',
                        goodsName: '太阳镜眼睛放蓝光紫外线',
                        goodsPrice: '99.00',
                        goodsStatus: '出售中',
                        reviewStatus: '通过',
                        spu: '001',
                        styleId: 30,
                        styleName: '运动健康>户外>鞋服',
                    },
                    {
                        adWord: '纯棉易用七天',
                        goodsName: '太阳镜眼睛放蓝光紫外线',
                        goodsPrice: '99.00',
                        goodsStatus: '出售中',
                        reviewStatus: '通过',
                        spu: '001',
                        styleId: 30,
                        styleName: '运动健康>户外>鞋服',
                    },
                    {
                        adWord: '纯棉易用七天',
                        goodsName: '太阳镜眼睛放蓝光紫外线',
                        goodsPrice: '99.00',
                        goodsStatus: '出售中',
                        reviewStatus: '通过',
                        spu: '001',
                        styleId: 30,
                        styleName: '运动健康>户外>鞋服',
                    },
                ],
                self: this,
            };
        },
        methods: {
            exportData() {
                this.$refs.goodsList.exportCsv({
                    filename: '商品管理数据',
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
                                        <i-button class="export-btn" @click="exportData" type="ghost">导出数据</i-button>
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

                                </tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
