<template>
    <div class="signin ">
        <div class="header-bar-logo">
            <div class="container">
                <img src="../assets/images/logo.png" alt="">
            </div>
        </div>
        <div class="signup-content container clearfix">
            <div class="signin-content">
                <div class="signup-title clearfix">
                    <span>密码登录</span>
                    <a href="/signup">没有账号？立即注册</a>
                </div>
                <form class="signup-form">
                    <div class="signup-form-group form-icon">
                        <i class="icon iconfont icon-denglu"></i>
                        <input type="text" class="signup-form-control" placeholder="邮箱账号" name="username">
                    </div>
                    <div class="signup-form-group form-icon">
                        <i class="icon iconfont icon-mima"></i>
                        <input type="password" class="signup-form-control" placeholder="登录密码" name="password">
                    </div>
                    <div class="signup-form-group protocol-kinds">
                        <div class="check-box signup-form-protocol">
                            <span><input type="checkbox" class="input_check" id="check24"><label for="check24"> </label></span>
                        </div>
                        <!--<input type="radio" class="signup-form-protocol" name="protocol">-->
                        <span>记住密码</span> <span><a href=""> 忘记密码</a></span>
                    </div>
                    <div class="signup-form-group signin-login">
                        <button class="register">登录</button>
                    </div>
                    <div class="signup-form-group third-party">
            <span>第三方账号登录 <a href=""> <i class="icon iconfont icon-weixin"></i></a>
              <a href=""><i class="icon iconfont icon-qq"></i></a></span>
                    </div>
                </form>
            </div>
        </div>
        <footer-content></footer-content>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import FooterContent from './dashboard/FooterContent'
    import FooterBar from './dashboard/FooterBar'

    export default {
        components: {
            FooterContent,
            FooterBar
        },
    }
</script>
