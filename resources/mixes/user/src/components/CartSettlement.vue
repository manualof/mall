<template>
    <div class="cart-settlement padding-attribute">
        <div class="container">
            <p class="select-title">购物车</p>
            <div class="product-information cart-select-model">
                <table width="100%">
                    <colgroup>
                        <col width="46px">
                        <col width="40px">
                        <col width="500px">
                        <col width="150px">
                        <col width="154px">
                        <col width="150px">
                        <col width="150px">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="select">
                            <div class="check-box select-all">
                                <span>
                                    <input type="checkbox" :checked="isAllChecked" @change="changeAllChecked($event)"
                                         class="input_check" id="all-select">
                                    <label for="all-select"> </label>
                                </span>
                            </div>
                        </th>
                        <th class="select-all"><label for="all-select">全选</label></th>
                        <th class="th-information">商品信息</th>
                        <th>单价</th>
                        <th>数量</th>
                        <th>金额</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div>
                <div class="product-information" v-for="(item,index) in productList">
                    <div class="freight clearfix">
                        <div class="name">
                            <div class="check-box select">
                                <label>
                                    <input type="checkbox" class="input_check" :checked="isTitleChecked(item)"
                                           @change="changeTitleChecked(item,$event)">
                                    <span></span>
                                </label>
                            </div>
                            <span class="shop">{{ item.name }}</span>
                        </div>
                        <span class="money">运费: {{ item.pay_transform }}</span>
                    </div>
                    <table width="100%">
                        <colgroup>
                            <col width="46px">
                            <col width="40px">
                            <col width="500px">
                            <col width="150px">
                            <col width="154px">
                            <col width="150px">
                            <col width="150px">
                        </colgroup>
                        <tbody>
                        <tr class="offer-tr" v-if="item.offer">
                            <td colspan="7" class="offer">
                                <span>优惠</span>{{ item.offer }}
                            </td>
                        </tr>
                        <tr v-for="(product, num) in item.products">
                            <td class="td-select">
                                <div class="check-box">
                                    <label>
                                        <input type="checkbox" class="input_check"
                                               v-model='item.selected' :value="product.id" name='checkboxinput'>
                                        <span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="td-img">
                                <router-link :to="{name: 'product-details'}">
                                    <img :src="product.img" alt="">
                                </router-link>
                            </td>
                            <td class="td-information">
                                <router-link :to="{name: 'product-details'}"> {{ product.name }}</router-link>
                                <p>尺码：{{ product.size }}</p>
                                <p>
                                    <i class="mention" :class="{support:item.mention}">提</i>本商品
                                    <i v-if="item.mention">支持</i><i v-if="!item.mention">不支持</i>门店自提
                                </p>
                            </td>
                            <td>
                                <s>&yen;{{ product.old_price }}</s>
                                <p>&yen;{{ product.now_price }}</p>
                            </td>
                            <td>
                                <div class="num-input clearfix">
                                    <span class="num" @click="reduce(product)">
                                        -
                                    </span>
                                    <span class="input">
                                        <input type="number" v-model.number="product.num">
                                    </span>
                                    <span class="num" @click="plus(product)">
                                        +
                                    </span>
                                </div>
                            </td>
                            <td class="price">
                                &yen;{{ price(product.num, product.now_price) }}
                            </td>
                            <td>
                                删除
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="product-information cart-pay">
                <table width="100%">
                    <thead>
                    <tr>
                        <th class="select">
                            <div class="check-box select-all">
                                <span>
                                    <input type="checkbox" :checked="isAllChecked()" @change="changeAllChecked($event)"
                                           class="input_check" id="all-select2">
                                    <label for="all-select2"> </label>
                                </span>
                            </div>
                        </th>
                        <th class="delete-product">
                            <label for="all-select2" class="select-delete-all">
                                全选
                            </label>
                            <span>删除选中的商品</span>
                        </th>
                        <th class="th-information"></th>
                        <th>已选商品 {{ selectNum }}</th>
                        <th class="mount">总价 (不含运费)</th>
                        <th class="num-price">&yen;{{ totalPrice }} <p>运费:{{ totalFreight }}</p></th>
                        <th>
                            <button class="order-btn" v-router-link="{ name: 'submit-order' }">
                                去结算
                            </button>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <need-browse></need-browse>
        <everyone-browse></everyone-browse>
        <myself-browse></myself-browse>
    </div>
