<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/img_logo.png';

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
                order: [
                    {
                        amount: 22,
                        buyer: 'maijiaming',
                        color: '黑色',
                        createTimeL: '2017-02-09',
                        freight: '10.00',
                        image: image1,
                        name: 'MIUI/小米 小米手机4 小米4 MI4智能4G手机包邮 黑色 D-LT（4G）/TD-SCD',
                        num: 666666666666688,
                        orderMoney: '39.9',
                        payStyle: '在线支付',
                        price: '4678.00',
                        status: 1,
                        version: 'D-LTE（4G）/TD-SCDMA',
                    },
                ],
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
                        <table class="order-table">
                            <thead>
                            <tr class="thead-border">
                            <th class="th-name">商品名称</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>买家</th>
                            <th>订单金额</th>
                            <th>交易状态</th>
                            <th>操作</th>
                            </tr>
                            <tr class="space-bg">
                                <th colspan="8"></th>
                            </tr>
                            </thead>
                            <tbody v-for="(item, index) in order">
                            <tr class="space">
                                <td colspan="8">
                                    <span>订单号:</span>
                                    <span>下单时间:</span>
                                    <button class="print-btn">打印发货单</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <div class="goods-name-row">
                                            <div class="img">
                                                <img :src="item.image" alt="">
                                            </div>
                                            <div class="goods-name">
                                                <p>{{ item.name }}</p>
                                                <p>颜色:{{ item.color }}, 选择版本{{ item.version }}</p>
                                            </div>
                                        </div>
                                        <div class="goods-gifts">
                                            赠品<img :src="item.image" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>{{ item.price }}</td>
                                <td class="tip">{{ item.amount }}</td>
                                <td class="tip">{{ item.buyer }}</td>
                                <td>
                                    <p>&yen;{{ item.orderMoney }}</p>
                                    <p>(含运费{{ item.freight }})</p>
                                    <p>{{ item.payStyle }}</p>
                                </td>
                                <td>
                                    <p v-if="item.status === 1">等待买家付款</p>
                                    <p v-if="item.status === 2">待发货</p>
                                    <p v-if="item.status === 3">已取消</p>
                                    <p v-if="item.status === 4">交易完成</p>
                                    <p><a href="">订单详情</a></p>
                                </td>
                                <td>
                                    <i-button type="error" v-if="item.status === 1">取消订单</i-button>
                                    <i-button type="ghost" v-if="item.status === 2">设置发货</i-button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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