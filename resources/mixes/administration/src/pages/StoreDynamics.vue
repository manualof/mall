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
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'title',
                        title: '动态标题',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'name',
                        title: '店铺名称',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'id',
                        title: '店铺ID',
                    },
                    {
                        align: 'center',
                        key: 'isshow',
                        render(row) {
                            return `<span v-if="${row.status} === true" class="status-check">
                                    <icon type="checkmark-circled"></icon>是</span>
                                    <span v-if="${row.status} === false">
                                    <icon type="close-circled"></icon>否</span>`;
                        },
                        title: '是否推荐品牌',
                    },
                    {
                        align: 'center',
                        key: 'time',
                        title: '发表时间',
                    },
                    {
                        align: 'center',
                        key: 'num',
                        title: '转播数量',
                    },
                    {
                        align: 'center',
                        key: 'account',
                        title: '评论数量',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button size="small" type="ghost" @click.native="remove(${index})">删除</i-button>
                                    <i-button size="small" type="ghost" @click.native="edit">设置</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                brandData: [
                    {
                        account: 324,
                        id: 3,
                        isshow: '是',
                        name: 'karcher凯驰旗舰店',
                        num: 42,
                        status: true,
                        time: '2016-12-12  16:11:27',
                        title: '亲，我家又上新款了。',
                    },
                    {
                        account: 324,
                        id: 3,
                        isshow: '是',
                        name: 'karcher凯驰旗舰店',
                        num: 42,
                        status: true,
                        time: '2016-12-12  16:11:27',
                        title: '亲，我家又上新款了。',
                    },
                    {
                        account: 324,
                        id: 3,
                        isshow: '是',
                        name: 'karcher凯驰旗舰店',
                        num: 42,
                        status: true,
                        time: '2016-12-12  16:11:27',
                        title: '亲，我家又上新款了。',
                    },
                    {
                        account: 324,
                        id: 3,
                        isshow: '是',
                        name: 'karcher凯驰旗舰店',
                        num: 42,
                        status: true,
                        time: '2016-12-12  16:11:27',
                        title: '亲，我家又上新款了。',
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
            remove(index) {
                this.brandData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-dynamics">
            <tabs value="name1">
                <tab-pane label="店铺动态" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>如果动态信息存在不合法内容您可以将其状态设置为屏蔽或者直接删除</p>
                            <p>动态删除后其对应的评论也一并删除，请慎重</p>
                        </div>
                        <div class="brand-management">
                            <i-button class="add-data" type="ghost" @click.native="newAddData">全部评论</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                        </div>
                        <i-table :columns="brandColumns"
                                 :context="self"
                                 :data="brandData"
                                 highlight-row
                                 ref="brand">
                        </i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>