</template>

<script>
    import NeedBrowse from './dashboard/NeedBrowse';
    import EveryoneBrowse from './dashboard/EveryoneBrowse';
    import MyselfBrowse from './dashboard/MyselfBrowse';

    import productImg from '../assets/images/img_06.png';

    export default {
        data() {
            return {
                productList: [
                    {
                        name: '母婴',
                        pay_transform: 10,
                        mention: true,
                        selected: [],
                        products: [
                            {
                                id: 1,
                                img: productImg,
                                name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童 可爱短袜5双装',
                                num: 1,
                                now_price: 39.9,
                                old_price: 126.07,
                                size: 'M',
                            },
                        ],
                    },
                    {
                        name: 'XX母婴用品店',
                        pay_transform: 10,
                        mention: true,
                        products: [
                            {
                                id: 1,
                                img: productImg,
                                name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童 可爱短袜5双装',
                                num: 1,
                                now_price: 39.9,
                                old_price: 126.07,
                                size: 'M',
                            },
                            {
                                id: 1,
                                img: productImg,
                                name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童 可爱短袜5双装',
                                num: 1,
                                now_price: 39.9,
                                old_price: 126.07,
                                size: 'M',
                            },
                        ],
                        selected: [],
                    },
                    {
                        name: 'XX母婴用品',
                        offer: '买二送一',
                        mention: false,
                        pay_transform: 10,
                        products: [
                            {
                                id: 1,
                                img: productImg,
                                name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童 可爱短袜5双装',
                                num: 1,
                                now_price: 39.9,
                                old_price: 126.07,
                                size: 'M',
                            },
                            {
                                id: 1,
                                img: productImg,
                                name: 'Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童 可爱短袜5双装',
                                num: 1,
                                now_price: 39.9,
                                old_price: 126.07,
                                size: 'M',
                            },
                        ],
                        selected: [],
                    },
                ],
            };
        },
        components: {
            EveryoneBrowse,
            MyselfBrowse,
            NeedBrowse,
        },
        computed: {
            selectNum() {
                let num = 0;
                this.productList.forEach(item => {
                    num += item.selected.length;
                });
                return num;
            },
            totalPrice() {
                const tPrice = 0;
                this.productList.forEach(item => {
                    item.selected.forEach(i => {
                        console.log(i);
                    });
                });
                return tPrice;
            },
            totalFreight() {
                return 0;
            },
        },
        methods: {
            /**
             * 全选框change事件的回调处理方法
             * @param event
             */
            changeAllChecked(event) {
                if (event.target.checked === true) {
                    this.productList.forEach(data => {
                        data.products.forEach(item => data.selected.indexOf(item.id) ===
                        -1 && data.selected.push(item.id));
                    });
                } else {
                    this.productList.forEach(data => {
                        data.selected = [];
                    });
                }
            },
            /**
             * 当父标题状态变化时的处理方法
             */
            changeTitleChecked(data, event) {
                if (event.target.checked === true) {
                    data.products.forEach(item => data.selected.indexOf(item.id) ===
                    -1 && data.selected.push(item.id));
                } else {
                    data.selected = [];
                }
            },
            isAllChecked() {
                return this.productList.every(data => data.selected.length === data.products.length);
            },

            /**
             * 判断父标题选择状态
             */
            isTitleChecked(data) {
                const selected1 = data.selected;
                const products1 = data.products;
                // 验证selected中是否含有全部的product的id 如果是 证明title要选中
                return products1.every(item => selected1.indexOf(item.id) !== -1);
            },
            plus(item) {
                item.num += 1;
            },
            /**
             * 判断全选框选择状态
             * @returns {boolean}
             */
            price(num, price) {
                return (price * num).toFixed(2);
            },
            reduce() {
//                console.log(item);
            },
        },
    };
</script>
