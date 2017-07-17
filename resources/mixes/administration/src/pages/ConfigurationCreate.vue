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
        methods: {
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.form.validate(valid => {
                    if (valid) {
                        self.$http.post(`${window.api}/mall/admin/configuration/set`, self.form).then(() => {
                            self.$notice.open({
                                title: '更新商城配置成功！',
                            });
                        }).finally(() => {
                            self.loading = false;
                        });
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
        <div class="mall-configuration-create">
            <card :bordered="false">
                <i-form :label-width="200" :model="form" ref="form" :rules="rules">
                    <row>
                        <i-col span="12">
                            <form-item label="网站 Logo" prop="logo">
                                <div class="image-preview" v-if="form.logo">
                                    <img :src="form.logo">
                                    <icon type="close" @click.native="removeLogo"></icon>
                                </div>
                                <upload :action="action"
                                        :before-upload="uploadBefore"
                                        :format="['jpg','jpeg','png']"
                                        :headers="{
                                                    Authorization: `Bearer ${$store.state.token.access_token}`
                                                }"
                                        :max-size="2048"
                                        :on-error="uploadError"
                                        :on-format-error="uploadFormatError"
                                        :on-success="uploadSuccess"
                                        ref="upload"
                                        :show-upload-list="false"
                                        v-if="form.logo === '' || form.logo === null">
                                </upload>
                                <p class="tip">默认网站LOGO，通用头部显示，最佳显示尺寸为240*60像素</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="平台客服联系电话" prop="phone">
                                <i-input v-model="form.phone"></i-input>
                                <p class="tip">商城中心右下侧显示，方便客户遇到问题时咨询，多个请用半角逗号“，”隔开</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="平台客服电子邮件" prop="email">
                                <i-input v-model="form.email"></i-input>
                                <p class="tip">商城中心右下侧显示，方便客户遇到问题时咨询</p>
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