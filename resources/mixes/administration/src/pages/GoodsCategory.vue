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
                classificationData: [
                    {
                        commissionRate: '5%',
                        goodShow: '颜色',
                    },
                    {
                        commissionRate: '5%',
                        goodShow: '颜色',
                    },
                    {
                        commissionRate: '5%',
                        goodShow: '颜色',
                    },
                    {
                        commissionRate: '5%',
                        goodShow: '颜色',
                    },
                ],
                goodColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        key: 'sort',
                        render() {
                            return '<i-input type="ghost" style="width: 64px;"></i-input>';
                        },
                        title: '排序',
                        width: 150,
                    },
                    {
                        key: 'typeName',
                        render() {
                            return '<i-input type="ghost" style="width: 128px;"></i-input>';
                        },
                        title: '分类名称',
                        width: 200,
                    },
                    {
                        key: 'commissionRate',
                        title: '分拥比例',
                        width: 150,
                    },
                    {
                        key: 'goodShow',
                        title: '商品展示',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<dropdown>
                                    <i-button type="ghost">设置<icon type="arrow-down-b"></icon></i-button>
                                    <dropdown-menu slot="list">
                                    <dropdown-item @click.native="editType">编辑分类信息</dropdown-item>
                                    <dropdown-item>新增下级分类</dropdown-item>
                                    <dropdown-item>查看下级分类</dropdown-item>
                                    </dropdown-menu>
                                    </dropdown>
                                    <i-button class="delete-ad" @click.native="remove(${index})"
                                    type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 200,
                    },
                ],
                searchCategory: '',
                searchWord: '',
                self: this,
            };
        },
        methods: {
            addData() {
                const self = this;
                self.$router.push({
                    path: 'category/add',
                });
            },
            editType() {
                const self = this;
                self.$router.push({
                    path: 'category/edit',
                });
            },
            editTypeNav() {
                const self = this;
                self.$router.push({
                    path: 'category/edit/nav',
                });
            },
            exportData() {
                this.$refs.goodTable.exportCsv({
                    filename: '商品分类数据',
                });
            },
            remove(index) {
                this.classificationData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-category">
            <tabs value="name1">
                <tab-pane label="分类管理" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>当店主添加商品时可选择商品分类，用户可根据分类查询商品列表</p>
                            <p>对分类做任何更改后，都需要到 站点设置>清理缓存 清理商品分类，新的设置才会生效</p>
                            <p>"商品展示"为在商品列表页的展示方式</p>
                            <p>"SKU"：以某一SKU分别展示,例如,商品列表页同款商品分别展示不同颜色</p>
                            <p>"SPU"：每个SPU只展示一个SKU,默认销量最大且有库存的SKU</p>
                        </div>
                        <div class="store-body">
                            <div class="store-body-header">
                                <i-button @click.native="addData" type="ghost">+新增数据</i-button>
                                <i-button @click="exportData" type="ghost">导出数据</i-button>
                                <i-button @click="deleteData" type="ghost">批量删除</i-button>
                                <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            </div>
                            <i-table ref="goodTable" highlight-row :context="self" class="shop-table"
                                     :columns="goodColumns" :data="classificationData"></i-table>
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