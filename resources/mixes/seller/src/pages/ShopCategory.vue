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
                        title: '排序',
                        type: 'index',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'navigateName',
                        title: '导航名称',
                        width: 300,
                    },
                    {
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
                        navigateName: '首页',
                        status: true,
                    },
                    {
                        navigateName: '首页',
                        status: true,
                    },
                    {
                        navigateName: '首页',
                        status: true,
                    },
                    {
                        navigateName: '首页',
                        status: true,
                    },
                ],
                self: this,
            };
        },
        methods: {
            addNavigate() {
                const self = this;
                self.$router.push(
                    {
                        path: 'category/add',
                    },
                );
            },
            edit() {
                const self = this;
                self.$router.push(
                    {
                        path: 'category/edit',
                    },
                );
            },
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