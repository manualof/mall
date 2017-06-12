<script>
    import expandRow from './ExpandRow.vue';
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        components: {
            expandRow,
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
                        type: 'expand',
                        width: 50,
                        render(h, params) {
                            return h(expandRow, {
                                props: {
                                    row: params.row,
                                },
                            });
                        },
                    },
                    {
                        key: 'categoryName',
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
                        job: '数据工程师',
                        interest: '羽毛球',
                        birthday: '1991-05-14',
                        sort: '45',
                        status: true,
                        title: '海外代购',
                    },
                    {
                        job: '数据工程师',
                        interest: '羽毛球',
                        birthday: '1991-05-14',
                        sort: '456',
                        status: true,
                    },
                ],
                categoryList: [
                    {
                        list: [
                            {
                                sort: 22,
                                status: true,
                                title: '鞋子',
                            },
                            {
                                sort: 15,
                                status: true,
                                title: '短袖/polo/衬衫',
                            },
                            {
                                sort: 2,
                                status: true,
                                title: '外套/夹克/长袖/卫衣',
                            },
                        ],
                        sort: 300,
                        status: true,
                        title: '海外代购',
                    },
                    {
                        list: [
                            {
                                sort: 22,
                                status: true,
                                title: '鞋子',
                            },
                            {
                                sort: 15,
                                status: true,
                                title: '短袖/polo/衬衫',
                            },
                            {
                                sort: 2,
                                status: true,
                                title: '外套/夹克/长袖/卫衣',
                            },
                        ],
                        sort: 300,
                        status: true,
                        title: '海外代购1',
                    },
                ],
                checkAll: false,
                checkAllGroup: [],
                indeterminate: true,
                self: this,
            };
        },
        methods: {
            addCategory() {},
            checkAllGroupChange(data) {
                if (data.length === this.categoryList.length) {
                    this.indeterminate = false;
                    this.checkAll = true;
                } else if (data.length > 0) {
                    this.indeterminate = true;
                    this.checkAll = false;
                } else {
                    this.indeterminate = false;
                    this.checkAll = false;
                }
            },
            edit() {},
            handleCheckAll() {
                if (this.indeterminate) {
                    this.checkAll = false;
                } else {
                    this.checkAll = !this.checkAll;
                }
                this.indeterminate = false;
                if (this.checkAll) {
                    this.checkAllGroup = this.categoryList;
                } else {
                    this.checkAllGroup = [];
                }
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
                            <!--<div class="category-table">
                                <div class="top-title">
                                    <checkbox
                                            :indeterminate="indeterminate"
                                            :value="checkAll"
                                            @click.prevent.native="handleCheckAll"
                                            style="width: 6%"></checkbox>
                                    <span style="width: 26%">分类名称</span>
                                    <span style="width: 18%">排序</span>
                                    <span style="width: 30%">显示</span>
                                    <span style="width: 10%" class="action">操作</span>
                                </div>
                                <checkbox-group v-model="checkAllGroup" @on-change="checkAllGroupChange">
                                    <checkbox :label="item" v-for="(item, index) in categoryList">
                                        <div class="table-content">
                                            <collapse v-model="value2" accordion>
                                                <panel name="1">
                                                    <div class="table-item">
                                                        <span style="width: 27%">{{ item.title }}
                                                        <i-button type="ghost">新增下级</i-button></span>
                                                        <span style="width: 19%">{{ item.sort }}</span>
                                                        <span style="width: 30%">
                                                            <i-switch size="large" v-model="item.status">
                                                            <span slot="open">开启</span>
                                                            <span slot="close">关闭</span>
                                                        </i-switch>
                                                        </span>
                                                        <span style="width: 16%" class="action">
                                                            <i-button class="first-btn"
                                                                      type="ghost">编辑</i-button>
                                                            <i-button
                                                                      class="delete-ad" type="ghost">删除</i-button>
                                                        </span>
                                                    </div>
                                                    <div slot="content">
                                                        <div class="table-item" v-for="item in item.list">
                                                            <span style="width: 27%">{{ item.title }}</span>
                                                            <span style="width: 19%">{{ item.sort }}</span>
                                                            <span style="width: 30%">
                                                                <i-switch size="large" v-model="item.status">
                                                                    <span slot="open">开启</span>
                                                                    <span slot="close">关闭</span>
                                                                </i-switch>
                                                            </span>
                                                                <span style="width: 16%" class="action">
                                                                <i-button class="first-btn"
                                                                          type="ghost">编辑</i-button>
                                                                <i-button
                                                                        class="delete-ad" type="ghost">删除</i-button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </panel>
                                            </collapse>
                                        </div>
                                    </checkbox>
                                </checkbox-group>
                            </div>-->
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