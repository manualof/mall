<script>
    import { swiper, swiperSlide } from 'vue-awesome-swiper';
//    import magnifier from './magnifier';
    import small1 from '../assets/images/s1.jpg';
    import small2 from '../assets/images/s2.jpg';
    import small3 from '../assets/images/s3.jpg';
    import small4 from '../assets/images/s4.jpg';
    import small5 from '../assets/images/s5.jpg';
    import big1 from '../assets/images/b1.png';
    import big2 from '../assets/images/b2.jpg';
    import big3 from '../assets/images/b3.jpg';
    import big4 from '../assets/images/b4.jpg';
    import big5 from '../assets/images/b5.jpg';

    export default {
        components: {
            swiper,
            swiperSlide,
//            magnifier,
        },
        data() {
            const self = this;
            return {
                banner: {
                    smalls: [
                        small1,
                        small2,
                        small3,
                        small4,
                        small5,
                    ],
                    bigs: [
                        big1,
                        big2,
                        big3,
                        big4,
                        big5,
                    ],
                },
                bigOption: {
                    autoplay: false,
                    loop: false,
                    notNextTick: true,
                    slideToClickedSlide: true,
                    controlBy: 'container',
                    onSlideNextStart() {
                        if (self.$refs.mySwiperB.swiper) {
                            self.$refs.mySwiperB.swiper
                                .slideTo(self.$refs.mySwiperA.swiper.activeIndex);
                        }
                    },
                    onSlidePrevStart() {
                        if (self.$refs.mySwiperB.swiper) {
                            self.$refs.mySwiperB.swiper
                                .slideTo(self.$refs.mySwiperA.swiper.activeIndex);
                        }
                    },
                },
                smallOption: {
                    autoplay: false,
                    centeredSlides: true,
                    loop: false,
                    normalizeSlideIndex: false,
                    notNextTick: true,
                    nextButton: '.swiper-button-next',
                    onSlideNextStart() {
                        this.activeIndex = self.$refs.mySwiperB.swiper.activeIndex;
                        self.$refs.mySwiperA.swiper
                            .slideTo(self.$refs.mySwiperB.swiper.activeIndex);
                    },
                    onSlidePrevStart() {
                        this.activeIndex = self.$refs.mySwiperB.swiper.activeIndex;
                        self.$refs.mySwiperA.swiper
                            .slideTo(self.$refs.mySwiperB.swiper.activeIndex);
                    },
                    onTap() {
                        this.activeIndex = self.$refs.mySwiperB.swiper.activeIndex;
                        self.$refs.mySwiperA.swiper
                            .slideTo(self.$refs.mySwiperB.swiper.activeIndex);
                    },
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 10,
                    slideToClickedSlide: true,
                    slidesPerView: 4.86,
                    watchSlidesProgress: false,
                    watchSlidesVisibility: false,
                },
            };
        },
        computed: {
            swiperA() {
                return this.refs.mySwiperA.swiper;
            },
            swiperB() {
                return this.refs.mySwiperB.swiper;
            },
        },
        mounted() {
            this.swiperB.on('mouseover', () => {
                this.swiperB.onTap();
            });
        },
        methods: {
        },
    };
</script>
<style>
    .swiper-container {
        width: 500px;
    }
    .swiper2 .swiper-container {
        width: 450px;
        margin-top: 20px;
    }
    .swiper2 {
        width: 500px;
        margin: 0 auto;
        position: relative;
    }
    .swiper2 .swiper-slide-active img {
        box-sizing: border-box;
        border: 2px solid red;
    }
    .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
        left: 0;
    }
    .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
        right: 0;
    }
</style>
<template>
    <div>
        <swiper :options="bigOption" ref="mySwiperA">
            <swiper-slide v-for="(item, index) in banner.bigs" :key="index">
                <img :src="item">
            </swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
        </swiper>
        <div class="swiper2">
            <swiper :options="smallOption" ref="mySwiperB">
                <swiper-slide v-for="(item, index) in banner.smalls" :key="index">
                    <img :src="item">
                </swiper-slide>
            </swiper>
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
        </div>
    </div>
</template>