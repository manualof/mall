<script>
    import injection from '../helpers/injection';

    export default {
        data() {
            return {

            };
        },
        methods: {

        },
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="statistics">
            <tabs value="name1">
                <tab-pane label="基本统计" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>符合以下任何一种条件的订单即为有效订单：1.采用在线支付方式并且已付款：
                                2.采用货到付款方式并且交易已完成</p>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="商品价格区间" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>设置商品价格区间，当对商品价格进行相关统计时按照以下设置的价格区间进行统计和显示</p>
                            <p>设置价格区间的几点建议：一、建议设置的第一价格区间起始额为0：二、价格区间应该设置完整，
                                不要缺少任何一个起始额和结束额：三、价格区间数值应该连贯，例：0~100，101~200</p>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="订单金额区间" name="name3">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>设置订单金额区间，当对订单金额进行相关统计时按照以下设置的价格区间进行统计和显示</p>
                            <p>设置价格区间的几点建议：一、建议设置的第一价格区间起始额为0：二、价格区间应该设置完整，
                                不要缺少任何一个起始额和结束额：三、价格区间数值应该连贯，例：0~100，101~200</p>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>