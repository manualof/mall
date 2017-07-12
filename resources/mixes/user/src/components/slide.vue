<script>
    import { swiper, swiperSlide } from 'vue-awesome-swiper';
    import small from '../assets/images/s4.jpg';
    import small2 from '../assets/images/s6.jpg';
    import big from '../assets/images/b1.png';

    export default {
        components: {
            swiper,
            swiperSlide,
        },
        data() {
            return {
                banner: {
                    smalls: [
                        small,
                        small2,
                        small,
                        small2,
                    ],
                    bigs: [
                        big,
                        big,
                        big,
                        big,
                    ],
                },
                bigOption: {
                    autoplay: false,
                    loop: true,
                    notNextTick: true,
                },
                smallOption: {
                    autoplay: false,
                    slidesPerView: 4.86,
                    loop: true,
                    spaceBetween: 10,
                    notNextTick: true,
                    prevButton: '.swiper-button-prev',
                    nextButton: '.swiper-button-next',
                },
            };
        },
        mounted() {
            const self = this;
            const a = new window.Swiper('#7878', {
                control: [
                    self.$refs.mySwiperA,
                    self.$refs.mySwiperB,
                ],
            });
            window.console.log(a);
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
    .swiper2 .swiper-slide-active {
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
                <router-link to="/">
                    <img :src="item">
                </router-link>
            </swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
        </swiper>
        <div class="swiper2">
            <swiper :options="smallOption" ref="mySwiperB">
                <swiper-slide v-for="(item, index) in banner.smalls" :key="index">
                    <router-link to="/">
                        <img :src="item">
                    </router-link>
                </swiper-slide>
            </swiper>
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
        </div>
    </div>
</template>