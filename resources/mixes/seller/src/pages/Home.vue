<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            return {};
        },
        methods: {},
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="home-wrap">
            <tabs value="home">
                <tab-pane label="首页" name="home">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>