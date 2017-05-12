<script>
    import injection from '../helpers/injection';

    export default {
        data() {
            return {
                switch1: true,
                typeColumns: [
                    {
                        title: '用户名',
                        key: 'userName',
                        width: 150,
                        align: 'center',
                        fixed: 'left',
                    },
                    {
                        title: '真实姓名',
                        key: 'reallyName',
                        width: 150,
                        align: 'center',
                    },
                    {
                        title: '服务站名称',
                        key: 'serviceName',
                        width: 150,
                        align: 'center',
                    },
                    {
                        title: '所在地区',
                        key: 'area',
                        width: 150,
                        align: 'center',
                    },
                    {
                        title: '详细地址',
                        key: 'address',
                        width: 300,
                        align: 'center',
                    },
                    {
                        title: '状态',
                        key: 'status',
                        width: 150,
                        align: 'center',
                        render() {
                            return `<i-switch size="large" v-model="row.status">
                                    <span slot="open">开启</span>
                                    <span slot="close">关闭</span>
                                    </i-switch>`;
                        },
                    },
                    {
                        title: '申请时间',
                        key: 'applicationTime',
                        width: 150,
                        align: 'center',
                    },
                    {
                        title: '操作',
                        key: 'action',
                        fixed: 'right',
                        width: 200,
                        align: 'center',
                        render(row, column, index) {
                            return `<i-button type="ghost" class="delete-ad"
                                    @click.native="edit(${index})">编辑</i-button>
                                    <i-button type="ghost" class="delete-ad"
                                    @click.native="look(${index})">查看订单</i-button>`;
                        },
                    },
                ],
                typeData: [
                    {
                        userName: '克罗地亚',
                        reallyName: '王琦铭',
                        serviceName: '财富中心自提点',
                        area: '陕西省西安市',
                        address: '陕西省西安市高新区高新二路国土资源大厦公寓楼',
                        applicationTime: '2017-2-3',
                        status: true,
                    },
                    {
                        userName: '克罗地亚',
                        reallyName: '王琦铭',
                        serviceName: '财富中心自提点',
                        area: '陕西省西安市',
                        address: '陕西省西安市高新区高新二路国土资源大厦公寓楼',
                        applicationTime: '2017-2-3',
                        status: true,
                    },
                    {
                        userName: '克罗地亚',
                        reallyName: '王琦铭',
                        serviceName: '财富中心自提点',
                        area: '陕西省西安市',
                        address: '陕西省西安市高新区高新二路国土资源大厦公寓楼',
                        applicationTime: '2017-2-3',
                        status: false,
                    },
                    {
                        userName: '克罗地亚',
                        reallyName: '王琦铭',
                        serviceName: '财富中心自提点',
                        area: '陕西省西安市',
                        address: '陕西省西安市高新区高新二路国土资源大厦公寓楼',
                        applicationTime: '2017-2-3',
                        status: true,
                    },
                ],
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
                managementSearch: '',
            };
        },
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        methods: {
            addData() {
                const self = this;
                self.$router.push({
                    path: 'delivery/add',
                });
            },
            edit() {
                const self = this;
                self.$router.push({
                    path: 'delivery/edit',
                });
            },
            look() {
                const self = this;
                self.$router.push({
                    path: 'delivery/look',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="operation-delivery">
            <tabs value="name1">
                <tab-pane label="自提点管理" name="name1">
                    <div class="prompt-box">
                        <p>提示</p>
                        <p>提示
                            物流自提服务站关闭后，被用户选择设置成收货地址的记录会被删除，请谨慎操作</p>
                    </div>
                    <div class="album-action">
                        <i-button class="add-data" type="ghost" @click.native="addData">+新增数据</i-button>
                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                        <div class="goods-body-header-right">
                            <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                <i-select v-model="managementSearch" slot="prepend" style="width: 150px;">
                                    <i-option v-for="item in searchList"
                                              :value="item.value">{{ item.label }}</i-option>
                                </i-select>
                                <i-button slot="append" type="primary">搜索</i-button>
                            </i-input>
                        </div>
                    </div>
                    <i-table highlight-row :columns="typeColumns" :context="self"
                             :data="typeData" ref="managementTable"></i-table>
                    <div class="page">
                        <page :total="150" show-elevator></page>
                    </div>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>