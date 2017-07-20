<script>
    import phone from '../assets/images/phone.png';

    export default {
        data() {
            return {
                active: 1,
                now: 0,
                productList: [
                    {
                        img: phone,
                        title: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        num: 100,
                        saled: 25,
                        price: 32.99,
                        oldPrice: 46.88,
                    },
                ],
                times: [
                    {
                        time: '08:00',
                    },
                    {
                        time: '12:00',
                    },
                    {
                        time: '14:00',
                    },
                    {
                        time: '16:00',
                    },
                    {
                        time: '22:00',
                    },
                ],
            };
        },
        methods: {
            switchTab(index) {
                this.active = index;
            },
        },
    };
</script>
<template>
    <div class="spike">
        <div class="container">
            <ul class="time-list clearfix">
                <li class="spike-time pull-left"
                    :class="{active:active===index}"
                    @click="switchTab(index)"
                    v-for="(item,index) in times">
                    <span :class="{now:now === index}">{{ item.time }}</span>
                    <i class="end" v-if="now > index">已经结束</i>
                    <i class="now" v-if="now === index">正在进行</i>
                    <i class="end" v-if="now < index">即将开始</i>
                </li>
            </ul>
            <ul class="spike-list">
                <li>
                    <router-link to="/" v-for="(product,index) in productList" :key="index">
                        <img :src="product.img"/>
                        <p>{{ product.title }}</p>

                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>