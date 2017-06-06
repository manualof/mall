<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                msg: 'Welcome to Your Vue.js App',
            };
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-refund">
            fgfgjk
        </div>
    </div>
</template>