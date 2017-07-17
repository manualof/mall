<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            window.console.log(to);
            injection.loading.start();
            const data = {};
            if (to.query.parent) {
                data.parent_id = to.query.parent;
            }
            injection.http.post(`${window.api}/mall/admin/product/category/list`, data).then(response => {
                window.console.log(response);
                next(vm => {
                    vm.category = response.data.category;
                    vm.level = response.data.level;
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
                category: {},
                columns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        key: 'order',
                        title: '排序',
                        width: 150,
                    },
                    {
                        key: 'name',
                        title: '分类名称',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'deposit',
                        render(h, data) {
                            return `${data.row.deposit} %`;
                        },
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
                        render(h, data) {
                            return h('div', [
                                h('dropdown', {
                                    scopedSlots: {
                                        list() {
                                            return h('dropdown-menu', [
                                                h('dropdown-item', {
                                                    nativeOn: {
                                                        click() {
                                                            self.editType();
                                                        },
                                                    },
                                                }, '编辑分类信息'),
                                                h('dropdown-item', {
                                                    nativeOn: {
                                                        click() {
                                                            self.addSubordinate();
                                                        },
                                                    },
                                                }, '新增下级分类'),
                                                h('dropdown-item', {
                                                    nativeOn: {
                                                        click() {
                                                            self.$router.push({
                                                                path: '/mall/goods/category',
                                                                query: {
                                                                    parent: data.row.id,
                                                                },
                                                            });
                                                        },
                                                    },
                                                }, '查看下级分类'),
                                            ]);
                                        },
                                    },
                                }, [
                                    h('i-button', {
                                        props: {
                                            size: 'small',
                                            type: 'ghost',
                                        },
                                    }, [
                                        '设置',
                                        h('icon', {
                                            props: {
                                                type: 'arrow-down-b',
                                            },
                                        }),
                                    ]),
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
                        width: 200,
                    },
                ],
                level: 0,
                list: [],
                pagination: {
                    current_page: 1,
                },
                searchCategory: '',
                searchWord: '',
            };
        },
        methods: {
            addData() {
                const self = this;
                self.$router.push({
                    path: 'category/add',
                });
            },
            addSubordinate() {
                const self = this;
                self.$router.push({
                    path: 'category/add/under',
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
                this.list.splice(index, 1);
            },
        },
        watch: {
            $route: {
                handler(route) {
                    const self = this;
                    self.$notice.open({
                        title: '正在刷新数据...',
                    });
                    self.$loading.start();
                    self.$http.post(`${window.api}/mall/admin/product/category/list`, {
                        parent_id: route.query.parent,
                    }).then(response => {
                        window.console.log(response);
                        self.category = response.data.category;
                        self.level = response.data.level;
                        self.list = response.data.data.map(item => {
                            item.loading = false;
                            return item;
                        });
                        self.pagination = response.data.pagination;
                        self.$loading.finish();
                    }).catch(() => {
                        self.loading.fail();
                    });
                },
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-category-look">
            <div class="edit-link-title" v-if="level === 1">
                <span style="margin-left: 20px">分类管理</span>
            </div>
            <div class="edit-link-title" v-if="level === 2">
                <i-button type="text" @click.native="$router.go(-1)">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>分类管理 — "{{ category.name }}"的下级列表(二级)</span>
            </div>
            <card :bordered="false">
                <div class="prompt-box">
                    <p>提示</p>
                    <p>当店主添加商品时可选择商品分类，用户可根据分类查询商品列表</p>
                    <p>对分类做任何更改后，都需要到 站点设置>清理缓存 清理商品分类，新的设置才会生效</p>
                </div>
                <div class="store-body">
                    <div class="store-body-header">
                        <i-button @click.native="addData" type="ghost">+新增数据</i-button>
                        <i-button @click="exportData" type="ghost">导出数据</i-button>
                        <i-button @click="deleteData" type="ghost">批量删除</i-button>
                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                    </div>
                    <i-table class="shop-table"
                             :columns="columns"
                             :data="list"
                             highlight-row
                             ref="goodTable"></i-table>
                </div>
                <div class="page">
                    <page :current="pagination.current_page"
                          :page-size="pagination.per_page"
                          :total="pagination.total"
                          show-elevator></page>
                </div>
            </card>
        </div>
    </div>
</template>