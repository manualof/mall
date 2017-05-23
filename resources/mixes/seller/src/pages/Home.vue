<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                shop: {
                    level: '白金店铺',
                    manage: '管理员',
                    name: '西部母婴用品店',
                    valid: '2020年5月10日',
                },
                tipDetail: {
                    goodTip: {
                        imgAll: 500,
                        imgNum: 399,
                        num: 102,
                        replyNum: 27,
                        reviewNum: 0,
                        sellNum: 138,
                        violationNum: 7,
                    },
                    transaction: {
                        ensure: 22,
                        pay: 138,
                        refund: 23,
                        returnGoods: 20,
                        ship: 120,
                    },
                },
                user: {
                    name: 'nwaijhf',
                },
            };
        },
        methods: {},
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="home-wrap">
            <tabs value="home">
                <tab-pane label="首页" name="home">
                    <card :bordered="false">
                        <row class="top-shop-intro">
                            <i-col class="img" span="2">
                                <img src="" alt="">
                            </i-col>
                            <i-col span="22">
                                <h4>{{ shop.name }}
                                    <span>(用户名:{{ user.name }})</span>
                                </h4>
                                <ul>
                                    <li>管理权限:{{ shop.manage }}</li>
                                    <li>店铺等级:{{ shop.level }}</li>
                                    <li>有效期:{{ shop.valid }}</li>
                                </ul>
                            </i-col>
                        </row>
                        <div class="bottom-shop-tip">
                            <row>
                                <i-col span="12" class="border-line">
                                    <ul class="shop-goods-module">
                                        <li>
                                            <div>
                                                <h5>店铺及商品提示</h5>
                                                <span class="tip distance"> 店铺信息及待处理事项</span>
                                            </div>
                                            <div class="trading-tips">
                                                <span>商品发布情况：{{ tipDetail.goodTip.num }}/不限</span>
                                                <span>图片空间使用：
                                                    {{ tipDetail.goodTip.imgNum }}/{{ tipDetail.goodTip.imgAll }}</span>
                                            </div>
                                            <ul class="border-module clearfix">
                                                <li>出售中 <span>{{ tipDetail.goodTip.sellNum }}</span></li>
                                                <li>违规下架 <span>{{ tipDetail.goodTip.violationNum }}</span></li>
                                                <li>仓库中已审核 <span>{{ tipDetail.goodTip.reviewNum }}</span></li>
                                                <li>待回复咨询 <span>{{ tipDetail.goodTip.replyNum }}</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>交易提示</h5>
                                                <span class="tip distance"> 需要处理的交易订单</span>
                                            </div>
                                            <ul class="border-module clearfix">
                                                <li>待付款 <span>{{ tipDetail.transaction.pay }}</span></li>
                                                <li>待发货 <span>{{ tipDetail.transaction.ship }}</span></li>
                                                <li>待确认账单 <span>{{ tipDetail.transaction.ensure }}</span></li>
                                                <li>退款 <span>{{ tipDetail.transaction.refund }}</span></li>
                                                <li>退货 <span>{{ tipDetail.transaction.returnGoods }}</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>店铺运营推广</h5>
                                                <span class="tip distance"> 合理参加促销活动可以有效提升商品销量</span>
                                            </div>
                                            <ul class="clearfix">
                                                <li>

                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </i-col>
                                <i-col span="12">

                                </i-col>
                            </row>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>