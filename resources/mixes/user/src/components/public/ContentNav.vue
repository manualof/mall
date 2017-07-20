<template>
    <div class="content-nav">
        <div class="container">
            <div class="classification">
                <i class="icon iconfont icon-menu"></i>所有分类
                <menu-bar></menu-bar>
            </div>
            <ul class="header-bar-nav">
                <li v-for="item in navigation" :class="{ 'active': $route.path === item.to }">
                    <a :href="link + item.to" target="_blank">{{ item.text }}</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import MenuBar from './MenuBar';

    export default {
        components: {
            MenuBar,
        },
        data() {
            return {
                link: window.foregroundLink,
                navigation: [
                    {
                        to: 'home',
                        text: '首页',
                    },
                    {
                        to: 'offer',
                        text: '优惠',
                    },
                    {
                        to: 'spike',
                        text: '秒杀',
                    },
                    {
                        to: 'discount',
                        text: '折扣',
                    },
                ],
            };
        },
    };
</script>
