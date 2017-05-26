<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {};
        },
        methods: {
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="shop-message">
            <tabs value="name1">
                <tab-pane label="店铺信息" name="name1">
                    <card :bordered="false">
                        <i-form ref="goodsEdit" :model="goodsEdit" :rules="ruleValidate" :label-width="200">
                            <div class="library-application">
                                <h5>商品基本信息</h5>
                                <div>
                                    <row>
                                        <i-col span="12">
                                            <form-item label="商品名称">
                                                rdygrt
                                            </form-item>
                                        </i-col>
                                    </row>
                                </div>
                            </div>
                        </i-form>
                    </card>
                </tab-pane>
                <tab-pane label="申请续签" name="name2">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
