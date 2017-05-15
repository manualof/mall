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
                goods: {
                    endPrice: '',
                    startPrice: '',
                },
                goodsColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'goodsName',
                        title: '商品名称',
                    },
                    {
                        key: 'amount',
                        title: '销量',
                    },
                    {
                        key: 'action',
                        title: '操作',
                        width: 120,
                        render() {
                            return '<i-button type="ghost" size="small">查看</i-button>';
                        },
                    },
                ],
                goodsData: [
                    {
                        num: 1,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 2,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 3,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                    {
                        num: 4,
                        goodsName: 'xxx旗舰店',
                        amount: 99,
                    },
                ],
                informationList: [
                    {
                        title: '下单金额',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '下单会员数',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '下单量',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '下单商品数',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '平均价格',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '平均客单价',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '新增会员',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '会员数量',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '新增店铺',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '店铺数量',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '新增商品',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                    {
                        title: '商品数量',
                        intro: '有效订单的总金额（元）',
                        price: '0',
                    },
                ],
                loading: false,
                orders: {
                    endPrice: '',
                    startPrice: '',
                },
                self: this,
                shopColumns: [
                    {
                        key: 'num',
                        title: '序号',
                    },
                    {
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        key: 'orderAmount',
                        title: '下单金额',
                    },
                    {
                        key: 'action',
                        title: '操作',
                        width: 120,
                        render() {
                            return '<i-button type="ghost" size="small">查看</i-button>';
                        },
                    },
                ],
                shopData: [
                    {
                        num: 1,
                        shopName: 'xxx旗舰店',
                        orderAmount: '￥99.00',
                    },
                    {
                        num: 2,
                        shopName: 'xxx旗舰店',
                        orderAmount: '￥99.00',
                    },
                    {
                        num: 3,
                        shopName: 'xxx旗舰店',
                        orderAmount: '￥99.00',
                    },
                    {
                        num: 4,
                        shopName: 'xxx旗舰店',
                        orderAmount: '￥99.00',
                    },
                ],
            };
        },
        methods: {
            deleteArea(e) {
                console.log(e);
            },
            lookShop() {},
            lookGoods() {},
            priceSubmit() {
                const self = this;
                self.loading = true;
                self.$refs.goods.validate(valid => {
                    if (valid) {
                        window.console.log(valid);
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
            },
            orderSubmit() {
                const self = this;
                self.loading = true;
                self.$refs.orders.validate(valid => {
                    if (valid) {
                        window.console.log(valid);
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="statistics">
            <tabs value="name1">
                <tab-pane label="基本统计" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1.采用在线支付方式并且已付款：
                                2.采用货到付款方式并且交易已完成</p>
                        </div>
                        <div class="statistics-information">
                            <h5>2017-03-11 基本情况</h5>
                            <div class="information-content">
                                <row>
                                    <i-col span="6" v-for="item in informationList">
                                        <h5>{{ item.title }}</h5>
                                        <div>
                                            <span class="intro">{{ item.intro }}</span>
                                            <span class="price">{{ item.price }}</span>
                                        </div>
                                    </i-col>
                                </row>
                            </div>
                        </div>
                        <div class="statistics-information">
                            <h5>2017-03-11 销售走势</h5>
                            <div class="information-statistics">

                            </div>
                        </div>
                        <div class="table-information">
                            <row :gutter="16">
                                <i-col span="12">
                                    <h5>7日内店铺销售TOP30</h5>
                                    <i-table :columns="shopColumns" :context="self" :data="shopData"></i-table>
                                    <div class="page">
                                        <page :total="100" show-elevator></page>
                                    </div>
                                </i-col>
                                <i-col span="12">
                                    <h5>7日内商品销售TOP30</h5>
                                    <i-table :columns="goodsColumns" :context="self" :data="goodsData"></i-table>
                                    <div class="page">
                                        <page :total="100" show-elevator></page>
                                    </div>
                                </i-col>
                            </row>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="商品价格区间" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>设置商品价格区间，当对商品价格进行相关统计时按照以下设置的价格区间进行统计和显示</p>
                            <p>设置价格区间的几点建议：一、建议设置的第一价格区间起始额为0：二、价格区间应该设置完整，
                                不要缺少任何一个起始额和结束额：三、价格区间数值应该连贯，例：0~100，101~200</p>
                        </div>
                        <div class="goods-price-area">
                            <i-form ref="goods" :model="goods" :rules="ruleValidate" :label-width="180">
                                <form-item>
                                    <row>
                                        <i-col span="2" class="price-width">起始额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="startPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="2" class="price-width">结束额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="endPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="14">
                                            <i-button type="ghost" @click.native="deleteArea($event)" class="delete-color">刪除</i-button>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="2" class="price-width">起始额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="goods.startPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="2" class="price-width">结束额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="goods.endPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="14">
                                            <i-button type="ghost" @click.native="deleteArea" class="delete-color">刪除</i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <i-button type="ghost" @click.native="addArea" class="button-style">+添加区间</i-button>
                                </form-item>
                                <form-item>
                                    <i-button :loading="loading" type="primary" @click.native="priceSubmit" class="button-style">
                                        <span v-if="!loading">确认提交</span>
                                        <span v-else>正在提交…</span>
                                    </i-button>
                                </form-item>
                            </i-form>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="订单金额区间" name="name3">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>设置订单金额区间，当对订单金额进行相关统计时按照以下设置的价格区间进行统计和显示</p>
                            <p>设置价格区间的几点建议：一、建议设置的第一价格区间起始额为0：二、价格区间应该设置完整，
                                不要缺少任何一个起始额和结束额：三、价格区间数值应该连贯，例：0~100，101~200</p>
                        </div>
                        <div class="goods-price-area">
                            <i-form ref="orders" :model="orders" :rules="ruleValidate" :label-width="180">
                                <form-item>
                                    <row>
                                        <i-col span="2" class="price-width">起始额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="startPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="2" class="price-width">结束额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="endPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="14">
                                            <i-button type="ghost" @click.native="deleteArea" class="delete-color">刪除</i-button>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="2" class="price-width">起始额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="orders.startPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="2" class="price-width">结束额</i-col>
                                        <i-col span="2" class="input-width">
                                            <i-input v-model="orders.endPrice"></i-input>
                                        </i-col>
                                        <i-col span="1">元</i-col>
                                        <i-col span="14">
                                            <i-button type="ghost" @click.native="deleteArea" class="delete-color">刪除</i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <i-button type="ghost" @click.native="addArea" class="button-style">+添加区间</i-button>
                                </form-item>
                                <form-item>
                                    <i-button :loading="loading" type="primary" @click.native="orderSubmit" class="button-style">
                                        <span v-if="!loading">确认提交</span>
                                        <span v-else>正在提交…</span>
                                    </i-button>
                                </form-item>
                            </i-form>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>