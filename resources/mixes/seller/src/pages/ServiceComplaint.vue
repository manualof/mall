<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                complaintList: [
                    {
                        label: '进行中',
                        value: '1',
                    },
                    {
                        label: '已完成',
                        value: '2',
                    },
                ],
                searchList: [
                    {
                        label: '投诉人',
                        value: '1',
                    },
                    {
                        label: '投诉主题',
                        value: '2',
                    },
                    {
                        label: '投诉编号',
                        value: '3',
                    },
                ],
                complaintColumns: [
                    {
                        align: 'center',
                        key: 'complaintNumber',
                        title: '投诉编号',
                    },
                    {
                        align: 'center',
                        key: 'complaintGoods',
                        title: '投诉商品',
                    },
                    {
                        key: 'complaintTheme',
                        title: '投诉主题',
                        align: 'center',
                    },
                    {
                        align: 'center',
                        key: 'complaintTime',
                        title: '投诉时间',
                    },
                    {
                        align: 'center',
                        key: 'complaintStatus',
                        title: '投诉状态',
                    },
                    {
                        align: 'center',
                        key: 'complaintAction',
                        render(row, column, index) {
                            return `<i-button @click.native="remove(${index})" size="small" type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                complaintData: [
                    {
                        complaintNumber: 2646846526,
                        complaintGoods: '商品名称商品名称',
                        complaintTheme: '尺码不标准',
                        complaintTime: '2017-04-01  16:30:31',
                        complaintStatus: '投诉中',
                    },
                    {
                        complaintNumber: 2646846526,
                        complaintGoods: '商品名称商品名称',
                        complaintTheme: '尺码不标准',
                        complaintTime: '2017-04-01  16:30:31',
                        complaintStatus: '投诉中',
                    },
                    {
                        complaintNumber: 2646846526,
                        complaintGoods: '商品名称商品名称',
                        complaintTheme: '尺码不标准',
                        complaintTime: '2017-04-01  16:30:31',
                        complaintStatus: '投诉中',
                    },
                    {
                        complaintNumber: 2646846526,
                        complaintGoods: '商品名称商品名称',
                        complaintTheme: '尺码不标准',
                        complaintTime: '2017-04-01  16:30:31',
                        complaintStatus: '投诉中',
                    },
                    {
                        complaintNumber: 2646846526,
                        complaintGoods: '商品名称商品名称',
                        complaintTheme: '尺码不标准',
                        complaintTime: '2017-04-01  16:30:31',
                        complaintStatus: '投诉中',
                    },
                ],
                self: this,
            };
        },
        methods: {
            remove(index) {
                this.complaintData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-complaint">
            <tabs value="name1">
                <tab-pane label="投诉管理" name="name1">
                    <card :bordered="false">
                        <div class="analysis-content">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <ul class="clearfix">
                                        <li class="store-body-header-right">
                                            <i-input v-model="applicationWord" placeholder="请输入关键词进行搜索">
                                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                                    <i-option v-for="item in searchList"
                                                              :value="item.value">{{ item.label }}</i-option>
                                                </i-select>
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </li>
                                        <li>
                                            处理状态
                                            <i-select v-model="model2" style="width:124px">
                                                <i-option v-for="item in complaintList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </li>
                                        <li>
                                            下单时间
                                            <date-picker type="date" placeholder="选择日期"
                                                         style="width: 124px"></date-picker>
                                            -
                                            <date-picker type="date" placeholder="选择日期"
                                                         style="width: 124px"></date-picker>
                                        </li>
                                    </ul>
                                </div>
                                <i-table :columns="complaintColumns"
                                         :context="self"
                                         :data="complaintData"
                                         ref="complaintList">
                                </i-table>
                                <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>