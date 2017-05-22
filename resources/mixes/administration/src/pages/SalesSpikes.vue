<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            return {
            };
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-spikes">
            <tabs value="name1">
                <tab-pane label="秒杀活动" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>可以查看活动商品，并屏蔽</p>
                            <p>推荐商品默认在商城显示前五件，其余在商城首页不显示</p>
                        </div>
                        <div class="spikes-content">
                            <tabs type="card">
                                <tab-pane label="活动商品列表">

                                </tab-pane>
                                <tab-pane label="活动商家列表">

                                </tab-pane>
                            </tabs>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
