<script>
    import FooterBar from '../layouts/FooterBar.vue';

    export default {
        components: {
            FooterBar,
        },
        data() {
            return {
                countdownStart: false,
                countdown: 60,
                signUpData: {
                    email: '',
                    password: '',
                    passwordAgain: '',
                    phone: '',
                    code: '',
                    agree: false,
                },
                signUpRule: {
                    email: [
                        {
                            required: true,
                            message: '请填写用户名',
                            trigger: 'blur',
                        },
                    ],
                    password: [
                        {
                            required: true,
                            message: '请填写密码',
                            trigger: 'blur',
                        },
                        {
                            type: 'string',
                            min: 6,
                            message: '密码长度不能小于6位',
                            trigger: 'blur',
                        },
                    ],
                },
            };
        },
    };
</script>
<template>
    <div class="signup">
        <div class="header-bar-logo">
            <div class="container">
                <router-link to="/mall">
                    <img src="../assets/images/logo.png" alt="">
                </router-link>
            </div>
        </div>
        <div class="signup-content">
            <div class="signup-title clearfix">
                <span>注册</span>
                <router-link to="/signin">已有账号？点击登录</router-link>
            </div>
            <i-form class="signup-form" ref="signUpForm" :model="signUpData" :rules="signUpRule">
                <form-item prop="account" label="邮箱账号">
                    <i-input class="signup-form-group signup-form-control" type="text" v-model="signUpData.email">
                    </i-input>
                </form-item>
                <form-item prop="account" label="密码">
                    <i-input class="signup-form-group signup-form-control" type="text" v-model="signUpData.password">
                    </i-input>
                </form-item>
                <form-item prop="account" label="确认密码">
                    <i-input class="signup-form-group signup-form-control" type="text" v-model="signUpData.passwordAgain">
                    </i-input>
                </form-item>
                <form-item prop="account" label="手机号">
                    <i-input class="signup-form-group signup-form-control" type="text" v-model="signUpData.phone">
                    </i-input>
                </form-item>
                <form-item prop="account" label="验证码">
                    <i-input  class="signup-form-group signup-form-control signup-form-code" type="text" v-model="signUpData.code">
                    </i-input>
                    <div class="signup-form-control signup-form-obtain-code">
                        <i v-if="countdownStart">{{ countdown }}秒</i>
                        <i v-if="!countdownStart">获取验证码</i>
                    </div>
                </form-item>
                <form-item prop="account" label="协议条款">
                    <label class="ivu-checkbox-wrapper ivu-checkbox-group-item">
                        <span class="ivu-checkbox">
                            <input
                                type="checkbox"
                                class="ivu-checkbox-input"
                                v-model="signUpData.agree"
                                value="remember">
                            <span class="ivu-checkbox-inner"></span>
                        </span>
                        <span class="tip">用户注册即代表同意协议条款
                        </span>
                        <a class="protocol-content"> 《xx协议条款》</a>
                    </label>
                </form-item>
                <form-item label="">
                    <i-button class="register">注册</i-button>
                </form-item>
            </i-form>
        </div>
        <footer-bar></footer-bar>
    </div>
</template>