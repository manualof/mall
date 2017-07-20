<template>
    <div class="header-bar">
        <div class="container">
            <div class="header-welcome ">
                西部母婴欢迎您!
                <router-link to="/signin" class="login">登录</router-link>
                <span>|</span>
                <router-link to="/signup" class="register">注册</router-link>
            </div>
            <div class="header-bar-user ">
                <ul class="header-bar-nav">
                    <li v-for="item in navigation" :class="{ 'active': $route.path === item.to }">
                        <router-link :to="item.to" target="_blank">{{ item.text }}</router-link>
                        <span>|</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                navigation: [
                    {
                        to: '/all-order',
                        text: '我的订单',
                    },
                    {
                        to: '/personnal-center',
                        text: '个人中心',
                    },
                    {
                        to: 'customer-serve',
                        text: '客户服务',
                    },
                    {
                        to: 'businessmen',
                        text: '商家入驻',
                    },
                ],
            };
        },
    };
</script>
