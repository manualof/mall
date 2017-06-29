<template>
    <div class="refund">
        <div class="container top">
            退款流程
        </div>
        <div class="container bottom">
            <div class="shengqing-goods">
                <div class="title">退款申请</div>
                <div class="goods-box">
                    <div class="goods-main">

                        <div class="goods-img"></div>
                        <div class="goods-msg">
                            <div >{{ goods.msg }}</div>
                            <div class="goods-type">{{ goods.taocan }}</div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="refund-main">
                    <p>运费： {{ goods.freight}}</p>
                    <p>订单金额：<span class="price">￥{{goods.price }}</span></p>
                    <p>订单编号：{{ goods.ordernum}}</p>
                    <p>商家：{{ goods.seller}}</p>
                </div>
            </div>
            <div class="shengqing-maijia">
                <div class="title">买家退款申请</div>
                <div class="maijia-box">
                    <div class="maijia-main">
                        <p><span class="msg-title">退款原因</span><span class="msg-main">{{ refund.reason }}</span></p>
                        <p><span class="msg-title">退款金额</span><span class="msg-main price">￥{{ refund.price }}</span></p>
                        <p><span class="msg-title">退款编号</span><span class="msg-main">{{ refund.number }}</span></p>
                        <p><span class="msg-title">退款说明</span><span class="msg-main">{{ refund.illustrate }}</span></p>
                    </div>
                    <div class="shangjiachuli">
                        <p class="title-jinggao">
                            <span class="jinggao">!</span>
                            <span class="jinggao-msg">等待商家处理退款申请</span>
                        </p>
                        <p class="msg-main">如果商家同意，金额会尽快返回您的账户</p>
                        <p class="msg-main">如果商家拒绝，那么您将不能再次申请退款，有疑问可以联系平台</p>
                        <p class="msg-main">如果 <span class="price">2天10时30分27秒</span> 内商家未处理，退款申请将会自动达成并将金额返还至您的账户</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                goods: {
                    freight: 10,
                    price: 99,
                    ordernum: '25648946541656',
                    seller: 'xxx旗舰店',
                    msg: '女装 夏季自然腰宽松九分裤休闲长裤麻混纺',
                    taocan: '官方套餐一'
                },
                refund: {
                    reason: '物品有瑕疵',
                    price: 99,
                    number: '3265646123655',
                    illustrate: '桌子的木质不太好，且桌面有2cm裂缝，桌面不平整，颜色发错',
                },
            };
        },
    };
</script>
