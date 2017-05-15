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
                searchList: [
                    {
                        label: '店铺名称',
                        value: '订单编号',
                    },
                    {
                        label: '商品名称',
                        value: '商品名称',
                    },
                    {
                        label: '商品分类',
                        value: '商品分类',
                    },
                ],
                self: this,
                typeColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 100,
                    },
                    {
                        key: 'level',
                        title: '级别',
                    },
                    {
                        key: 'levelName',
                        title: '等级名称',
                    },
                    {
                        key: 'goodsNum',
                        title: '可发布商品数',
                    },
                    {
                        key: 'pictureNum',
                        title: '可上传图片数',
                    },
                    {
                        key: 'charges',
                        title: '收费标准',
                    },
                    {
                        key: 'action',
                        title: '操作',
                        width: 180,
                        render(row, column, index) {
                            return `<i-button type="ghost" class="delete-ad" @click.native="edit">编辑</i-button>
                                <i-button type="ghost" class="delete-ad" @click.native="remove(${index})">删除</i-button>`;
                        },
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
//            edit() {
//                const self = this;
//                self.$router.push({
//                    path: 'level/edit',
//                });
//            },
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
                            <i-button class="add-data" type="ghost" @click.native="deleteData">批量删除</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            <div class="goods-body-header-right">
                                <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                    <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                        <i-option v-for="item in searchList"
                                                  :value="item.value">{{ item.label }}</i-option>
                                    </i-select>
                                    <i-button slot="append" type="primary">搜索</i-button>
                                </i-input>
                            </div>
                        </div>
                        <i-table highlight-row :columns="typeColumns" :context="self"
                                 :data="typeData"></i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>