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
                self: this,
            };
        },
        methods: {
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="order-setting">
            <tabs value="name1">
                <tab-pane label="发货地址" name="name1">
                    <card :bordered="false">

                    </card>
                </tab-pane>
                <tab-pane label="默认物流公司" name="name2">
                    <card :bordered="false">

                    </card>
                </tab-pane>
                <tab-pane label="免运费额度" name="name3">
                    <card :bordered="false">

                    </card>
                </tab-pane>
                <tab-pane label="发货单打印" name="name4">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>