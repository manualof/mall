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
                    contactBrand: [
                        {
                            brand: '平板电视',
                            brandList: [
                                {
                                    name: '三星',
                                },
                                {
                                    name: '索尼',
                                },
                                {
                                    name: '康佳',
                                },
                                {
                                    name: '海信',
                                },
                                {
                                    name: '三星1',
                                },
                                {
                                    name: '三星4',
                                },
                            ],
                        },
                        {
                            brand: '冰箱',
                            brandList: [
                                {
                                    name: '三星',
                                },
                                {
                                    name: '索尼',
                                },
                                {
                                    name: '康佳',
                                },
                                {
                                    name: '海信',
                                },
                                {
                                    name: '三星1',
                                },
                                {
                                    name: '三星4',
                                },
                            ],
                        },
                        {
                            brand: '电脑',
                            brandList: [
                                {
                                    name: '三星',
                                },
                                {
                                    name: '索尼',
                                },
                                {
                                    name: '康佳',
                                },
                                {
                                    name: '海信',
                                },
                                {
                                    name: '三星1',
                                },
                                {
                                    name: '三星4',
                                },
                            ],
                        },
                    ],
                    contactSpecification: [
                        {
                            brand: '默认',
                            brandList: [
                                {
                                    name: '三星',
                                },
                                {
                                    name: '索尼',
                                },
                                {
                                    name: '康佳',
                                },
                                {
                                    name: '海信',
                                },
                                {
                                    name: '三星1',
                                },
                                {
                                    name: '三星4',
                                },
                            ],
                        },
                        {
                            brand: '服饰鞋帽',
                            brandList: [
                                {
                                    name: '尺码',
                                },
                            ],
                        },
                        {
                            brand: '雨伞雨具',
                            brandList: [
                                {
                                    name: '颜色',
                                },
                            ],
                        },
                    ],
                    enabled: true,
                    image: '',
                    link: '',
                    name: '',
                    positionStandard: [],
                    positionType: [],
                    sort: '',
                },
                loading: false,
                rules: {
                    positionStandard: [
                        {
                            message: '推荐品牌不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                    positionType: [
                        {
                            message: '推荐分类不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
                styleData: [
                    {
                        children: [
                            {
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
                                label: '童车童床',
                                value: '童车童床',
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
                                value: '服饰寝居',
                                label: '服饰寝居',
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
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
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
        <div class="configuration-category-edit">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>分类导航-编辑"数码办公"</span>
            </div>
            <card :bordered="false">
                <div class="prompt-box">
                    <p>提示</p>
                    <p>设置前台左上侧商品分类导航的相关信息，可以设置分类前图标、推荐分类、推荐品牌以及两张广告图片</p>
                    <p>分类导航信息设置完成后，需进入"平台>设置>清理缓存>首页及频道"操作后生效</p>
                </div>
                <i-form :label-width="200" :model="form" ref="form" :rules="rules">
                    <row>
                        <i-col span="12">
                            <form-item label="分类图片" prop="image">
                                <div class="image-preview" v-if="form.image">
                                    <img :src="form.image">
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
                                        v-if="form.image === '' || form.image === null">
                                </upload>
                                <p class="tip">建议使用16*16像素png透明背景图片</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="20">
                            <form-item label="推荐分类" class="quike-position" prop="positionType">
                                <div class="flex-position">
                                    <span>分类下的三级分类</span>
                                </div>
                                <div class="recommended-classification recommended-brand">
                                    <ul>
                                        <li v-for="item in form.contactBrand">
                                            <p>{{ item.brand }}</p>
                                            <checkbox-group>
                                                <checkbox :label="item.name"
                                                          v-for="item in item.brandList"></checkbox>
                                            </checkbox-group>
                                        </li>
                                    </ul>
                                </div>
                                <p class="tip">推荐分类将在展开后的二、三级导航列表右侧突出显示，建议根据分类蒙城长度控制选择数
                                    量不超过8个以确保展示效果</p>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="20">
                            <form-item label="推荐品牌" class="quike-position" prop="positionStandard">
                                <div class="flex-position">
                                    <span class="title">快捷定位</span>
                                    <cascader :data="styleData" trigger="hover" v-model="form.positionStandard"
                                              @on-change="handleChange1"></cascader>
                                    <span class="intro">分类下的商品类型</span>
                                </div>
                                <div class="recommended-classification recommended-brand">
                                    <ul>
                                        <li v-for="item in form.contactSpecification">
                                            <p>{{ item.brand }}</p>
                                            <checkbox-group>
                                                <checkbox :label="item.name" v-for="item in item.brandList"></checkbox>
                                            </checkbox-group>
                                        </li>
                                    </ul>
                                </div>
                                <p class="tip">推荐品牌将在展开后的二、三级导航列表右侧突出显示，建议选择数量为8个具有图片的品牌，
                                    超过将被隐藏</p>
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