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
                goodsReview: {
                    switch1: true,
                },
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
                loading: false,
                modal: false,
                self: this,
                searchList: [
                    {
                        label: '店铺名称',
                        value: '店铺名称',
                    },
                    {
                        label: '商品名称',
                        value: '商品名称',
                    },
                    {
                        label: '商品分类',
                        value: '商品分类',
                    },
                ],
                skuColumns: [
                    {
                        align: 'center',
                        key: 'skuId',
                        title: 'SKU编号',
                        width: 185,
                    },
                    {
                        align: 'center',
                        key: 'goodsImg',
                        render() {
                            return '<icon type="image"></icon>';
                        },
                        title: '商品图片',
                        width: 185,
                    },
                    {
                        align: 'center',
                        key: 'skuStock',
                        title: 'SKU库存',
                        width: 185,
                    },
                    {
                        align: 'center',
                        key: 'skuPrice',
                        title: 'SKU价格(元)',
                        width: 185,
                    },
                ],
                skuData: [
                    {
                        skuId: 133026,
                        skuStock: 334455,
                        skuPrice: 99.00,
                    },
                ],
            };
        },
        methods: {
            exportData() {
                this.$refs.goodsList.exportCsv({
                    filename: '商品管理数据',
                });
            },
            lookGoodsSku() {
                this.modal = true;
            },
            remove(index) {
                this.goodsData.splice(index, 1);
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.goodsReview.validate(valid => {
                    if (valid) {
                        window.console.log(valid);
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-wrap">
            <tabs value="name1">
                <tab-pane label="所有商品" name="name1" class="all-goods">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>上架，当商品处于非上架状态时，前台将不能浏览该商品，店主可控制商品上架状态</p>
                            <p>违规下架，当商品处于违规下架状态时，前台将不能购买该商品，只有管理员可控制商品违规下架状态，
                                并且商品只有重新编辑后才能上架</p>
                            <p>设置项中可以查看商品详细、查看商品SKU。查看商品详细，跳转到商品详细页。查看商品SKU，显示商
                                品的SKU、图片、价格、库存信息</p>
                        </div>
                        <div class="goods-list">
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
                                     ref="goodsList"
                                     highlight-row>
                            </i-table>
                        </div>
                        <modal value="goodSku"
                            v-model="modal"
                            title="商品“222616”的SKU列表" class="good-sku-modal">
                            <i-table ref="goodsSKU" class="goods-table" :columns="skuColumns"
                                     :context="self" :data="skuData"></i-table>
                        </modal>
                        <div class="page">
                            <page :total="100" show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="违规下架" name="name2">

                </tab-pane>
                <tab-pane label="等待审核" name="name3">

                </tab-pane>
                <tab-pane label="商品设置" name="name4">
                    <card :bordered="false">
                        <i-form ref="goodsReview" :model="goodsReview" :rules="ruleValidate" :label-width="200">
                            <row>
                                <i-col span="12">
                                    <form-item label="商品是否需要审核">
                                        <i-switch size="large" v-model="goodsReview.switch1">
                                            <span slot="open">开启</span>
                                            <span slot="close">关闭</span>
                                        </i-switch>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="12">
                                    <form-item>
                                        <i-button :loading="loading" type="primary" @click.native="submit">
                                            <span v-if="!loading">确认提交</span>
                                            <span v-else>正在提交…</span>
                                        </i-button>
                                    </form-item>
                                </i-col>
                            </row>
                        </i-form>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>