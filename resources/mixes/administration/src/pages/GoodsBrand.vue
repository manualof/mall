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
                brandColumns: [
                    {
                        key: 'brandId',
                        title: '品牌ID',
                    },
                    {
                        key: 'name',
                        title: '品牌名称',
                    },
                    {
                        key: 'initials',
                        title: '首字母',
                    },
                    {
                        key: 'brandPicture',
                        title: '品牌图片',
                        render() {
                            return '<icon type="image"></icon>';
                        },
                    },
                    {
                        key: 'sort',
                        title: '品牌排序',
                    },
                    {
                        key: 'isshow',
                        title: '是否推荐品牌',
                        render(row) {
                            return `<span v-if="${row.status} === true" class="status-check">
                                    <icon type="checkmark-circled"></icon>是</span>
                                    <span v-if="${row.status} === false"><icon type="close-circled"></icon>否</span>`;
                        },
                    },
                    {
                        key: 'showStyle',
                        title: '展示形式',
                    },
                    {
                        key: 'action',
                        title: '操作',
                        render() {
                            return '<i-button type="ghost" @click.native="edit">编辑</i-button>';
                        },
                    },
                ],
                brandData: [
                    {
                        brandId: '001',
                        initials: 'Y',
                        isshow: '是',
                        name: '迪卡侬',
                        sort: 4,
                        status: true,
                        showStyle: '图片',
                    },
                    {
                        brandId: '001',
                        initials: 'Y',
                        isshow: '是',
                        name: '迪卡侬',
                        sort: 4,
                        status: false,
                        showStyle: '图片',
                    },
                    {
                        brandId: '001',
                        initials: 'Y',
                        isshow: '是',
                        name: '迪卡侬',
                        sort: 4,
                        status: true,
                        showStyle: '图片',
                    },
                ],
                self: this,
            };
        },
        methods: {
            edit() {
                const self = this;
                self.$router.push({
                    path: 'brand/edit',
                });
            },
            exportData() {
                this.$refs.brand.exportCsv({
                    filename: '品牌管理数据',
                });
            },
            newAddData() {
                const self = this;
                self.$router.push({
                    path: 'brand/add',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-brand">
            <tabs value="name1">
                <tab-pane label="品牌管理" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>当店主添加商品时可选择商品品牌，用户可根据品牌查询商品列表
                                被推荐品牌，将在前台品牌推荐模块显示</p>
                            <p>在品牌列表页面，品牌将按类别分组，即具有相同类别的品牌为一组，品牌类别与品牌分类无联系</p>
                        </div>
                        <div class="brand-management">
                            <i-button class="add-data" type="ghost" @click.native="newAddData">+新增数据</i-button>

                            <i-button class="export-btn" @click="exportData" type="ghost">导出数据</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                        </div>
                        <i-table highlight-row :columns="brandColumns" :context="self"
                                 :data="brandData" ref="brand"></i-table>
                    </card>
                </tab-pane>
                <tab-pane label="待审核" name="name2">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>