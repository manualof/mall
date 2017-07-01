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
                managementSearch: '',
                self: this,
                typeColumns: [
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
                        render(row, column, index) {
                            return `<i-button type="ghost" class="delete-ad" @click.native="edit">编辑</i-button>
                                    <i-button class="delete-ad" @click.native="remove(${index})"
                                     type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                typeData: [
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
            };
        },
        methods: {
            deleteData() {},
            edit() {
                const self = this;
                self.$router.push({
                    path: 'level/edit',
                });
            },
            newAddData() {
                const self = this;
                self.$router.push({
                    path: 'level/add',
                });
            },
            remove(index) {
                this.typeData.splice(index, 1);
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
                            <i-button class="add-data" type="ghost" @click.native="newAddData">+新增数据</i-button>
                            <i-button type="ghost" @click.native="deleteData">批量删除</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            <div class="goods-body-header-right">
                                <i-input v-model="managementWord" placeholder="等级名称">
                                    <i-button slot="append" type="primary">搜索</i-button>
                                </i-input>
                            </div>
                        </div>
                        <i-table highlight-row :columns="typeColumns" :context="self" :data="typeData"></i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>