<script>
    import FooterBar from '../layouts/FooterBar.vue';

    export default {
        components: {
            FooterBar,
        },
        data() {
            const reg = /^1[3|4|5|7|8][0-9]\d{8}$/;
            const validatorPhone = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('手机号不能为空'));
                } else if (!reg.test(value)) {
                    callback(new Error('请输入正确手机号'));
                } else {
                    callback();
                }
            };
            const validatePass = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请输入密码'));
                } else {
                    if (this.signUpData.passwordAgain !== '') {
                        // 对第二个密码框单独验证
                        this.$refs.signUpData.validateField('passwordAgain');
                    }
                    callback();
                }
            };
            const validatePassCheck = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请再次输入密码'));
                } else if (value !== this.signUpData.password) {
                    callback(new Error('两次输入密码不一致!'));
                } else {
                    callback();
                }
            };
            return {
                countdownStart: false,
                countdown: 60,
                loading: false,
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
                            trigger: 'blur',
                            validator: validatePass,
                        },
                    ],
                    passwordAgain: [
                        {
                            required: true,
                            trigger: 'blur',
                            type: 'number',
                            validator: validatePassCheck,
                        },
                    ],
                    phone: [
                        {
                            required: true,
                            trigger: 'blur',
                            type: 'number',
                            validator: validatorPhone,
                        },
                    ],
                    code: [
                        {
                            required: true,
                            message: '请填写验证码',
                            trigger: 'blur',
                        },
                    ],
                    agree: [
                        {
                            required: true,
                            message: '您还没有同意协议条款',
                            trigger: 'change',
                        },
                    ],
                },
            };
        },
        methods: {
            getCode() {
                const self = this;
                self.$refs.signUpForm.validateField('phone', valid => {
                    if (valid) {
                        self.$message.success('提交成功!');
                    } else {
                        self.loading = false;
                        self.$message.error('请输入正确手机号');
                    }
                });
            },
            submit(name) {
                const self = this;
                self.loading = true;
                this.$refs[name].validate(valid => {
                    if (valid) {
                        self.$message.success('提交成功!');
                    } else {
                        self.loading = false;
                        self.$message.error('表单验证失败!');
                    }
                });
            },
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
                <form-item prop="email" label="邮箱账号">
                    <i-input class="signup-form-group signup-form-control" type="text" v-model="signUpData.email">
                    </i-input>
                </form-item>
                <form-item prop="password" label="密码">
                    <i-input class="signup-form-group signup-form-control" type="password" v-model="signUpData.password">
                    </i-input>
                </form-item>
                <form-item prop="passwordAgain" label="确认密码">
                    <i-input class="signup-form-group signup-form-control" type="password" v-model="signUpData.passwordAgain">
                    </i-input>
                </form-item>
                <form-item prop="phone" label="手机号">
                    <i-input class="signup-form-group signup-form-control" type="text" v-model="signUpData.phone">
                    </i-input>
                </form-item>
                <form-item prop="code" label="验证码">
                    <i-input  class="signup-form-group signup-form-control signup-form-code" type="text" v-model="signUpData.code">
                    </i-input>
                    <div class="signup-form-control signup-form-obtain-code" @click="getCode">
                        <i v-if="countdownStart">{{ countdown }}秒</i>
                        <i v-if="!countdownStart">获取验证码</i>
                    </div>
                </form-item>
                <form-item prop="agree" label="协议条款">
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
                    </label>
                    <a class="protocol-content"> 《xx协议条款》</a>
                </form-item>
                <form-item label="">
                    <i-button :loding="loading" class="register" @click="submit('signUpForm')">
                        <span v-if="!loading">注册</span>
                        <span v-else>正在提交…</span>
                    </i-button>
                </form-item>
            </i-form>
        </div>
        <footer-bar></footer-bar>
    </div>
</template>