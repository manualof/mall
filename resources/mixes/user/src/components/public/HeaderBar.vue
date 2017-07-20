<template>
    <div class="header-bar">
        <div class="container">
            <div class="header-welcome ">
                西部母婴欢迎您!
                <router-link to="/mall/signin" target="_blank" class="login">登录</router-link>
                <span>|</span>
                <router-link to="/mall/signup" target="_blank" class="register">注册</router-link>
            </div>
            <div class="header-bar-user ">
                <ul class="header-bar-nav">
                    <li v-for="item in navigation" :class="{ 'active': $route.name === item.to }">
                        <router-link :to="item.to">{{ item.text }}</router-link>
                        <span>|</span>
                    </li>
                    <li>
                        <router-link to="/mall/store/businessmen" target="_blank">商家入驻</router-link>
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
                        to: '/mall/user/personnal-center/all-order',
                        text: '我的订单',
                    },
                    {
                        to: '/mall/user/personnal-center/all-order',
                        text: '个人中心',
                    },
                    {
                        to: '/mall/customer-serve',
                        text: '客户服务',
                    },
                ],
            };
        },
    };
</script>
