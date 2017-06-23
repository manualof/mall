<template>
    <div class="footer-content">
        <div class="container">
            <ul class="footer-serve">
                <li class="col-md-3 text-center">
                    <i class="icon iconfont icon-yingerfushi"></i>
                    <div class="icon-content">
                        <h3>优质商品</h3>
                        <p>呵护幼儿健康成长</p>
                    </div>
                </li>
                <li class="col-md-3 text-center">
                    <i class="icon iconfont icon-wuliu"></i>
                    <div class="icon-content">
                        <h3>便捷运输</h3>
                        <p>官方认证快速安全</p>
                    </div>
                </li>
                <li class="col-md-3 text-center">
                    <i class="icon iconfont icon-shanghuo"></i>
                    <div class="icon-content">
                        <h3>售后无忧</h3>
                        <p>快速处理各种需求</p>
                    </div>
                </li>
                <li class="col-md-3 text-center">
                    <i class="icon iconfont icon-jifen"></i>
                    <div class="icon-content">
                        <h3>积分抵现</h3>
                        <p>购物积分兑换商品</p>
                    </div>
                </li>
            </ul>
            <div class="process-info clearfix">
                <div class="process-info-left clearfix col-md-9">
                    <ul class="col-md-3">
                        <!--<li><a href="javascript: void(0)">购物流程</a></li>-->
                        <li><span>购物流程</span></li>
                        <li>
                            <router-link to="shop-process">购物流程</router-link>
                        </li>
                        <li>
                            <router-link to="pay-method">支付方式</router-link>
                        </li>
                        <li>
                            <router-link to="common-problem">常见问题</router-link>
                        </li>
                    </ul>
                    <ul class="col-md-3">
                        <li><span>退货流程</span></li>
                        <li>
                            <router-link to="return-process">退货流程</router-link>
                        </li>
                        <li>
                            <router-link to="return-money">退款说明</router-link>
                        </li>
                        <li>
                            <router-link to="contact-service">联系客服</router-link>
                        </li>
                    </ul>
                    <ul class="col-md-3">
                        <li><span>配送方式</span></li>
                        <li>
                            <router-link to="delivery-method">配送方式</router-link>
                        </li>
                        <li>
                            <router-link to="delivery-sevice">配送服务</router-link>
                        </li>
                        <li>
                            <router-link to="delivery-track">物流跟踪</router-link>
                        </li>
                    </ul>
                    <ul class="col-md-3">
                        <li><span>关于我们</span></li>
                        <li>
                            <router-link to="about-us">关于我们</router-link>
                        </li>
                        <li>
                            <router-link to="contact-us">联系我们</router-link>
                        </li>
                        <li>
                            <router-link to="cooperation">招商合作</router-link>
                        </li>
                    </ul>
                </div>
                <ul class="process-info-right col-md-3">
                    <li>联系我们</li>
                    <li>029-88221133</li>
                    <li>仅收市话费</li>
                    <li>周一至周日 8:00-18:00</li>
                </ul>
            </div>
        </div>
    </div>
</template>
