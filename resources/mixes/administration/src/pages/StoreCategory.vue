<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            const self = this;
            return {
                self: this,
                storeCategoryColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '48px',
                                },
                            });
                        },
                        title: '排序',
                    },
                    {
                        align: 'center',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '168px',
                                },
                            });
                        },
                        title: '分类名称',
                    },
                    {
                        align: 'center',
                        key: 'number',
                        title: '保证金数额',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('div', [
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.remove(data.index);
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                }, '删除'),
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.toSet();
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                    style: {
                                        marginLeft: '10px',
                                    },
                                }, '设置'),
                            ]);
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                storeCategoryData: [
                    {
                        number: 100,
                    },
                    {
                        number: 1000,
                    },
                    {
                        number: 10000,
                    },
                    {
                        number: 30000,
                    },
                    {
                        number: 50000,
                    },
                ],
            };
        },
        methods: {
            addData() {
                const self = this;
                self.$router.push({
                    path: 'category/add',
                });
            },
            remove(index) {
                this.storeCategoryData.splice(index, 1);
            },
            toSet() {
                const self = this;
                self.$router.push({
                    path: 'category/set',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="store-category">
            <tabs value="name1">
                <tab-pane label="店铺分类" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>商家入驻时可指定此处设置店铺分类</p>
                            <p>对分类作任何更改后，都需要到 设置 -> 清理缓存 清理店铺分类，新的设置才会生效</p>
                        </div>
                        <div class="store-body">
                            <div class="store-body-header">
                                <i-button class="export-btn" type="ghost" @click="addData">新增数据</i-button>
                                <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            </div>
                            <i-table class="shop-table"
                                     :columns="storeCategoryColumns"
                                     :data="storeCategoryData"
                                     :context="self"
                                     highlight-row
                                     ref="storeCategoryTable">
                            </i-table>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>