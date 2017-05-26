<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/img_logo.png';

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
                        key: 'goodsLogo',
                        render() {
                            return `<icon type="image"></icon>
                                    <img :src="row.goodsLogo" style="display: none">`;
                        },
                        title: '品牌图标',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'goodsName',
                        title: '品牌名称',
                    },
                    {
                        align: 'center',
                        key: 'show',
                        title: '显示',
                    },
                    {
                        align: 'center',
                        key: 'status',
                        title: '状态',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<div v-if="row.status === '待审核'">
                                    <i-button @click.native="edit(${index})" type="ghost">修改</i-button>
                                    <i-button @click.native="revoked(${index})" class="delete-ad"
                                     type="ghost">撤销</i-button></div>
                                    <i-button @click.native="remove(${index})" v-if="row.status === '审核通过'"
                                    type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                goodsData: [
                    {
                        goodsLogo: image1,
                        goodsName: '海尔',
                        show: '家用电器>大型家电>冰箱',
                        status: '待审核',
                    },
                    {
                        goodsLogo: image1,
                        goodsName: '海尔',
                        show: '家用电器>大型家电>冰箱',
                        status: '待审核',
                    },
                    {
                        goodsLogo: image1,
                        goodsName: '海尔',
                        show: '家用电器>大型家电>冰箱',
                        status: '审核通过',
                    },
                ],
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
            addGoods() {
                const self = this;
                self.$router.push(
                    {
                        path: 'goods/add',
                    },
                );
            },
            edit() {
                const self = this;
                self.$router.push(
                    {
                        path: 'goods/edit',
                    },
                );
            },
            remove(index) {
                this.goodsData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="goods-application">
            <tabs value="name1">
                <tab-pane label="品牌申请" name="name1">
                    <card :bordered="false">
                        <div class="goods-list">
                            <div class="goods-body-header">
                                <i-button type="ghost" @click.native="addGoods">品牌申请</i-button>
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
            </tabs>
        </div>
    </div>
</template>