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
                    <div>

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
                        name: '11',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: '11',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: '11',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: '11',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: '11',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: '11',
                        imgsrc: image1,
                        pricle: 3299,
                        oldprice: 46.88,
                        num: 3324,
                        collector: true,
                    },
                    {
                        name: '11',
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
            dothing() {
                console.log('111');
            },
        },
    };
</script>