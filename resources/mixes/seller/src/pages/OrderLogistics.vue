<script>
    import injection from '../helpers/injection';
    import image from '../assets/images/adv.jpg';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                imag: image,
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="order-logistics">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>所有订单-物流详情</span>
            </div>
            <card :bordered="false">

            </card>
        </div>
    </div>
</template>