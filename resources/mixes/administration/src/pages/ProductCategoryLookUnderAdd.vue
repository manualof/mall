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
                form: {
                    goodsSort: '',
                    quotaRatio: '',
                    showStyle: '',
                    typeName: '',
                },
                loading: false,
                rules: {
                    quotaRatio: [
                        {
                            message: '分佣比例不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                    typeName: [
                        {
                            message: '名称名称不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
                showStyle: [
                    {
                        label: '颜色',
                        value: '1',
                    },
                    {
                        label: '类型',
                        value: '2',
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
                self.$refs.form.validate(valid => {
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
        <div class="goods-category-look-under-add">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>分类管理—新增</span>
            </div>
            <card :bordered="false">
                <i-form ref="form" :model="form" :rules="rules" :label-width="200">
                    <div class="basic-information">
                        <row>
                            <i-col span="12">
                                <form-item label="分类名称" prop="typeName">
                                    <i-input v-model="form.typeName"></i-input>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="分佣比例" prop="quotaRatio">
                                    <i-input v-model="form.quotaRatio"></i-input>
                                    <div class="tip">
                                        <p>分佣比例必须为0-100的整数,默认关联至子分类</p>
                                    </div>
                                </form-item>
                            </i-col>
                            <i-col span="1" class="inline-symbol">%</i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="上级分类">
                                    <i-select placeholder="请选择" v-model="form.showStyle">
                                        <i-option v-for="item in showStyle" :value="item.value"
                                                  :key="item">{{ item.label }}</i-option>
                                    </i-select>
                                    <p class="tip">如果选择上级分类,那么新的分类则为被选择上级分类的子分类</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="排序">
                                    <i-input v-model="form.goodsSort"></i-input>
                                    <p class="tip">数字范围为0~255，数字越小越靠前</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item>
                                    <i-button :loading="loading" type="primary" @click.native="submit">
                                        <span v-if="!loading">确认提交</span>
                                        <span v-else>正在提交…</span>
                                    </i-button>
                                </form-item>
                            </i-col>
                        </row>
                    </div>
                </i-form>
            </card>
        </div>
    </div>
</template>