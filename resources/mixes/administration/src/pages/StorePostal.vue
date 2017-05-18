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
                loading: false,
                postalForm: {
                    shop: ['系统默认等级'],
                },
                ruleValidate: {},
            };
        },
        methods: {
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.postalForm.validate(valid => {
                    if (valid) {
                        window.console.log(valid);
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
    <div class="mall-wrap">
        <div class="store-postal">
            <tabs value="name1">
                <tab-pane label="包邮" name="name1">
                    <card :bordered="none">
                        <i-form :label-width="200" ref="postalForm" :model="postalForm" :rules="ruleValidate">
                            <row>
                                <i-col span="12">
                                    <form-item label="可使用店铺" prop="shop">
                                        <checkbox-group v-model="postalForm.shop">
                                            <checkbox label="系统默认等级"></checkbox>
                                            <checkbox label="等级1"></checkbox>
                                            <checkbox label="等级2"></checkbox>
                                            <checkbox label="等级3"></checkbox>
                                        </checkbox-group>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="12">
                                    <form-item>
                                        <i-button @click.native="submit" type="primary">
                                            <span v-if="!loading">确认提交</span>
                                            <span v-else>正在提交…</span>
                                        </i-button>
                                    </form-item>
                                </i-col>
                            </row>
                        </i-form>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>