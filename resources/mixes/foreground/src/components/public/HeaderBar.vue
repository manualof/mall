<template>
    <div class="header-bar">
        <div class="container">
            <div class="header-welcome ">
                西部母婴欢迎您!
                <router-link :to="{ name: 'signin' }"  target="_blank" class="login">登录</router-link>
                <span>|</span>
                <router-link :to="{ name: 'signup' }" class="register">注册</router-link>
            </div>
            <div class="header-bar-user ">
                <ul class="header-bar-nav">
                    <li v-for="item in navigation" :class="{ 'active': $route.path === item.to }">
                        <a :href="item.to" target="_blank">{{ item.text }}</a>
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
            const link = window.userLink;
            return {
                navigation: [
                    {
                        to: `${link}personnal-center/all-order`,
                        text: '我的订单',
                    },
                    {
                        to: `${link}personnal-center/`,
                        text: '个人中心',
                    },
                    {
                        to: `${link}customer-serve`,
                        text: '客户服务',
                    },
                    {
                        to: '#/businessmen',
                        text: '商家入驻',
                    },
                ],
            };
        },
    };
</script>
