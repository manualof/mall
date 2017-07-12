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
                action: `${window.api}/mall/admin/upload`,
                addAlbum: true,
                addPhoneAlbum: true,
                distribution: [
                    {
                        label: '333',
                        value: '1',
                    },
                    {
                        label: '444',
                        value: '2',
                    },
                ],
                form: {
                    barCode: '',
                    distribution: '',
                    goodComment: '',
                    goodOrigin: '',
                    goodStyle: '',
                    logo: '',
                    name: '',
                    picture: '',
                    price: '',
                    remarks: '',
                    selectStyle: ['个护化妆', '营养辅食'],
                    sellPoint: '',
                },
                goodStyle: [
                    {
                        label: '华为',
                        value: '1',
                    },
                    {
                        label: '苹果',
                        value: '2',
                    },
                ],
                goodComment: [
                    {
                        label: '好',
                        value: '1',
                    },
                    {
                        label: '一般',
                        value: '2',
                    },
                ],
                goodOrigin: [
                    {
                        label: '南',
                        value: '1',
                    },
                    {
                        label: '北',
                        value: '2',
                    },
                ],
                isEditPicture: false,
                isEditText: false,
                isPcPicture: false,
                isPhonePicture: false,
                loading: false,
                priceList: [
                    {
                        label: '100-200',
                        value: '1',
                    },
                    {
                        label: '400-600',
                        value: '2',
                    },
                ],
                rules: {
                    logo: [
                        {
                            message: '商品图片不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                    name: [
                        {
                            message: '商品名称不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
                styleData: [
                    {
                        children: [
                            {
                                value: '童车童床',
                                label: '童车童床',
                                children: [
                                    {
                                        label: '婴儿推车',
                                        value: '婴儿推车',
                                    },
                                    {
                                        label: '自行车',
                                        value: '自行车',
                                    },
                                    {
                                        label: '婴儿推车',
                                        value: '婴儿推车',
                                    },
                                    {
                                        label: '电动车',
                                        value: '电动车',
                                    },
                                    {
                                        label: '安全座椅',
                                        value: '安全座椅',
                                    },
                                ],
                            },
                            {
                                label: '营养辅食',
                                value: '营养辅食',
                            },
                            {
                                label: '尿裤湿巾',
                                value: '尿裤湿巾',
                            },
                        ],
                        label: '个护化妆',
                        value: '个护化妆',
                    },
                    {
                        children: [
                            {
                                children: [
                                    {
                                        label: '婴儿推车1',
                                        value: '婴儿推车1',
                                    },
                                    {
                                        label: '自行车2',
                                        value: '自行车2',
                                    },
                                    {
                                        label: '婴儿推车3',
                                        value: '婴儿推车3',
                                    },
                                    {
                                        label: '电动车',
                                        value: '电动车',
                                    },
                                    {
                                        label: '安全座椅4',
                                        value: '安全座椅4',
                                    },
                                ],
                                label: '服饰寝居',
                                value: '服饰寝居',
                            },
                            {
                                children: [
                                    {
                                        label: '婴儿推车1',
                                        value: '婴儿推车1',
                                    },
                                    {
                                        label: '自行车2',
                                        value: '自行车2',
                                    },
                                ],
                                label: '营养辅食',
                                value: '营养辅食',
                            },
                            {
                                children: [
                                    {
                                        label: '车1',
                                        value: '车1',
                                    },
                                    {
                                        label: '自行车2',
                                        value: '自行车2',
                                    },
                                ],
                                label: '尿裤湿巾',
                                value: '尿裤湿巾',
                            },
                        ],
                        label: '家用电器',
                        value: '家用电器',
                    },
                ],
            };
        },
        methods: {
            addAlbumPicture() {
                this.addAlbum = false;
                this.isPcPicture = true;
            },
            addPhonePicture() {
                this.addPhoneAlbum = false;
                this.isPhonePicture = true;
            },
            addText() {
                const self = this;
                self.isEditText = !self.isEditText;
            },
            closePcAlbum() {
                this.isPcPicture = false;
                this.addAlbum = true;
            },
            closePhoneAlbum() {
                this.isPhonePicture = false;
                this.addPhoneAlbum = true;
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            removeLogo() {
                this.form.logo = '';
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.form.validate(valid => {
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
            submitTextContent() {},
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
            uploadErrorPicture(file) {
                this.$notice.warning({
                    title: '文件格式不正确',
                    desc: `文件 ${file.name} 格式不正确`,
                });
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
                self.form.logo = data.data.path;
            },
            uploadSuccessPicture(data) {
                const self = this;
                injection.loading.finish();
                self.$notice.open({
                    title: data.message,
                });
                self.form.picture = data.data.path;
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-library-edit ">
            <div class="store-refund-process">
                <div class="edit-link-title">
                    <i-button type="text" @click.native="goBack">
                        <icon type="chevron-left"></icon>
                    </i-button>
                    <span>商品库管理—编辑</span>
                </div>
                <div>
                    <card :bordered="false">
                        <i-form ref="form" :model="form" :rules="rules" :label-width="200">
                            <div class="library-application">
                                <h5>商品基本信息</h5>
                                <div class="application-content refund-module">
                                    <row>
                                        <i-col span="12">
                                            <form-item label="商品分类">
                                                <cascader :data="styleData"
                                                          change-on-select
                                                          v-model="form.selectStyle"></cascader>
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="12">
                                            <form-item label="商品名称" prop="name">
                                                <i-input v-model="form.name"></i-input>
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="12">
                                            <form-item label="商品卖点">
                                                <i-input v-model="form.sellPoint" type="textarea"
                                                         :autosize="{minRows: 3,maxRows: 5}"></i-input>
                                                <p class="tip">商品卖点最长不超过140个汉字</p>
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="10">
                                            <form-item label="商品条形码">
                                                <i-input v-model="form.barCode"></i-input>
                                                <p class="tip">请填写商品条形码下方数字</p>
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row class="row-goods-upload">
                                        <i-col span="24">
                                            <form-item label="商品图片" prop="logo">
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
                                                <p class="tip">第一张图片为默认主图，图片支持JPG、gif、png格式上传或从图片空间中选择，
                                                    建议使用尺寸800*800像素以上，大小不超过4M的正方形图片，单击选中图片，
                                                    可进行上传，替换和删除
                                                </p>
                                                <i-button type="ghost">从图片空间上传</i-button>
                                            </form-item>
                                        </i-col>
                                    </row>
                                </div>
                            </div>
                            <div class="library-application">
                                <h5>商品详情描述</h5>
                                <div class="application-content">
                                    <row>
                                        <i-col span="10">
                                            <form-item label="商品品牌">
                                                <i-select v-model="form.goodStyle">
                                                    <i-option v-for="item in goodStyle" :value="item.value"
                                                              :key="item">{{ item.label }}</i-option>
                                                </i-select>
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="24">
                                            <form-item label="商品属性" class="good-edit-style">
                                                <row>
                                                    <i-col span="6">
                                                        <span class="style-title">价格区间</span>
                                                        <i-select v-model="form.price">
                                                            <i-option v-for="item in priceList" :value="item.value"
                                                                      :key="item">{{ item.label }}</i-option>
                                                        </i-select>
                                                    </i-col>
                                                    <i-col span="6">
                                                        <span class="style-title">口碑</span>
                                                        <i-select v-model="form.goodComment">
                                                            <i-option v-for="item in goodComment" :value="item.value"
                                                                      :key="item">{{ item.label }}</i-option>
                                                        </i-select>
                                                    </i-col>
                                                    <i-col span="6">
                                                        <span class="style-title">区域配送</span>
                                                        <i-select v-model="form.distribution">
                                                            <i-option v-for="item in distribution" :value="item.value"
                                                                      :key="item">{{ item.label }}</i-option>
                                                        </i-select>
                                                    </i-col>
                                                    <i-col span="6">
                                                        <span class="style-title">产地</span>
                                                        <i-select v-model="form.goodOrigin">
                                                            <i-option v-for="item in goodOrigin" :value="item.value"
                                                                      :key="item">{{ item.label }}</i-option>
                                                        </i-select>
                                                    </i-col>
                                                </row>
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="24">
                                            <form-item label="商品描述" class="remark-input">
                                                <row>
                                                    <i-col span="24">
                                                        <div>
                                                            <tabs type="card">
                                                                <tab-pane label="电脑端" class="pc-module-content">
                                                                    <row>
                                                                        <i-col span="18">
                                                                            <div class="edit-content-area">

                                                                            </div>
                                                                        </i-col>
                                                                        <i-col span="6"></i-col>
                                                                    </row>
                                                                    <i-button class="close-album"
                                                                              @click.native="addAlbumPicture"
                                                                              v-if="addAlbum"
                                                                              type="ghost">插入相册图片</i-button>
                                                                    <div class="picture-edit-area" v-if="isPcPicture">
                                                                        <i-button class="close-album"
                                                                                  @click.native="closePcAlbum"
                                                                                  type="ghost">关闭相册</i-button>
                                                                        <p>用户相册>全部图片</p>
                                                                        <div class="picture-content">
                                                                            <row>
                                                                                <i-col span="4" v-for="img in [1,2,3,4,5,6,7,8,9]">
                                                                                    <img src="../assets/images/adv.jpg" alt="">
                                                                                </i-col>
                                                                            </row>
                                                                            <div class="page">
                                                                                <page :total="100" show-elevator></page>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </tab-pane>
                                                                <tab-pane label="手机端" class="mobile-module-content">
                                                                    <row class="row-phone-line">
                                                                        <i-col span="10" class="request-col-border">
                                                                            <div class="pro-des">
                                                                                <div class="pro-bg">
                                                                                    <span>图片总数不得超过20张，
                                                                                        文字不得超过500字</span>
                                                                                </div>
                                                                                <div class="pro-bg2">
                                                                                    <i-button type="ghost">插入图片</i-button>
                                                                                    <i-button @click.native="addText" class="ivu-button-text"
                                                                                              type="ghost">添加文字</i-button>
                                                                                </div>
                                                                                <div class="pro-content">
                                                                                    <div class="image-preview">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </i-col>
                                                                        <i-col span="14" class="request-col-line">
                                                                            <row>
                                                                                <i-col span="18">
                                                                                    <ul class="request">
                                                                                        <li>
                                                                                            <p>1.基本要求</p>
                                                                                            <div>
                                                                                                <p>（1）手机详情总体大小：图片+文字，图片不超过20张，文字不超过5000字；</p>
                                                                                                <p>建议：所有图片都是本宝贝相关的图片</p>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>2.图片大小要求</p>
                                                                                            <div>
                                                                                                <p>（1）建议使用宽度480~620像素、高度小于等于960像素的图片；</p>
                                                                                                <p>（2）格式为：jpg、jepg、gif、png</p>
                                                                                                <p>举例：可以上传一张宽度为480，高度为960像素，格式为jpg的图片</p>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>3.文字要求</p>
                                                                                            <div>
                                                                                                <p>（1）每次插入文字不能超过500个字，标点、特殊字符按照一个字计算；</p>
                                                                                                <p>（2）请手动输入文字，不要复制粘网页上的文字，防止出现乱码；</p>
                                                                                                <p>（3）以下特殊字符“<”、“>”、“ " ”、“ ' ”、“\”会被替换为空</p>
                                                                                                <p>建议：不要添加太多的文字，这样看起来更清晰</p>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </i-col>
                                                                                <i-col span="10"></i-col>
                                                                            </row>

                                                                        </i-col>
                                                                    </row>
                                                                    <div>
                                                                        <i-button class="close-album"
                                                                                  @click.native="addPhonePicture"
                                                                                  v-if="addPhoneAlbum"
                                                                                  type="ghost">插入相册图片</i-button>
                                                                        <div class="picture-edit-area"
                                                                             v-if="isPhonePicture">
                                                                            <i-button type="ghost" class="close-album"
                                                                                      @click.native="closePhoneAlbum">
                                                                                关闭相册</i-button>
                                                                            <p>用户相册>全部图片</p>
                                                                            <div class="picture-content">
                                                                                <row class="row-phone-line">
                                                                                    <i-col span="4" v-for="img in [1,2,3,4,5,6,7,8,9]">
                                                                                        <img src="../assets/images/adv.jpg" alt="">
                                                                                    </i-col>
                                                                                </row>
                                                                                <div class="page">
                                                                                    <page :total="100" show-elevator></page>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-edit-area" v-if="isEditText">
                                                                            <span>还可以输入500字</span><br>
                                                                            <i-input  type="textarea"
                                                                                      v-model="form.remarks"
                                                                                      :autosize="{minRows: 6,maxRows: 8}"></i-input>
                                                                            <i-button type="ghost">确认</i-button>
                                                                            <i-button @click.native="submitTextContent"
                                                                                      type="ghost">提交</i-button>
                                                                        </div>
                                                                    </div>
                                                                </tab-pane>
                                                            </tabs>
                                                        </div>
                                                    </i-col>
                                                </row>
                                            </form-item>
                                        </i-col>
                                    </row>
                                </div>
                            </div>
                            <div class="library-application">
                                <h5>商品基本信息</h5>
                                <div class="application-content refund-module">
                                    <row>
                                        <i-col span="12">
                                            <form-item label="商品重量">
                                                <i-input></i-input>
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="12">
                                            <form-item label="商品体积">
                                                <i-input></i-input>
                                            </form-item>
                                        </i-col>
                                    </row>
                                </div>
                            </div>
                            <row>
                                <i-col span="18">
                                    <form-item label="">
                                        <i-button :loading="loading" @click.native="submit" type="primary">
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
        </div>
    </div>
</template>