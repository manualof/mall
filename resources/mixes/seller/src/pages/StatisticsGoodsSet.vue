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
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.goodsEdit.validate(valid => {
                    if (valid) {
                        self.$Message.success('提交成功!');
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="statistics-goods-setting">
            <div class="store-refund-process">
                <div class="edit-link-title">
                    <i-button type="text" @click.native="goBack">
                        <icon type="chevron-left"></icon>
                    </i-button>
                    <span>价格销量-设置价格区间</span>
                </div>
                <card :bordered="false">
                    <div class="prompt-box">
                        <p>提示</p>
                        <p>设置商品价格区间，当对商品价格进行相关统计时按照以下设置的价格区间进行统计和显示</p>
                        <p>设置价格区间的几点建议：一、建议设置的第一个价格区间起始额为0：二、价格区间应该设置完整，
                            不要缺少任何一个起始额和结束额；三、价格区间数值应连贯，例如0~100、101~200</p>
                    </div>
                    <tabs type="card">
                        <tab-pane label="标签一">标签一的内容</tab-pane>
                        <tab-pane label="标签">标签的内容</tab-pane>
                    </tabs>
                </card>
            </div>
        </div>
    </div>
</template>
