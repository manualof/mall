<template>
    <div class="account-security">
        <div class="address-title">
            <h4>账户安全</h4>
        </div>
        <div class="account-content account-list-model" v-if="isAccountExit === 0">
            <ul class="account-model">
                <li class="account-item clearfix">
                    <span class="span-icon"><i class="icon iconfont icon-icon-test"></i></span>
                    <span class="span-password">登录密码</span>
                    <span class="span-tip">为了您的账户安全，请您定期变更登录密码</span>
                    <span class="span-edit" @click="editPassword">编辑</span>
                </li>
                <li class="account-item clearfix">
                    <span class="span-icon"><i class="icon iconfont icon-icon-test"></i></span>
                    <span class="span-password">邮箱验证</span>
                    <span class="span-tip">您的验证邮箱为：10****452@qq.com</span>
                    <span class="span-edit">编辑</span>
                </li>
                <li class="account-item clearfix">
                    <span class="span-icon"><i class="icon iconfont icon-tixing"></i></span>
                    <span class="span-password">手机验证</span>
                    <span class="span-tip">您验证的手机：136******545  若已丢失或停用，请立即更换</span>
                    <span class="span-edit">编辑</span>
                </li>
                <li class="account-item clearfix">
                    <span class="span-icon"><i class="icon iconfont icon-icon-test"></i></span>
                    <span class="span-password">支付密码</span>
                    <span class="span-tip">建议您定期更换新的支付密码，提高安全性</span>
                    <span class="span-edit">编辑</span>
                </li>
            </ul>
            <div class="security-tip">
                <p>安全服务提示</p>
                <p>1.确认您登录的是母婴商城网址http:/www.xbmy.com，注意防范进入钓鱼网站，不要轻信各种即时通讯工具发送的商品或支付链接，谨防网购诈骗。</p>
                <p>2.建议您安装杀毒软件，并定期更新操作系统等软件补丁，确保账户及交易安全。</p>
            </div>
        </div>
        <div class="account-content modify-password" v-if="isAccountExit === 1">
            <div class="modify-heading">
                <p class="modify-title">修改登录密码</p>
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
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                            </ul>
                            <div class="step">
                                <i class="step-list">2</i>
                                <p class="p-modify">修改登录密码</p>
                            </div>
                        </li>
                        <li class="clearfix" :class="{ already: temp >= 3 }">
                            <ul class="clearfix cricle-box">
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
                                <li class="cricle"></li>
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
                <form class="signup-form">
                    <div class="signup-form-group">
                        <label class="form-title">手机号</label>
                        <span class="default-telphone">136****22</span>
                        <span> <a href="">通过已验证邮箱验证</a> <a href="">通过支付密码验证</a></span>
                    </div>
                    <div class="signup-form-group group-code clearfix">
                        <label class="form-title float-left">请填写手机验证码</label>
                        <input type="text" class="signup-form-control signup-form-code float-left" name="verification">
                        <div class="signup-form-control signup-form-obtain-code float-left">获取短信验证码</div>
                    </div>
                    <div class="signup-form-group clearfix">
                        <label class="form-title float-left">验证码</label>
                        <input type="text" class="signup-form-control signup-form-code float-left" name="verification">
                        <div class="signup-form-control verification-code float-left">1234</div>
                        <a class="float-left">看不清?换一张</a>
                    </div>
                    <div class="signup-form-group clearfix">
                        <label class="form-title float-left"></label>
                        <button class="order-btn float-left" @click.prevent="submitResult1">提交</button>
                    </div>
                </form>
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
</template>

<script>
    export default{
        data(){
            return {
                temp: 1,
                isAccountExit: 0
            }
        },
        methods: {
            editPassword() {
                this.isAccountExit += 1;
            },
            submitResult1() {
                this.temp += 1;
            },
            submitResult2() {
                this.temp += 1;
            }
        }
    }
</script>