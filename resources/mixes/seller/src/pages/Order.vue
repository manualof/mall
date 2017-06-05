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
                loading: false,
                managementSearch: '',
                searchList: [
                    {
                        label: '店铺名称',
                        value: '店铺名称',
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
            };
        },
        methods: {
            settingPrice() {
                const self = this;
                self.$router.push(
                    {
                        path: 'goods/set',
                    },
                );
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="order-wrap">
            <tabs value="name1">
                <tab-pane label="所有订单" name="name1">
                    <card :bordered="false">
                        <div class="analysis-content clearfix">
                            <div class="order-money-content">
                                <div class="select-content">
                                    <ul class="clearfix">
                                        <li>
                                            下单时间
                                            <date-picker type="date" placeholder="选择日期"
                                                         style="width: 124px"></date-picker>
                                            -
                                            <date-picker type="date" placeholder="选择日期"
                                                         style="width: 124px"></date-picker>
                                        </li>
                                        <li class="store-body-header-right">
                                            <i-input v-model="applicationWord" placeholder="请输入关键词进行搜索">
                                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                                    <i-option v-for="item in searchList"
                                                              :value="item.value">{{ item.label }}</i-option>
                                                </i-select>
                                                <i-button slot="append" type="primary">搜索</i-button>
                                            </i-input>
                                        </li>
                                    </ul>
                                </div>
                               <!-- <div class="page">
                                    <page :total="100" show-elevator></page>
                                </div>-->
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="待付款" name="name2">

                </tab-pane>
                <tab-pane label="待发货" name="name3">

                </tab-pane>
                <tab-pane label="已发货" name="name4">

                </tab-pane>
                <tab-pane label="已完成" name="name5">

                </tab-pane>
                <tab-pane label="已取消" name="name6">

                </tab-pane>
            </tabs>
        </div>
    </div>
</template>