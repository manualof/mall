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
                action: `${window.api}/mall/admin/upload`,
                loading: false,
                self: this,
                shop: {
                    image: '',
                    level: '白金店铺',
                    logo: '',
                    phone: '',
                    type: '',
                },
                shopValidate: {
                    type: [
                        {
                            message: '店铺分类不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
            };
        },
        methods: {
            removeImage() {
                this.shop.image = '';
            },
            removeLogo() {
                this.shop.logo = '';
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.shop.validate(valid => {
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
            uploadBefore() {
                injection.loading.start();
            },
            uploadError(error, data) {
                const self = this;
                injection.loading.error();
                if (typeof data.message === 'object') {
                    for (const p in data.message) {
                        self.$notice.error({
                            title: data.message[p],
                        });
                    }
                } else {
                    self.$notice.error({
                        title: data.message,
                    });
                }
            },
            uploadFormatError(file) {
                this.$notice.warning({
                    title: '文件格式不正确',
                    desc: `文件 ${file.name} 格式不正确`,
                });
            },
            uploadSuccess(data) {
                const self = this;
                injection.loading.finish();
                self.$notice.open({
                    title: data.message,
                });
                self.shop.logo = data.data.path;
            },
            uploadSuccessImage(data) {
                const self = this;
                injection.loading.finish();
                self.$notice.open({
                    title: data.message,
                });
                self.shop.image = data.data.path;
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="shop-wrap">
            <tabs value="name1">
                <tab-pane label="店铺设置" name="name1">
                    <card :bordered="false">
                        <i-form ref="shop" :model="shop" :rules="shopValidate" :label-width="180">
                            <row>
                                <i-col span="14">
                                    <form-item label="店铺等级">
                                        {{ shop.level}}
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="14">
                                    <form-item label="店铺分类" prop="type">
                                        <i-input v-model="shop.type"></i-input>
                                        <p class="tip">关键字最多可输入50字，请用","进行分隔，例如，"男装，女装，童装"</p>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="14">
                                    <form-item label="店铺LOGO" prop="logo">
                                        <div class="image-preview" v-if="shop.logo">
                                            <img :src="shop.logo">
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
                                                v-if="shop.logo === '' || shop.logo === null">
                                        </upload>
                                        <p class="tip">建议使用200像素×60像素内的GIF或PNG透明图片</p>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="14">
                                    <form-item label="店铺头像" prop="image">
                                        <div class="image-preview" v-if="shop.image">
                                            <img :src="shop.image">
                                            <icon type="close" @click.native="removeImage"></icon>
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
                                                :on-success="uploadSuccessImage"
                                                ref="upload"
                                                :show-upload-list="false"
                                                v-if="shop.image === '' || shop.image === null">
                                        </upload>
                                        <p class="tip">建议使用200像素×60像素内的GIF或PNG透明图片</p>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="14">
                                    <form-item label="店铺电话">
                                        <i-input v-model="shop.phone"></i-input>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="14">
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
                </tab-pane>
                <tab-pane label="轮播图设置" name="name2">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>