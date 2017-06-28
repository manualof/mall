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
                jQuery('body').animate({ scrollTop: 0 }, 1080);
                return false;
            },
        },
        mounted() {
            jQuery('.right-side').css({
                position: 'absolute',
                top: '800px',
            });
            jQuery('.toTop').fadeOut();
            jQuery(window).scroll(
                () => {
                    if (jQuery(window).scrollTop() > 800) {
                        jQuery('.toTop').fadeIn(1500);
                        jQuery('.right-side').css(
                            {
                                position: 'fixed',
                                top: '50%',
                            },
                        );
                        if (jQuery(window).scrollTop() > 2000) {
                            jQuery('.floor').fadeIn(300);
                        }
                    } else {
                        jQuery('.toTop').fadeOut(1500);
                        jQuery('.floor').fadeOut(1000);
                        jQuery('.right-side').css(
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
