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
                        key: 'levelName',
                        title: '等级名称',
                    },
                    {
                        align: 'center',
                        key: 'goodsNum',
                        title: '可发布商品数',
                    },
                    {
                        align: 'center',
                        key: 'pictureNum',
                        title: '可上传图片数',
                    },
                    {
                        align: 'center',
                        key: 'charges',
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
                list: [
                    {
                        charges: 6666,
                        goodsNum: 166,
                        level: 1,
                        levelName: '系统默认',
                        pictureNum: 56,
                    },
                    {
                        charges: 6666,
                        goodsNum: 166,
                        level: 1,
                        levelName: '白金店铺',
                        pictureNum: 56,
                    },
                    {
                        charges: 6666,
                        goodsNum: 166,
                        level: 1,
                        levelName: '黄金店铺',
                        pictureNum: 56,
                    },
                    {
                        charges: 6666,
                        goodsNum: 166,
                        level: 2,
                        levelName: '系统默认',
                        pictureNum: 56,
                    },
                ],
                managementSearch: '',
                pagination: {},
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
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>