<template>
    <div class="selases-return">
        <div class="saases-title">
            <span>退款申请</span>
            <span>退货申请</span>
        </div>
        <div class="selaes-serch">
            <input type="text" placeholder="">
            <span>搜索</span>
        </div>
        <div class="clearfix"></div>
        <div>
            <div class="goods-list-title">
                <div>商品</div>
                <div>退款金额（元）</div>
                <div>退货数量</div>
                <div>审核状态</div>
                <div>平台确认</div>
                <div>操作</div>
            </div>
            <div class="goods-list">
                <p>
                    <span>退款编号：11052646854585</span>
                    <span>申请时间：2017-05-30  13:21:54</span>
                    <span>xxx旗舰店</span>
                </p>
                <div class="goods-list-title">
                    <div>
                        <div class="goods-img"></div>
                        <div class="goods-msg">
                            <div class="goods-msg-main">Ｐurrfect diary 咕噜日记1-7岁儿童可爱短袜5双装岁儿童可爱短袜5双装</div>
                            <div class="diangdanbianhao">订单编号：5546459835659646</div>
                        </div>
                    </div>
                    <div>3300.00</div>
                    <div>1</div>
                    <div>待审核</div>
                    <div>无</div>
                    <div class="caozuo"> <span>查看</span> </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                msg: 11,
            };
        },
    };
</script>
<style lang="less">
    .selases-return {
        .saases-title{
            padding-top:20px;
            font-size:18px;
            font-weight: 500;
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
            height: 77px;
            span{
                float: left;
                width: 144px;
                color: #444;
                height: 58px;
                line-height: 57px;
            }
            span:nth-child(2){
                border-bottom:2px solid #de2634 ;
            }
        }
        .selaes-serch{
            margin-top: 20px;
            input{
                width: 182px;
                height: 24px;
                border: 1px solid #e5e5e5;
                float: left;
            }
            span{
                width: 82px;
                display: inline-block;
                text-align: center;
                background: #e5e5e5;
                height: 24px;
                float: left;
                font-size: 12px;
                font-weight: 300;
                line-height: 24px;
            }
        }
        .goods-list-title{
            height: 40px;
            border: 1px solid #e5e5e5;
            margin-top: 20px;
            line-height: 40px;
            font-size: 12px;
            color: #999;
            width: 100%;
            & > div{
                float: left;
                width: 107px;
                text-align: center;
                font-weight: 300;
                font-family: "Noto Sans Hanunoo";
            }
            & > div:nth-child(1){
                width: 448px;
                margin-left: 20px;
                text-align: left;
            }
        }
        .goods-list{
            margin-top: 20px;
            border: 1px solid #e5e5e5;
            &>p{
                border-bottom: 1px solid #e5e5e5;
                height: 40px;
                line-height: 40px;
                background: #f7f7f7;
                font-size: 12px;
                color: #444;
                padding-left: 20px;
                span{
                    padding-right: 10px;
                }
            }
            .goods-list-title{
                height: 140px;
                border: none;
                margin-top: 0;
                &>div{
                    padding-top: 30px;
                    height: 100%;
                    line-height: 1;
                    color: #666;
                }
                &>div:nth-child(1){
                    padding-top: 20px;
                    .goods-img{
                        width: 80px;
                        height: 80px;
                        float: left;
                        border: 1px solid;
                    }
                    .goods-msg{
                        float: left;
                        width: 294px;
                        margin-left: 10px;
                    .goods-msg-main{
                            font-size: 12px;
                            color: #666;
                            margin-bottom: 10px;
                            height: 33px;
                            width: 100%;
                            margin-left: 0;
                            text-align: left;
                            line-height: 16px;
                            margin-top: 10px;
                        }
                        .diangdanbianhao{
                            font-size: 12px;
                            color: #999;
                        }
                    }
                }
                .caozuo{
                    span{
                        width: 48px;
                        text-align: center;
                        height: 24px;
                        border: 1px solid #e5e5e5;
                        display: inline-block;
                        line-height: 24px;
                        margin-top: -10px;
                    }

                }
            }
        }
    }
</style>