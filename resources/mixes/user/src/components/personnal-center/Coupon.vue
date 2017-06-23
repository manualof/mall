<template>
    <div class="coupon">
        <h4>我的优惠券</h4>
        <div class="exchange">
            输入兑换码:
            <input class="exchange-code" type="text">
            <button class="exchange-btn order-btn">兑换</button>
        </div>
        <div class="clearfix nav-box">
            <ul id="myTab" class="tab-nav clearfix">
                <li class="active">
                    <a href="#usable" data-toggle="tab">
                        可使用
                        <span class="product-num"></span>
                    </a>
                    <i></i>
                </li>
                <li>
                    <a href="#used" data-toggle="tab">
                        已使用
                        <span class="product-num"></span>
                    </a>
                    <i></i>
                </li>
                <li>
                    <a href="#failure" data-toggle="tab">
                        已失效
                        <span class="product-num"></span>
                    </a>
                    <i></i>
                </li>
            </ul>
        </div>
        <div id="myTabContent" class="tab-content">
            <ul class="tab-pane fade in active clearfix" id="usable">
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
            </ul>
            <ul class="tab-pane fade in" id="used">
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
            </ul>
            <ul class="tab-pane fade in" id="failure">
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
                <li class="pull-left pane pull-left">
                    <div class="coupons">
                        <p class="text-center"><span class="symbol">￥</span>50</p>
                        <p class="text-center">满399元可用</p>
                    </div>
                    <div class="coupons-info text-center">
                        <ul class="text-left">
                            <li>品类限制：户外运动</li>
                            <li>使用时间：2016.12.12-201712.30</li>
                            <li>其他说明：无</li>
                        </ul>
                        <button class="use">立即使用</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
