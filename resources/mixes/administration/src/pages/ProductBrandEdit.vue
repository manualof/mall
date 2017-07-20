<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            injection.loading.start();
            injection.http.post(`${window.api}/mall/admin/product/brand`, {
                id: to.params.id,
            }).then(response => {
                window.console.log(response);
                next(vm => {
                    vm.form = response.data.data;
                    injection.loading.finish();
                    injection.sidebar.active('mall');
                });
            }).catch(() => {
                injection.loading.fail();
            });
        },
        data() {
//            const validateSort = (rule, value, callback) => {
//                if (!Number.isInteger(value)) {
//                    callback(new Error('请输入数字值'));
//                } else if (Number.isInteger(value)) {
//                    if (value > 255) {
//                        callback(new Error('请输入排序范围内的数字'));
//                    } else {
//                        callback();
//                    }
//                }
//            };
            return {
                action: `${window.api}/mall/admin/upload`,
                form: {
                    category_id: 0,
                    initial: '',
                    logo: '',
                    name: '',
                    recommend: true,
                    show: 'image',
                    sort: '',
                },
                initials: [
                    {
                        label: 'A',
                        value: '1',
                    },
                    {
                        label: 'B',
                        value: '2',
                    },
                ],
                addType: false,
                defaultList: [],
                loading: false,
                rules: {
                    name: [
                        {
                            message: '名称不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                    initial: [
                        {
                            message: '名称首字母不能为空',
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
                styleDataList: [],
            };
        },
        methods: {
            addContactType() {
                this.addType = true;
                this.styleDataList.push(
                    {
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
                    },
                );
            },
            deleteType(index) {
                this.styleDataList.splice(index, 1);
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
                        self.$http.post(`${window.api}/mall/admin/product/brand/edit`, self.form).then(() => {
                            self.$notice.open({
                                title: '编辑商品品牌信息成功！',
                            });
                            self.$router.push('/mall/goods/brand');
                        }).catch(() => {
                            self.$notice.error({
                                title: '编辑商品品牌信息失败！',
                            });
                        }).finally(() => {
                            self.loading = false;
                        });
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
                self.form.logo = data.data.path;
            },
//            validatorSort() {
//                const self = this;
//                const reg1 = /^\d$/;
//                if (!reg1.test(self.form.sort)) {
//                    self.$notice.error({
//                        title: '排序必须为数字！',
//                    });
//                }
//            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-brand-edit">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>品牌管理—编辑</span>
            </div>
            <card :bordered="false">
                <i-form ref="form" :model="form" :rules="rules" :label-width="200">
                    <div>
                        <row>
                            <i-col span="12">
                                <form-item label="品牌名称" prop="name">
                                    <i-input v-model="form.name"></i-input>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="名称首字母" prop="initial">
                                    <i-select :placeholder="form.initial">
                                        <i-option v-for="item in initials" :value="item.value"
                                                  :key="item">{{ item.label }}</i-option>
                                    </i-select>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="所属分类">
                                    <div class="flex-module">
                                        <cascader :data="styleData"
                                                  change-on-select
                                                  v-model="form.category_id"></cascader>
                                    </div>
                                    <div v-for="(item, index) in styleDataList" v-if="addType" class="contact-margin">
                                        <div class="contact-classification">
                                            <cascader :data="item.styleData"
                                                      change-on-select></cascader>
                                            <i-button type="error" @click.native="deleteType(index)">删除</i-button>
                                        </div>
                                    </div>
                                    <p class="tip">
                                        请选择分类，可关联大分类或更具体的下级分类
                                    </p>
                                    <i-button class="add-contact-type" type="ghost"
                                              @click.native="addContactType">增加关联分类</i-button>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="20">
                                <form-item label="品牌LOGO" prop="logo">
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
                                    <p class="tip">品牌LOGO尺寸要求宽度为150像素，高度为50像素，比例为3:1的图片；
                                        支持格式gif、jpg、png</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="20">
                                <form-item label="展示方式">
                                    <radio-group v-model="form.show">
                                        <radio label="图片"></radio>
                                        <radio label="文字"></radio>
                                    </radio-group>
                                    <p class="tip">在"全部品牌"页面的展示方式，如果设置为"图片"则显示该品牌的"品牌图片标识"，
                                        如果设置为"文字"则显示该品牌的“品牌名”</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="20">
                                <form-item label="是否推荐">
                                    <i-switch size="large" v-model="form.recommend">
                                        <span slot="open">开启</span>
                                        <span slot="close">关闭</span>
                                    </i-switch>
                                    <p class="tip">选择被推荐的图片将在所有品牌列表页"推荐品牌"位置展现</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="排序" prop="sort">
                                    <i-input v-model="form.sort"></i-input>
                                    <p class="tip">
                                        数字范围为0~255，数字越小越靠前
                                    </p>
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