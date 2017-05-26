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
                categoryColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        key: 'categoryName',
                        render() {
                            return '<tree :data="row.baseData" show-checkbox></tree>';
                        },
                        title: '分类名称',
                    },
                    {
                        align: 'center',
                        key: 'sort',
                        title: '排序',
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
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button @click.native="edit(${index})" type="ghost">编辑</i-button>
                                    <i-button @click.native="remove(${index})" class="delete-ad"
                                     type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                categoryData: [
                    {
                        baseData: [
                            {
                                expand: true,
                                title: '海外代购',
                                children: [
                                    {
                                        title: '鞋子',
                                        disabled: true,
                                    },
                                    {
                                        title: '短袖/polo/衬衫',
                                        disabled: true,
                                    },
                                    {
                                        title: '外套/夹克/长袖/卫衣',
                                        disabled: true,
                                    },
                                ],
                            },
                        ],
                        sort: '45',
                        status: true,
                    },
                    {
                        sort: '456',
                        status: true,
                    },
                ],
                self: this,
            };
        },
        methods: {
            addCategory() {},
            edit() {},
            remove(index) {
                this.categoryData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="shop-category">
            <tabs value="name1">
                <tab-pane label="店铺分类" name="name1">
                    <card :bordered="false">
                        <div class="category-list">
                            <i-button class="first-btn" type="ghost" @click.native="addCategory">+新增分类</i-button>
                            <i-button type="ghost">批量删除</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            <i-table :columns="categoryColumns"
                                     :context="self"
                                     :data="categoryData"
                                     ref="categoryList"
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