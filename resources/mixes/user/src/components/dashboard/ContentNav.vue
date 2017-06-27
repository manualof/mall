<template>
    <div class="content-nav">
        <div class="container">
            <div class="classification">
                <i class="icon iconfont icon-menu"></i>所有分类
                <menu-bar></menu-bar>
            </div>
            <ul class="header-bar-nav">
                <li v-for="item in navigation" :class="{ 'active': $route.path === item.to }">
                    <router-link :to="item.to">{{ item.text }}</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import MenuBar from '../MenuBar';

    export default {
        components: {
            MenuBar,
        },
        data() {
            return {
                navigation: [
                    {
                        to: { name: 'home'},
                        text: '首页',
                    },
                    {
                        to: { name: 'offer'},
                        text: '优惠',
                    },
                    {
                        to: { name: 'spike'},
                        text: '秒杀',
                    },
                    {
                        to: { name: 'discount'},
                        text: '折扣',
                    },
                ],
            };
        },
    };
</script>
