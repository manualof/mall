<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="service-returns">
            <p>加后缀check查看</p>
        </div>
    </div>
</template>