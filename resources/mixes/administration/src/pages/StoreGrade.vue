<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            injection.loading.start();
            injection.http.post(`${window.api}/mall/admin/store/grade/list`).then(response => {
                window.console.log(response);
                next(vm => {
                    vm.list = response.data.data.map(item => {
                        item.loading = false;
                        return item;
                    });
                    vm.pagination = response.data.pagination;
                    injection.loading.finish();
                    injection.sidebar.active('mall');
                });
            }).catch(() => {
                injection.loading.fail();
            });
        },
        data() {
            const self = this;
            return {
                columns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'level',
                        title: '级别',
                    },
                    {
                        align: 'center',
                        key: 'name',
                        title: '等级名称',
                    },
                    {
                        align: 'center',
                        key: 'publish_limit',
                        title: '可发布商品数',
                    },
                    {
                        align: 'center',
                        key: 'upload_limit',
                        title: '可上传商品数',
                    },
                    {
                        align: 'center',
                        key: 'price',
                        title: '收费标准',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('div', [
                                h('router-link', {
                                    props: {
                                        to: '/mall/store/grade/edit',
                                    },
                                }, [
                                    h('i-button', {
                                        props: {
                                            size: 'small',
                                            type: 'ghost',
                                        },
                                    }, '编辑'),
                                ]),
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
                                    style: {
                                        marginLeft: '10px',
                                    },
                                }, '删除'),
                            ]);
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                list: [],
                managementSearch: '',
                pagination: {
                    current_page: 1,
                },
            };
        },
        methods: {
            deleteData() {},
            remove(index) {
                this.list.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="store-level">
            <tabs value="name1">
                <tab-pane label="店铺等级" name="name1">
                    <card :bordered="false">
                        <div class="advertisement-action">
                            <router-link to="/mall/store/grade/create">
                                <i-button class="add-data" type="ghost">+新增数据</i-button>
                            </router-link>
                            <i-button type="ghost" @click.native="deleteData">批量删除</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            <div class="goods-body-header-right">
                                <i-input v-model="managementWord" placeholder="等级名称">
                                    <i-button slot="append" type="primary">搜索</i-button>
                                </i-input>
                            </div>
                        </div>
                        <i-table highlight-row :columns="columns" :data="list"></i-table>
                        <div class="page">
                            <page :current="pagination.current_page"
                                  :page-size="pagination.per_page"
                                  :total="pagination.total"
                                  show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>