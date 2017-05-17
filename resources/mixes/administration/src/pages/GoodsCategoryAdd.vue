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
                editDetail: {
                    goodsSort: '',
                    interestStyle: true,
                    interestRadio: true,
                    interestType: true,
                    quotaRatio: '',
                    showStyle: '',
                    typeName: '',
                },
                location: [
                    {
                        label: '颜色',
                        value: '1',
                    },
                    {
                        label: '类型',
                        value: '2',
                    },
                ],
                loading: false,
                ruleValidate: {
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
                styleClassification: [
                    {
                        title: '运动品牌',
                    },
                    {
                        title: '运动品牌1',
                    },
                    {
                        title: '运动品牌2',
                    },
                    {
                        title: '运动品牌3',
                    },
                    {
                        title: '运动品牌4',
                    },
                    {
                        title: '运动品牌5',
                    },
                ],
                vertical: 'apple',
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
                self.$refs.editDetail.validate(valid => {
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
        <div class="goods-category-add">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>分类管理—新增</span>
            </div>
            <card :bordered="false">
                <i-form ref="editDetail" :model="editDetail" :rules="ruleValidate" :label-width="200">
                    <div class="basic-information">
                        <row>
                            <i-col span="12">
                                <form-item label="分类名称" prop="typeName">
                                    <i-input v-model="editDetail.typeName"></i-input>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="商品展示方式">
                                    <i-select placeholder="请选择" v-model="editDetail.showStyle">
                                        <i-option v-for="item in showStyle" :value="item.value"
                                                  :key="item">{{ item.label }}</i-option>
                                    </i-select>
                                    <div class="tip">
                                        <p>在商品列表页的展示方式</p>
                                        <p>"颜色"：每个SPU只展示不同个颜色SKU，同一颜色多个SKU只展示一个SKU</p>
                                        <p>"SPU"：每个SPU只展示一个SKU</p>
                                    </div>
                                    <checkbox v-model="editDetail.interestStyle" class="tip"
                                              style="text-align: inherit; color: inherit">关联到子分类</checkbox>
                                    <p class="contact tip">勾选关联到子分类后，被绑定的商品展示方式也将继承到子分类中使用</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="分佣比例" prop="quotaRatio">
                                    <i-input v-model="editDetail.quotaRatio"></i-input>
                                    <div class="tip">
                                        <p>分佣比例必须为0-100的整数</p>
                                    </div>
                                    <checkbox v-model="editDetail.interestRadio" class="tip"
                                              style="text-align: inherit; color: inherit">关联到子分类</checkbox>
                                    <p class="contact tip">勾选关联到子分类后，被绑定的商品展示方式也将继承到子分类中使用</p>
                                </form-item>
                            </i-col>
                            <i-col span="1" class="inline-symbol">%</i-col>
                        </row>
                        <row>
                            <i-col span="20">
                                <form-item label="类型" class="quike-position">
                                    <div class="flex-position">
                                        <span class="title">快捷定位</span>
                                        <cascader :data="styleData" trigger="hover" @on-change="handleChange"
                                        ></cascader>
                                        <span class="intro">分类下的商品类型</span>
                                    </div>
                                    <div class="goods-style-classification">
                                        <radio-group v-model="vertical" vertical>
                                            <radio label="无类型">
                                                <span>无类型</span>
                                            </radio>
                                            <p>默认</p>
                                            <radio :label="item.title" v-for="item in styleClassification">
                                                <span>{{ item.title }}</span>
                                            </radio>
                                        </radio-group>
                                    </div>
                                    <div>
                                        <p class="tip">如果当前下拉选项中没有适合的类型，可以去<a href="">类型管理</a>
                                            功能中添加新的类型</p>
                                        <checkbox v-model="editDetail.interestType" class="tip"
                                                  style="text-align: inherit; color: inherit">关联到子分类</checkbox>
                                        <p class="contact tip">
                                            勾选关联到子分类后，被绑定的商品展示方式也将继承到子分类中使用
                                        </p>
                                    </div>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="排序">
                                    <i-input v-model="editDetail.goodsSort"></i-input>
                                    <p class="contact tip">数字范围为0~255，数字越小越靠前</p>
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
