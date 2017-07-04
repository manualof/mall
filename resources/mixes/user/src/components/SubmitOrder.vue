<template>
    <div class="submit-order padding-attribute">
        <div class="container">
            <div class="select-address">
                <div>
                    <p class="select-title">确认订单</p>
                    <p>请仔细核对填写收货，发票等信息，以确保物流快递及时准确投递</p>
                </div>
                <div class="address-selected">
                    <h5>收货人信息</h5>
                    <div class="address-list" v-for="(item, index) in addressSelect">
                        <label class="form-control-radio">
                            <input type="radio" name="address" :checked="index == 0">
                            <div class="address clearfix">
                                <p>
                                    <span>{{ item.name }}</span>
                                    <span>{{ item.phone }}</span>
                                    <span class="address-detail">{{ item.address }}</span>
                                    <i v-if="item.isdefault">默认地址</i>
                                    <span class="pull-right" v-if="item.isdefault === false">
                                        <span>设为默认地址</span>
                                        <span>编辑</span>
                                        <span>删除</span>
                                    </span>
                                </p>
                            </div>
                        </label>
                    </div>
                    <div class="add-address">
                        <div class="clearfix">
                            <span class="text-right pull-left">收货人姓名</span>
                            <input
                                class="form-control pull-left"
                                type="text"
                                placeholder="请输入收货人姓名"
                                v-model="address.name">
                        </div>
                        <div class="clearfix">
                            <span class="text-right pull-left">手机号码</span>
                            <input
                                class="form-control pull-left"
                                type="text"
                                placeholder="手机号码为必填项"
                                v-model="address.phone">
                        </div>
                        <div class="clearfix">
                            <span class="text-right pull-left">所在地区</span>
                            <Cascader class="destination pull-left"
                                      :data="data"
                                      v-model="address.area">
                            </Cascader>
                        </div>
                        <div class="clearfix">
                            <span class="text-right pull-left">详细地址</span>
                            <textarea
                                class="form-control pull-left"
                                placeholder="无需重复填写省市区，小于50个字"
                                v-model="address.detail">
                            </textarea>
                        </div>
                        <label class="clearfix">
                            <div class="pull-left">
                                <input type="checkbox" v-model="address.isdefault">
                                <span></span>
                            </div>
                            <span class="pull-left">设为默认地址</span>
                        </label>
                        <div class="btn">
                            <a class="order-btn submit-btn pull-left">保存地址</a>
                            <a>取消</a>
                        </div>
                    </div>
                </div>
                <router-link class="select-btn" to="/personnal-center/shipping-address">新增收货地址</router-link>
            </div>
            <div class="address-selected self-take-select">
                <h5>使用自提门店</h5>
                <div>
                    <label class="form-control-radio">
                        <input type="radio" name="address">
                        <div class="address clearfix">
                            <p>
                                <span>{{ selfTake.name }}</span>
                                <span>{{ selfTake.phone }}</span>
                                <span class="address-detail">{{ selfTake.address }}</span>
                                <router-link to="/" class="self-take pull-right">修改自提信息</router-link>
                            </p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="pay-method">
                <h5 class="select-title">支付方式</h5>
                <div class="methods">
                    <label class="form-control-radio" v-for="method in methods">
                        <input type="radio" name="method">
                        <span>{{ method.name }}</span>
                    </label>
                </div>
            </div>
            <div class="pay-method invoice-info">
                <h5 class="select-title">发票信息</h5>
                <p>不需要发票 <a>修改</a></p>
            </div>
            <div class="ensure-information">
                <p class="select-title">商品清单</p>
                <ul class="product-head clearfix">
                    <li class="pull-left">商品信息</li>
                    <li class="pull-left text-center">单价(元)</li>
                    <li class="pull-left text-center">数量</li>
                    <li class="pull-left text-center">金额</li>
                </ul>
                <ul class="product-list">
                    <li v-for="order in submitOrder.productList">
                        <h5>店铺{{ order.shop }}</h5>
                        <ul class="order-detail clearfix">
                            <li class="pull-left clearfix">
                                <img class="pull-left" :src="order.img" alt="">
                                <div class="pull-left">
                                    <p>{{ order.name }}</p>
                                    <p>颜色: {{ order.color }} 尺码: {{ order.size }}</p>
                                </div>
                            </li>
                            <li class="pull-left text-center">￥{{ order.price }}</li>
                            <li class="pull-left text-center">{{ order.num }}</li>
                            <li class="pull-left text-center">￥{{ order.price * order.num }}</li>
                        </ul>
                        <div>
                            买家留言： <input class="form-control"
                                         type="text"
                                         placeholder="限50字（对本次交易的说明，建议填写已经和商家达成一致的说明）">
                        </div>
                    </li>
                </ul>
                <div class="order-submit submit-btn">
                    <div class="order-submit-content clearfix">
                        <span class="order-price">-&yen;{{ submitOrder.freight }}</span>
                        <span class="name">运费：</span>
                    </div>
                    <div class="order-submit-content clearfix">
                        <span class="order-price price">&yen;{{ total_price}}</span>
                        <span class="name">金额(不含运费)：</span>
                    </div>
                    <router-link :to="{ name: 'order-success' }" class="order-btn submit-btn">提交订单</router-link>
                </div>
            </div>
        </div>
        <right-side></right-side>
    </div>
