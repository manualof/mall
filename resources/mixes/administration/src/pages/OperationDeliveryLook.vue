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
                        title: '订单号',
                        key: 'orderNum',
                    },
                    {
                        title: '运单号',
                        key: 'waybill',
                    },
                    {
                        title: '收货人',
                        key: 'receiver',
                    },
                    {
                        title: '手机号',
                        key: 'phone',
                    },
                    {
                        title: '座机号',
                        key: 'seatNumber',
                    },
                    {
                        title: '状态',
                        key: 'status',
                    },
                ],
                typeData: [
                    {
                        orderNum: '56347567',
                        waybill: '436756863432',
                        receiver: '王琪梦',
                        phone: '15623456876',
                        seatNumber: '02988555544',
                        status: '已完成',
                    },
                    {
                        orderNum: '56347567',
                        waybill: '436756863432',
                        receiver: '王琪梦',
                        phone: '15623456876',
                        seatNumber: '02988555544',
                        status: '已完成',
                    },
                    {
                        orderNum: '56347567',
                        waybill: '436756863432',
                        receiver: '王琪梦',
                        phone: '15623456876',
                        seatNumber: '02988555544',
                        status: '已完成',
                    },
                    {
                        orderNum: '56347567',
                        waybill: '436756863432',
                        receiver: '王琪梦',
                        phone: '15623456876',
                        seatNumber: '02988555544',
                        status: '已完成',
                    },
                ],
            };
        },
        methods: {
            exportData() {
                this.$refs.orderTable.exportCsv({
                    filename: '订单列表数据',
                });
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="operation-delivery-look">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>自提点—查看订单</span>
            </div>
            <card :bordered="false">
                <div class="album-action">
                    <i-button class="add-data" type="ghost" @click.native="exportData">导出数据</i-button>
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
                         :data="typeData" ref="orderTable"></i-table>
                <div class="page">
                    <page :total="150" show-elevator></page>
                </div>
            </card>
        </div>
    </div>
</template>
