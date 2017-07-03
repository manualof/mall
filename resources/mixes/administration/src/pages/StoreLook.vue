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
                managementColumns: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'shopID',
                        title: '店铺ID',
                        width: 190,
                    },
                    {
                        align: 'center',
                        key: 'shopName',
                        title: '店铺名称',
                        width: 170,
                    },
                    {
                        align: 'center',
                        key: 'ownerId',
                        title: '店主账号',
                        width: 170,
                    },
                    {
                        align: 'center',
                        key: 'businessNumber',
                        title: '商家账号',
                        width: 170,
                    },
                    {
                        align: 'center',
                        key: 'shopImg',
                        render() {
                            return '<icon type="image"></icon>';
                        },
                        title: '店铺头像',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'shopLogo',
                        render() {
                            return '<icon type="image"></icon>';
                        },
                        title: '店铺LOGO',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'shopLevel',
                        title: '店铺等级',
                        width: 170,
                    },
                    {
                        align: 'center',
                        key: 'shopTime',
                        title: '开店时间',
                        width: 170,
                    },
                    {
                        align: 'left',
                        key: 'endTime',
                        title: '到期时间',
                        width: 170,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button class="first-btn" @click.native="remove(${index})"
                                    type="ghost" size="small">删除</i-button>
                                    <i-button @click.native="toEdit" type="ghost" size="small">编辑</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                managementData: [
                    {
                        businessNumber: '爱拍数码',
                        endTime: '2017-12-5',
                        ownerId: '545464554',
                        shopID: '65454654546',
                        shopImg: '541',
                        shopLevel: '钻石店铺',
                        shopLogo: '454',
                        shopName: '默认',
                        shopTime: '2017-12-5',
                    },
                    {
                        businessNumber: '爱拍数码',
                        endTime: '2017-12-5',
                        ownerId: '545464554',
                        shopID: '65454654546',
                        shopImg: '541',
                        shopLevel: '钻石店铺',
                        shopLogo: '454',
                        shopName: '默认',
                        shopTime: '2017-12-5',
                    },
                    {
                        businessNumber: '爱拍数码',
                        endTime: '2017-12-5',
                        ownerId: '545464554',
                        shopID: '65454654546',
                        shopImg: '541',
                        shopLevel: '钻石店铺',
                        shopLogo: '454',
                        shopName: '默认',
                        shopTime: '2017-12-5',
                    },
                    {
                        businessNumber: '爱拍数码',
                        endTime: '2017-12-5',
                        ownerId: '545464554',
                        shopID: '65454654546',
                        shopImg: '541',
                        shopLevel: '钻石店铺',
                        shopLogo: '454',
                        shopName: '默认',
                        shopTime: '2017-12-5',
                    },
                ],
                managementWord: '',
                managementSearch: '',
                searchList: [
                    {
                        label: '店铺名称',
                        value: '1',
                    },
                    {
                        label: '店主账号',
                        value: '2',
                    },
                    {
                        label: '商家账号',
                        value: '3',
                    },
                ],
                self: this,
            };
        },
        methods: {
            exportData() {
                this.$refs.managementTable.exportCsv({
                    filename: '店铺管理数据',
                });
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            remove(index) {
                this.managementData.splice(index, 1);
            },
            toEdit() {
                const self = this;
                self.$router.push({
                    path: 'look/edit',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="store-look">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>开店申请—查看</span>
            </div>
            <card :bordered="false">
                <div class="prompt-box">
                    <p>提示</p>
                    <p>如果当前时间超过店铺有效期或店铺处于关闭状态，前台将不能继续浏览该店铺，
                        但是店主仍然可以编辑该店铺</p>
                </div>
                <div class="store-body">
                    <div class="store-body-header">
                        <i-button class="export-btn" @click="exportData" type="ghost">导出数据</i-button>
                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                        <div class="store-body-header-right">
                            <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                    <i-option v-for="item in searchList"
                                              :value="item.value">{{ item.label }}</i-option>
                                </i-select>
                                <i-button slot="append" type="primary">搜索</i-button>
                            </i-input>
                        </div>
                    </div>
                    <i-table ref="managementTable"
                             highlight-row
                             class="shop-table"
                             :columns="managementColumns"
                             :context="self"
                             :data="managementData"></i-table>
                </div>
                <div class="page">
                    <page :total="100" show-elevator></page>
                </div>
            </card>
        </div>
    </div>
</template>