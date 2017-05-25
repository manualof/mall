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
                navigateColumns: [
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
                navigateData: [
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
                        path: 'navigate/add',
                    },
                );
            },
            edit() {
                const self = this;
                self.$router.push(
                    {
                        path: 'navigate/edit',
                    },
                );
            },
            remove(index) {
                this.navigateData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="shop-navigate">
            <tabs value="name1">
                <tab-pane label="导航列表" name="name1">
                    <card :bordered="false">
                        <div class="navigate-list">
                            <i-button type="ghost" @click.native="addNavigate">+添加导航</i-button>
                            <i-table class="navigate-table"
                                     :columns="navigateColumns"
                                     :context="self"
                                     :data="navigateData"
                                     ref="navigateList"
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