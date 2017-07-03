<template>
    <div class="collect-store">
        <div class="saases-title">
            <span>我的收藏</span>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div  v-for="(item, index) in goods" v-if="item.collector" class="col-sm-3">
                <div>
                    <img :src="item.imgsrc" alt="">
                    <div class="goods-msg">
                        <div class="price">
                            <i>￥</i><span>{{ item.pricle }}</span>
                            <span class="old-price">￥{{ item.oldprice }}</span>
                        </div>
                        <div class="goods-name">
                            {{ item.name }}
                        </div>
                        <div class="xiaoliang">
                            <div class="month-xiaoliang">本月销量 <b>{{ item.num }} </b>件</div>
                            <div @click="quxiao(index)" class="quxiao">取消收藏</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import image1 from '../../assets/images/img_07.png';

    export default {
        data() {
            return {
                goods: [
                    {
                        name: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: 'Apple iPhone 6 32G 金色 移动联通电信4G手机',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                ],
            };
        },
        methods: {
            quxiao(num) {
                this.goods[num].collector = false;
            },
        },
    };
</script>