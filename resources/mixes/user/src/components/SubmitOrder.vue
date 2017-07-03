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
                    <div v-for="(item, index) in addressSelect">
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
                </div>
                <router-link class="select-btn" to="/personnal-center/shipping-address">新增收货地址</router-link>
            </div>
            <div class="address-selected self-take-select">
                <h5>使用自提门店</h5>
                <div>
                    <label class="form-control-radio">
                        <input type="radio" name="address" :checked="index == 0">
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
                <h5 class="select-title">确认商品信息</h5>
                <div class="methods">
                    <label class="form-control-radio" v-for="method in methods">
                        <input type="radio" name="method">
                        <span>{{ method.name }}</span>
                    </label>
                </div>
            </div>
            <div class="ensure-information">
                <p class="select-title">支付方式</p>
                <div class="product-information" v-for="item in submitOrder.productList">
                    <p class="name">{{ item.shop }}</p>
                    <table width="100%">
                        <thead>
                        <tr>
                            <th class="th-information">商品信息</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>金额</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ item.name }}</td>
                            <td><s>&yen;{{ item.price1 }}</s>
                                <p>&yen;{{ item.price2 }}</p></td>
                            <td>{{ item.num }}</td>
                            <td class="price">&yen;{{ item.price2 * item.num }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="order-submit submit-btn">
                    <div class="order-submit-content clearfix">
                        <span class="order-price">-&yen;{{ submitOrder.integral_price }}</span>
                        <div class="name">
                            <span class="integral">积分兑换({{ submitOrder.integral_num }})：</span>
                            <div class="check-box select">
                                <span><input type="checkbox" class="input_check" id="check1"><label
                                    for="check1"></label></span>
                            </div>
                        </div>
                    </div>
                    <div class="order-submit-content clearfix">
                        <span class="order-price">-&yen;{{ submitOrder.freight }}</span>
                        <span class="name">运费：</span>
                    </div>
                    <div class="order-submit-content clearfix">
                        <span class="order-price price">&yen;{{ total_price}}</span>
                        <span class="name">金额：</span>
                    </div>
                    <router-link :to="{ name: 'order-success' }" class="order-btn submit-btn">提交订单</router-link>
                </div>
            </div>
        </div>
        <right-side></right-side>
    </div>
</template>

<script>
    import RightSide from './dashboard/RightSide';

    export default {
        data() {
            return {
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
                            name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童可爱短袜5双装',
                            num: 2,
                            price1: 126.07,
                            price2: 39.9,
                            shop: 'XXX母婴用品店',
                        },
                        {
                            name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童可爱短袜5双装',
                            num: 2,
                            price1: 126.07,
                            price2: 39.9,
                            shop: 'XXX母婴用品店',
                        },
                        {
                            name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童可爱短袜5双装',
                            num: 2,
                            price1: 126.07,
                            price2: 39.9,
                            shop: 'XXX母婴用品店',
                        },
                        {
                            name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童可爱短袜5双装',
                            num: 2,
                            price1: 126.07,
                            price2: 39.9,
                            shop: 'XXX母婴用品店',
                        },
                    ],
                },
            };
        },
        components: {
            RightSide,
        },
        computed: {
            total_price() {
                let totalPrice = 0;
                this.submitOrder.productList.forEach(item => {
                    totalPrice += item.price2 * item.num;
                });
                return totalPrice.toFixed(2);
            },
        },
    };
</script>