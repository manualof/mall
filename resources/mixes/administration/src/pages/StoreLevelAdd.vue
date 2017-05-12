<script>
    import injection from '../helpers/injection';

    export default {
        data() {
            return {
                action: `${window.api}/mall/upload`,
                typeData: {
                    levelName: '',
                    releaseNum: '',
                    uploadNum: '',
                    charges: '',
                    useType: [],
                    apply: '',
                    level: '',
                },
                ruleValidate: {
                    levelName: [
                        {
                            message: '等级名称不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                    charges: [
                        {
                            message: '收费标准不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                    apply: [
                        {
                            message: '申请说明不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                    level: [
                        {
                            message: '级别不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
                self: this,
                loading: false,
            };
        },
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.typeData.validate(valid => {
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
        <div class="store-level-add">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>店铺等级—新增</span>
            </div>
            <card :bordered="false">
                <i-form ref="typeData" :model="typeData" :rules="ruleValidate" :label-width="200">
                    <row>
                        <i-col span="12">
                            <form-item label="等级名称" prop="levelName">
                                <i-input v-model="typeData.levelName"></i-input>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="可发布商品数">
                                <i-input v-model="typeData.releaseNum"></i-input>
                                <p class="tip">0表示没有限制</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="可上传商品数" prop="uploadNum">
                                <i-input v-model="typeData.uploadNum"></i-input>
                                <p class="tip">0表示没有限制</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="收费标准" prop="charges">
                                <i-input v-model="typeData.charges"></i-input>
                                <p class="tip">收费标准，单位：元/年，必须为数字，在会员开通或升级店铺时将显示在前台</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="可使用插件" prop="useType">
                                <checkbox-group v-model="typeData.useType">
                                    <checkbox label="秒杀活动"></checkbox>
                                    <checkbox label="预售活动"></checkbox>
                                    <checkbox label="满减活动"></checkbox>
                                    <checkbox label="包邮"></checkbox>
                                </checkbox-group>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="18">
                            <form-item label="申请说明" prop="apply">
                                <i-input v-model="typeData.apply" type="textarea"></i-input>
                                <p class="tip">在会员开通或升级店铺时将显示在前台</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="级别" prop="level">
                                <i-input v-model="typeData.level"></i-input>
                                <p class="tip">数值越大表明级别越高</p>
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
                </i-form>
            </card>
        </div>
    </div>
</template>
