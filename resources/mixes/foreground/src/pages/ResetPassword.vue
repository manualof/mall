<script>
    import code from '../assets/images/weixin.png';

    export default {
        data() {
            return {
                codeImg: code,
                countdown: 60,
                countdownStart: false,
                identityData: {
                    phone: '',
                    phoneCode: '',
                    code: '',
                },
                identityRule: {

                },
                temp: 1,
            };
        },
        methods: {
            submitResult1() {
                this.temp += 1;
            },
            submitResult2() {
                this.temp += 1;
            },
        },
    };
</script>
<template>
    <div class="reset-password">
        <div class="container">
            <div class="account-content modify-password">
                <div class="modify-heading">
                    <div class="modify-status">
                        <ul class="clearfix">
                            <li class="clearfix" :class="{ already: temp >= 1 }">
                                <div class="step">
                                    <i class="step-list">1</i>
                                    <p class="modify-margin">验证身份</p>
                                </div>
                            </li>
                            <li class="clearfix" :class="{ already: temp >= 2 }">
                                <ul class="clearfix cricle-box">
                                    <li class="cricle" v-for="item in 17"></li>
                                </ul>
                                <div class="step">
                                    <i class="step-list">2</i>
                                    <p class="p-modify">修改登录密码</p>
                                </div>
                            </li>
                            <li class="clearfix" :class="{ already: temp >= 3 }">
                                <ul class="clearfix cricle-box">
                                    <li class="cricle" v-for="item in 17"></li>
                                </ul>
                                <div class="step">
                                    <i class="step-list">3</i>
                                    <p class="modify-margin">完成</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modify-content1" v-if="temp===1">
                    <i-form class="signup-form" ref="identityForm" :model="identityData" :rules="identityRule">
                        <form-item class="clearfix" prop="phone" label="手机号">
                            <i-input class="signup-form-control"
                                     type="text"
                                     v-model="identityData.phone">
                            </i-input>
                        </form-item>
                        <form-item class="clearfix" prop="phoneCode" label="请填写手机验证码">
                            <i-input class="signup-form-control signup-form-code pull-left"
                                     type="text"
                                     v-model="identityData.phoneCode">
                            </i-input>
                            <div class="signup-form-control signup-form-obtain-code signup-form-code pull-left" @click="getCode">
                                <i v-if="countdownStart">{{ countdown }}秒</i>
                                <i v-if="!countdownStart">获取验证码</i>
                            </div>
                        </form-item>
                        <form-item  class="clearfix" prop="code" label="验证码">
                            <i-input class="signup-form-control pull-left signup-form-code"
                                     type="text"
                                     v-model="identityData.code">
                            </i-input>
                            <div class="signup-form-control verification-code pull-left">
                                <img :src="codeImg" alt="">
                            </div>
                            <a class="float-left">看不清?换一张</a>
                        </form-item>
                        <form-item>
                            <button class="order-btn" @click.prevent="submitResultIdentity">提交</button>
                        </form-item>
                    </i-form>
                </div>
                <div class="modify-content2" v-if="temp===2">
                    <form class="signup-form">
                        <div class="signup-form-group new-password-group">
                            <label class="form-title">新的登录密码</label>
                            <input type="password" class="signup-form-control">
                            <span class="tip">由字母加数字符号至少两种以上数字组成的密码，6-20位半角字符，区分大小写</span>
                        </div>
                        <div class="signup-form-group">
                            <label class="form-title">请再输入一次密码</label>
                            <input type="password" class="signup-form-control">
                        </div>
                        <div class="signup-form-group clearfix">
                            <label class="form-title float-left">验证码</label>
                            <input type="text" class="signup-form-control signup-form-code float-left verification-input"
                                   name="verification">
                            <div class="signup-form-control verification-code float-left">1234</div>
                            <a href="" class="float-left">看不清?换一张</a>
                        </div>
                        <div class="signup-form-group clearfix">
                            <label class="form-title float-left"></label>
                            <button class="order-btn float-left" @click.prevent="submitResult2">提交</button>
                        </div>
                    </form>
                </div>
                <div class="modify-content3" v-if="temp===3">
                    <div class="modify-success text-center">密码修改成功!</div>
                </div>
            </div>
        </div>
    </div>
</template>