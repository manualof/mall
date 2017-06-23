<template>
    <div class="shopping-process padding-attribute">
        <div class="container clearfix">
            <div class="side-bar">
                <div class="item-group" id="accordion">
                    <div class="item-content ">
                        <div class="item-heading">
                            <h4 class="item-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">购物流程</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="item-collapse collapse in">
                            <ul class="item-body" id="myTab1">
                                <li>
                                    <router-link to='shop-process'>购物流程</router-link>
                                </li>
                                <li>
                                    <router-link to='pay-method'>支付方式</router-link>
                                </li>
                                <li>
                                    <router-link to='common-problem'>常见问题</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-content ">
                        <div class="item-heading">
                            <h4 class="item-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo">退货流程</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="item-collapse collapse ">
                            <ul class="item-body">
                                <li>
                                    <router-link to='return-process'>退货流程</router-link>
                                </li>
                                <li>
                                    <router-link to='return-money'>退款说明</router-link>
                                </li>
                                <li>
                                    <router-link to='contact-service'>联系客服</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-content ">
                        <div class="item-heading">
                            <h4 class="item-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree">配送方式</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="item-collapse collapse">
                            <ul class="item-body">
                                <li>
                                    <router-link to='delivery-method'>配送方式</router-link>
                                </li>
                                <li>
                                    <router-link to='delivery-sevice'>配送服务</router-link>
                                </li>
                                <li>
                                    <router-link to='delivery-track'>物流跟踪</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-content ">
                        <div class="item-heading">
                            <h4 class="item-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFour">关于我们</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="item-collapse collapse">
                            <ul class="item-body">
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
                    </div>
                </div>
            </div>
            <div class="list-content">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>