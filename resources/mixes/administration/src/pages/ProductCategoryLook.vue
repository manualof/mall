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
                list: [
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
                columns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        key: 'sort',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '64px',
                                },
                            });
                        },
                        title: '排序',
                        width: 150,
                    },
                    {
                        key: 'typeName',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '128px',
                                },
                            });
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
                                                            self.lookSubordinate();
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
                                            self.removeAd(data.index);
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
                searchCategory: '',
                searchWord: '',
            };
        },
        methods: {
            addData() {
                const self = this;
                self.$router.push({
                    path: 'look/add',
                });
            },
            addSubordinate() {
                const self = this;
                self.$router.push({
                    path: 'look/add/under',
                });
            },
            editType() {
                const self = this;
                self.$router.push({
                    path: 'look/edit',
                });
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            lookSubordinate() {
                const self = this;
                self.$router.push({
                    path: 'look/under',
                });
            },
            remove(index) {
                this.list.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-category-look">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>分类管理—"珠宝手表"的下级列表(二级)</span>
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
                        <i-button @click="deleteData" type="ghost">批量删除</i-button>
                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                    </div>
                    <i-table ref="goodTable" highlight-row class="shop-table"
                             :columns="columns" :data="list"></i-table>
                </div>
                <div class="page">
                    <page :total="100" show-elevator></page>
                </div>
            </card>
        </div>
    </div>
</template>