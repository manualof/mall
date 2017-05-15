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
                        key: 'sort',
                        title: '规格排序',
                    },
                    {
                        key: 'typeId',
                        title: '规格ID',
                    },
                    {
                        key: 'typeName',
                        title: '规格名称',
                    },
                    {
                        key: 'positionId',
                        title: '快捷定位ID',
                    },
                    {
                        key: 'positionName',
                        title: '快捷定位名称',
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
                        positionId: '22',
                        positionName: '液晶电视',
                        sort: '6',
                        typeId: '0001',
                        typeName: '迪卡侬',
                    },
                    {
                        positionId: '22',
                        positionName: '液晶电视',
                        sort: '6',
                        typeId: '0001',
                        typeName: '迪卡侬',
                    },
                    {
                        positionId: '22',
                        positionName: '液晶电视',
                        sort: '6',
                        typeId: '0001',
                        typeName: '迪卡侬',
                    },
                ],
            };
        },
        methods: {
            edit() {
                const self = this;
                self.$router.push({
                    path: 'standard/edit',
                });
            },
            newAddData() {
                const self = this;
                self.$router.push({
                    path: 'standard/add',
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
        <div class="goods-standard">
            <tabs value="name1">
                <tab-pane label="规格管理" name="name1">
                    <div class="prompt-box">
                        <p>提示</p>
                        <p>规格将会对应到商品发布的规格，规格值由店铺自己增加</p>
                        <p>默认安装中会添加一个默认颜色规格，请不要删除，只有这个颜色规格才能在商品详细页显示为图片</p>
                    </div>
                    <div class="advertisement-action">
                        <i-button class="add-data" type="ghost" @click.native="newAddData">+新增数据</i-button>
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
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>