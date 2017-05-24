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
                goodsColumns: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        key: 'goodsName',
                        title: '商品名称',
                        width: 650,
                    },
                    {
                        align: 'center',
                        key: 'goodsPrice',
                        title: '价格',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'goodsStock',
                        title: '库存',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'shelves',
                        render() {
                            return `<i-switch size="large" v-model="row.status">
                                    <span slot="open">开启</span>
                                    <span slot="close">关闭</span>
                                    </i-switch>`;
                        },
                        title: '上架',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'reviewStatus',
                        title: '审核',
                        width: 150,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button @click.native="editGoods(${index})" type="ghost">编辑</i-button>
                                    <i-button @click.native="removeGoods(${index})" class="delete-ad"
                                     type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                goodsData: [
                    {
                        goodsName: 'MIUI/小米 小米手机4 小米4代 MI4智能4G手机包邮 黑色 D-LTE（4G）/TD-SCD',
                        goodsPrice: '￥4826.07',
                        goodsStock: '54',
                        reviewStatus: '已通过',
                        status: true,
                    },
                ],
                loading: false,
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
                self: this,
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
    <div class="seller-wrap">
        <div class="goods-wrap">
            <tabs value="name1">
                <tab-pane label="商品列表" name="name1" class="all-goods">
                    <card :bordered="false">
                        <div class="goods-list">
                            <div class="goods-body-header">
                                <i-button type="ghost" class="first-btn">发布新商品</i-button>
                                <i-button type="ghost">批量删除</i-button>
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
                        <div class="page">
                            <page :total="100" show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="正在出售" name="name2">

                </tab-pane>
                <tab-pane label="等待审核" name="name3">

                </tab-pane>
                <tab-pane label="违规商品" name="name4">

                </tab-pane>
                <tab-pane label="商品回收站" name="name5">

                </tab-pane>
            </tabs>
        </div>
    </div>
</template>