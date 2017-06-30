<template>
    <ul class="right-side">
        <li>
            <router-link class="text-center" :to="{ name: 'personnal-center' }">
                <i class="icon iconfont icon-denglu"></i>我的
            </router-link>
        </li>
        <li>
            <router-link class="text-center" :to="{ name: 'cart-settlement' }">
                <i class="icon iconfont icon-gouwuche"></i>购物车
            </router-link>
        </li>
        <li>
            <router-link class="text-center" :to="{ name: 'customer-serve' }">
                <i class="icon iconfont icon-kefu"></i>客服
            </router-link>
        </li>
        <li @click="toTop" class="toTop">
            <a class="text-center" href="javascript:void (0)">
                <p>TOP</p>
                <i class="icon iconfont icon-top"> </i>
            </a>
        </li>
    </ul>
</template>

<script>
    export default {
        methods: {
            toTop() {
                window.jQuery('body').animate({ scrollTop: 0 }, 1080);
                return false;
            },
        },
        mounted() {
            window.jQuery('.right-side').css({
                position: 'absolute',
                top: '800px',
            });
            window.jQuery('.toTop').fadeOut();
            window.jQuery(window).scroll(
                () => {
                    if (window.jQuery(window).scrollTop() > 800) {
                        window.jQuery('.toTop').fadeIn(1500);
                        window.jQuery('.right-side').css(
                            {
                                position: 'fixed',
                                top: '50%',
                            },
                        );
                        if (window.jQuery(window).scrollTop() > 2000) {
                            window.jQuery('.floor').fadeIn(300);
                        }
                    } else {
                        window.jQuery('.toTop').fadeOut(1500);
                        window.jQuery('.floor').fadeOut(1000);
                        window.jQuery('.right-side').css(
                            {
                                position: 'absolute',
                                top: '800px',
                            },
                        );
                    }
                },
            );
        },
    };
</script>
