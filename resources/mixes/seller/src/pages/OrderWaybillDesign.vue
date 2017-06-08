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
                designForm: {
                    select: [],
                },
                loading: false,
                selectList: [
                    {
                        name: '收货人',
                    },
                    {
                        name: '收货人地址',
                    },
                    {
                        name: '收货人手机',
                    },
                    {
                        name: '备注信息',
                    },
                    {
                        name: '发货人',
                    },
                    {
                        name: '发货人地区',
                    },
                    {
                        name: '发货人公司',
                    },
                ],
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.designForm.validate(valid => {
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
    <div class="seller-wrap">
        <div class="order-waybill-design">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>自建模版-设计模版</span>
            </div>
            <card :bordered="false">
                <i-form ref="designForm" :model="designForm" :rules="ruleValidate" :label-width="180">
                    <row>
                        <i-col span="20">
                            <form-item label="选择打印项">
                                <checkbox-group v-model="designForm.select">
                                    <checkbox :label="item.name" v-for="item in selectList">
                                        <span>{{ item.name }}</span>
                                        <icon type="edit"></icon>
                                    </checkbox>
                                </checkbox-group>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="20">
                            <form-item label="打印项偏移校正">
                                <div class="correction-box">

                                </div>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="20">
                            <form-item>
                                <i-button :loading="loading" type="primary" @click.native="submit">
                                    <span v-if="!loading">确认提交</span>
                                    <span v-else>正在提交…</span>
                                </i-button>
                            </form-item>
                        </i-col>
                    </row>
                </i-form>
            </card>
        </div>
    </div>
</template>