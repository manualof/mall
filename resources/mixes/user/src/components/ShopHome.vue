<template>
    <div class="shop-home">
        <div class="container home-shop clearfix">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" :data-slide-to="index-1" :class="{active:index=1}"
                        v-for="index in shop.banner.length"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item" :class="{active:index === 1}" v-for="(item,index) in shop.banner">
                        <img :src="item.img">
                    </div>
                </div>
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
        <div class="container">
            <div class="shop-wrap pull-left">
                <div class="shop-title">
                    <img :src="shop.img" alt="">
                    <p>{{ shop.name }}</p>
                    <p>店铺评分：<i>{{ shop.score }}</i></p>
                    <a class="btn">关注店铺</a>
                </div>
                <div class="workingTime">
                    <p>工作时间  <span>{{ shop.workingHours }}-{{ shop.offHours }}</span></p>
                    <h5>售前客服</h5>
                    <ul class="clearfix">
                        <li class="pull-left" v-for="service in shop.preSaleServices">
                            <router-link to="/">
                                {{ service.name }}
                                <img :src="service.img" alt="">
                            </router-link>
                        </li>
                    </ul>
                    <h5>售后客服</h5>
                    <ul class="clearfix">
                        <li class="pull-left" v-for="service in shop.afterSaleServices">
                            <router-link to="/">
                                {{ service.name }}
                                <img :src="service.img" alt="">
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
            <search-list></search-list>
        </div>
        <need-browse></need-browse>
        <everyone-browse></everyone-browse>
        <myself-browse></myself-browse>
        <right-side></right-side>
    </div>
</template>
<script>
    import shop from '../assets/images/shopBanner.png';
    import service from '../assets/images/service.png';
    import shopImg from '../assets/images/img_lofo.png';
    import EveryoneBrowse from './dashboard/EveryoneBrowse';
    import MyselfBrowse from './dashboard/MyselfBrowse';
    import NeedBrowse from './dashboard/NeedBrowse';
    import RightSide from './dashboard/RightSide';
    import SearchList from './dashboard/SearchList';

    export default {
        components: {
            EveryoneBrowse,
            MyselfBrowse,
            NeedBrowse,
            RightSide,
            SearchList,
        },
        data() {
            return {
                shop: {
                    img: shopImg,
                    banner: [
                        {
                            img: shop,
                        },
                        {
                            img: shop,
                        },
                        {
                            img: shop,
                        },
                        {
                            img: shop,
                        },
                    ],
                    name: 'xxx旗舰店',
                    offHours: '23:00',
                    score: 9.2,
                    preSaleServices: [
                        {
                            name: '客服1',
                            img: service,
                        },
                        {
                            name: '客服2',
                            img: service,
                        },
                        {
                            name: '客服3',
                            img: service,
                        },
                        {
                            name: '客服4',
                            img: service,
                        },
                    ],
                    afterSaleServices: [
                        {
                            name: '客服1',
                            img: service,
                        },
                        {
                            name: '客服2',
                            img: service,
                        },
                    ],

                    workingHours: '9:00',
                },
            };
        },
    };
</script>
