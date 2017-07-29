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
                <router-link to="/mall/signin">已有账号？点击登录</router-link>
            </div>
            <form class="signup-form">
                <div class="signup-form-group">
                    <label class="form-title">邮箱账户</label>
                    <input type="text" class="form-control signup-form-control" name="username">
                </div>
                <div class="signup-form-group">
                    <label class="form-title">密码</label>
                    <input type="password" class="form-control signup-form-control" name="password">
                </div>
                <div class="signup-form-group">
                    <label class="form-title">确认密码</label>
                    <input type="password" class="form-control signup-form-control" name="password">
                </div>
                <div class="signup-form-group">
                    <label class="form-title">手机号</label>
                    <input type="text" class="form-control signup-form-control" name="telphone">
                </div>
                <div class="signup-form-group">
                    <label class="form-title">验证码</label>
                    <input type="text" class="form-control signup-form-control signup-form-code " name="verification">
                    <div class="signup-form-control signup-form-obtain-code">获取验证码</div>
                </div>
                <div class="signup-form-group agreement-clause clearfix">
                    <label class="form-title">协议条款</label>
                    <div class="check-box signup-form-protocol">
                        <span><input type="checkbox" class="form-control input_check" id="check24"><label
                            for="check24"> </label></span>
                    </div>
                    <span class="tip">用户注册即代表同意协议条款   <a href="" class="protocol-content"> 《xx协议条款》</a></span>
                </div>
                <div class="signup-form-group">
                    <label class="form-title"></label>
                    <button class="register">注册</button>
                </div>
            </form>
        </div>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import FooterBar from '../layouts/FooterBar.vue';

    export default {
        components: {
            FooterBar,
        },
    };
</script>
