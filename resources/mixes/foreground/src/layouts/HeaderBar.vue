<template>
    <div class="header-bar">
        <div class="container">
            <div class="header-welcome ">
                西部母婴欢迎您!
                <router-link to="/mall/signin" class="login">登录</router-link>
                <span>|</span>
                <router-link to="/mall/signup" class="register">注册</router-link>
            </div>
            <div class="header-bar-user ">
                <ul class="header-bar-nav">
                    <li :class="{ 'active': $route.path === '/mall/user/all-order' }">
                        <router-link to="/mall/user/all-order" target="_blank">我的订单</router-link>
                        <span>|</span>
                    </li>
                    <li :class="{ 'active': $route.path === '/mall/user/personnal-center' }">
                        <router-link to="/mall/user/personnal-center" target="_blank">个人中心</router-link>
                        <span>|</span>
                    </li>
                    <li :class="{ 'active': $route.path === '/mall/customer-serve' }">
                        <a>客户服务</a>
                        <span>|</span>
                        <ul>
                            <li>
                                <router-link to="/mall/customer-serve">客户服务</router-link>
                            </li>
                            <li>
                                <router-link to="/mall/help">帮助中心</router-link>
                            </li>
                            <li>
                                <router-link to="/mall/after-sale">售后中心</router-link>
                            </li>
                            <li>
                                <router-link to="/mall/customer-serve">客服中心</router-link>
                            </li>
                        </ul>
                    </li>
                    <li :class="{ 'active': $route.path === '/mall/store/businessmen' }">
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
            };
        },
    };
</script>
