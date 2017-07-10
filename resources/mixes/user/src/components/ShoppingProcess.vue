<template>
    <div class="shopping-process padding-attribute">
        <div class="container clearfix">
            <div class="side-bar">
                <div class="item-group" id="accordion">
                    <div class="item-content" v-for="side in sides">
                        <div class="item-heading">
                            <h4 class="item-title" @click="showSub(side)">
                                <a>{{ side.title }}</a>
                            </h4>
                        </div>
                        <transition name="slide">
                            <div class="item-collapse collapse in" v-show="side.show">
                                <ul class="item-body" id="myTab1">
                                    <li v-for="sub in side.children">
                                        <router-link :to='sub.router'>{{ sub.name }}</router-link>
                                    </li>
                                </ul>
                            </div>
                        </transition>
                    </div>
                </div>
            </div>
            <div class="list-content">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                sides: [
                    {
                        children: [
                            {
                                name: '购物流程',
                                router: 'shop-process',
                            },
                            {
                                name: '支付方式',
                                router: 'pay-method',
                            },
                            {
                                name: '常见问题',
                                router: 'common-problem',
                            },
                        ],
                        show: true,
                        title: '购物流程',
                    },
                    {
                        children: [
                            {
                                name: '退货流程',
                                router: 'return-process',
                            },
                            {
                                name: '退款说明',
                                router: 'return-money',
                            },
                            {
                                name: '联系客服',
                                router: 'contact-service',
                            },
                        ],
                        show: false,
                        title: '退货流程',
                    },
                    {
                        children: [
                            {
                                name: '配送方式',
                                router: 'delivery-method',
                            },
                            {
                                name: '配送服务',
                                router: 'delivery-sevice',
                            },
                            {
                                name: '物流跟踪',
                                router: 'delivery-track',
                            },
                        ],
                        show: false,
                        title: '配送方式',
                    },
                    {
                        children: [
                            {
                                name: '关于我们',
                                router: 'about-us',
                            },
                            {
                                name: '联系我们',
                                router: 'contact-us',
                            },
                            {
                                name: '招商合作',
                                router: 'cooperation',
                            },
                        ],
                        show: false,
                        title: '关于我们',
                    },
                ],
            };
        },
        methods: {
            showSub(item) {
                this.sides.forEach(side => {
                    side.show = false;
                });
                item.show = !item.show;
            },
        },
    };
</script>