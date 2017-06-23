<template>
    <div class="shop-home">
        <div class="container home-shop clearfix">
            <div class="shop-img">
                <img src="../assets/images/shop-home.png">
            </div>
            <div class="shop-info">
                <div class="shop-title clearfix">
                    <div class="intro-img">
                        <img src="../assets/images/details/shop.png">
                    </div>
                    <div class="shop-name">
                        <h4>xxx母婴用品店</h4>
                        <p>在售商品<span class="sell-num">24</span>个</p>
                    </div>
                </div>
                <p class="shop-txt">
                    Tangle ANGEL是凯特王妃的御用美发师Richard Ward所创品牌，旗下有Tangle ANGEL、 Tangle CHERUB多个系列产品。Richard Ward是几百位明星和政要的御用发型师。其所创的Tangle ANGEL是专注于打理头发的新一代产品，“防毛躁、梳柔顺、无疼痛感”都是美发梳的代言词，抗菌是美发梳特有的专利配方。在英国是众多时尚达人的新宠。</p>
                <a class="attention-btn order-btn">+关注</a>
            </div>
        </div>
        <div class="container">
            <div class="arrangement-method clearfix">
                <ul class="clearfix pull-left">
                    <li class="active text-center pull-left">人气<i class="icon iconfont icon-paixu"> </i></li>
                    <li class="text-center pull-left">销量<i class="icon iconfont icon-paixu"> </i></li>
                    <li class="text-center pull-left">价格<i class="icon iconfont icon-paixu"> </i></li>
                    <li class="text-center pull-left">新品<i class="icon iconfont icon-paixu"> </i></li>
                </ul>
                <div class="price">
                    <input type="number" min="0" placeholder="￥">
                    -
                    <input type="number" min="0" placeholder="￥">
                </div>
                <div class="check-box select">
                    <span><input type="checkbox" class="input_check" id="check3"><label for="check3"> </label></span>
                    包邮
                </div>
                <div class="check-box select">
                    <span><input type="checkbox" class="input_check" id="check4"><label for="check4"> </label></span>
                    折扣
                </div>
                <span class="page pull-right">
        1/10
        <i class="icon iconfont icon-gengduo page-pre active"> </i>
        <i class="icon iconfont icon-gengduo page-pre"> </i>
      </span>
            </div>
        </div>
        <search-list></search-list>
        <need-browse></need-browse>
        <everyone-browse></everyone-browse>
        <myself-browse></myself-browse>
        <right-side></right-side>
    </div>
</template>
<script>

    import SearchList from './dashboard/SearchList';
    import NeedBrowse from './dashboard/NeedBrowse';
    import EveryoneBrowse from './dashboard/EveryoneBrowse';
    import MyselfBrowse from './dashboard/MyselfBrowse';
    import RightSide from './dashboard/RightSide';

    export default {
        components: {
            SearchList,
            NeedBrowse,
            EveryoneBrowse,
            MyselfBrowse,
            RightSide,
        },
    };
</script>
