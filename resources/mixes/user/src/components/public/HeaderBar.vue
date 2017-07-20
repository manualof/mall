<template>
    <div class="header-bar">
        <div class="container">
            <div class="header-welcome ">
                西部母婴欢迎您!
                <a :href="link + 'signin'" target="_blank" class="login">登录</a>
                <span>|</span>
                <a :href="link + 'signup'" target="_blank" class="register">注册</a>
            </div>
            <div class="header-bar-user ">
                <ul class="header-bar-nav">
                    <li v-for="item in navigation" :class="{ 'active': $route.name === item.to }">
                        <router-link :to="{name: item.to}">{{ item.text }}</router-link>
                        <span>|</span>
                    </li>
                    <li>
                        <a :href="link + 'businessmen'">商家入驻</a>
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
                link: window.storeLink,
                navigation: [
                    {
                        to: 'all-order',
                        text: '我的订单',
                    },
                    {
                        to: 'personnal-center',
                        text: '个人中心',
                    },
                    {
                        to: 'customer-serve',
                        text: '客户服务',
                    },
                ],
            };
        },
    };
</script>
