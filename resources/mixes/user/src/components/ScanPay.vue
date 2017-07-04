<script>
    export default{
        data() {
            return {
                msg: '111',
            };
        },
    };
</script>
<template>
    <div class="scan-pay container">
        <div></div>
        <div class="scan-pay-title">
            <span>微信支付</span>
            二维码已过期，刷新页面重新获取二维码
        </div>
        <div class="scan">
            <div class="scan-left">
                <div class="two-bar-codes"></div>
                <p>请使用微信扫一扫，扫描二维码支付</p>
            </div>
            <div class="scan-right"></div>
        </div>
        <p>选择其他支付方式</p>
    </div>
</template>