</template>

<script>
    import Cascader from 'iview/src/components/cascader';
    import order from '../assets/images/details/order.png';
    import RightSide from './dashboard/RightSide';

    export default {
        components: {
            RightSide,
            Cascader,
        },
        data() {
            return {
                address: {
                    name: '',
                    phone: '',
                    area: [],
                    detail: '',
                    isdefault: false,
                },
                addressSelect: [
                    {
                        address: '北京市  北京市  朝阳区 解放路  某贸大厦1604',
                        isdefault: true,
                        name: '王茂',
                        phone: 12345676543,
                    },
                    {
                        address: '北京市  北京市  朝阳区 解放路  某贸大厦1604',
                        isdefault: false,
                        name: '王茂',
                        phone: 12345676543,
                    },
                ],
                data: [
                    {
                        children: [
                            {
                                label: '故宫',
                                value: 'gugong',
                            },
                            {
                                label: '天坛',
                                value: 'tiantan',
                            },
                            {
                                label: '王府井',
                                value: 'wangfujing',
                            },
                        ],
                        label: '北京',
                        value: 'beijing',
                    },
                    {
                        children: [
                            {
                                value: 'nanjing',
                                label: '南京',
                                children: [
                                    {
                                        value: 'fuzimiao',
                                        label: '夫子庙',
                                    },
                                ],
                            },
                            {
                                value: 'suzhou',
                                label: '苏州',
                                children: [
                                    {
                                        value: 'zhuozhengyuan',
                                        label: '拙政园',
                                    },
                                    {
                                        value: 'shizilin',
                                        label: '狮子林',
                                    },
                                ],
                            },
                        ],
                        label: '江苏',
                        value: 'jiangsu',
                    },
                ],
                methods: [
                    {
                        name: '在线支付',
                    },
                    {
                        name: '货到付款',
                    },
                ],
                selfTake: {
                    address: '北京市  北京市  朝阳区 解放路  某贸大厦1604',
                    name: '王茂',
                    phone: 12345676543,
                },
                submitOrder: {
                    integral_num: 1660,
                    integral_price: 16.6,
                    freight: 20,
                    productList: [
                        {
                            color: '白色',
                            img: order,
                            name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童可爱短袜5双装',
                            num: 2,
                            price: 39.9,
                            size: 'L',
                            shop: 'XXX母婴用品店',
                        },
                        {
                            color: '白色',
                            img: order,
                            name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童可爱短袜5双装',
                            num: 2,
                            price: 126.07,
                            size: 'M',
                            shop: 'XXX母婴用品店',
                        },
                    ],
                },
            };
        },
        computed: {
            total_price() {
                let totalPrice = 0;
                this.submitOrder.productList.forEach(item => {
                    totalPrice += item.price * item.num;
                });
                return totalPrice.toFixed(2);
            },
        },
    };
</script>