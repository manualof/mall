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
                    attributes: [
                        {
                            intro: '32英寸以上',
                            single: false,
                            spu: false,
                            type: '价格',
                        },
                        {
                            intro: '支持',
                            single: false,
                            spu: false,
                            type: '尺寸',
                        },
                        {
                            intro: '智能电视,全高清',
                            single: false,
                            spu: false,
                            type: '功能',
                        },
                    ],
                    checkboxAllBrand: [],
                    checkboxDefault: [],
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
                    goodsSort: '',
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
                        label: 'SPU',
                        value: '1',
                    },
                    {
                        label: 'SKU',
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
                checkboxSelect: false,
            };
        },
        methods: {
            addCustomer() {
                this.editDetail.attributes.push(
                    {
                        intro: '',
                        single: false,
                        spu: false,
                        type: '',
                    },
                );
            },
            checkChange() {
                this.checkboxSelect = true;
            },
            deletePreForm(index) {
                this.editDetail.attributes.splice(index, 1);
            },
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
        <div class="goods-category-look-under-edit">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>分类管理—编辑"项链"</span>
            </div>
            <card :bordered="false">
                <i-form ref="editDetail" :model="editDetail" :rules="ruleValidate" :label-width="200">
                    <div class="basic-information">
                        <row>
                            <i-col span="12">
                                <form-item label="分类名称">
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
                                    <p class="tip">在商品列表页的展示方式</p>
                                    <p class="tip">"SKU": 以某一个SKU分别展示,例如,商品列表页同款商品分别展示不同颜色</p>
                                    <p class="tip">"SPU": 每个SPU只展示一个SKU,默认销量最大且有库存的SKU</p>
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
                                </form-item>
                            </i-col>
                            <i-col span="1" class="inline-symbol">%</i-col>
                        </row>
                        <row>
                            <i-col span="20">
                                <form-item label="关联品牌" class="quike-position">
                                    <div class="flex-position">
                                        <span class="title">快捷定位</span>
                                        <cascader :data="styleData" trigger="hover" @on-change="handleChange"></cascader>
                                        <span class="intro">分类下对应的品牌</span>
                                    </div>
                                    <div class="recommended-classification recommended-brand">
                                        <ul>
                                            <li v-for="item in editDetail.contactBrand">
                                                <p>{{ item.brand }}</p>
                                                <checkbox-group>
                                                    <checkbox :label="item.name" v-for="item in item.brandList"></checkbox>
                                                </checkbox-group>
                                            </li>
                                        </ul>
                                    </div>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="20">
                                <form-item label="关联规格" class="quike-position">
                                    <div class="flex-position">
                                        <span class="title">快捷定位</span>
                                        <cascader :data="styleData" trigger="hover" @on-change="handleChange"></cascader>
                                        <span class="intro">分类下对应的规格</span>
                                    </div>
                                    <div class="recommended-classification recommended-brand">
                                        <ul>
                                            <li v-for="item in editDetail.contactSpecification">
                                                <p>{{ item.brand }}</p>
                                                <checkbox-group>
                                                    <checkbox :label="item.name" v-for="item in item.brandList"></checkbox>
                                                </checkbox-group>
                                            </li>
                                        </ul>
                                    </div>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col>
                                <form-item label="添加属性" class="form-item-attribute">
                                    <row v-for="(item, index) in editDetail.attributes" class="row-attributes">
                                        <i-col span="2" style="width: 50px">
                                            <i-input :value="index+1"></i-input>
                                        </i-col>
                                        <i-col span="3">
                                            <i-input v-model="item.type"></i-input>
                                        </i-col>
                                        <i-col span="7">
                                            <i-input v-model="item.intro"></i-input>
                                        </i-col>
                                        <i-col span="4" style="width: 60px">
                                            <checkbox v-model="item.single">显示</checkbox>
                                        </i-col>
                                        <i-col span="4" style="width: 80px">
                                            <!--<label class="ivu-checkbox-wrapper">
                                                <span class="ivu-checkbox" :class="{'ivu-checkbox-checked': checkboxSelect === true}">
                                                    <span class="ivu-checkbox-inner"></span>
                                                    <input type="radio" name="sku" class="ivu-checkbox-input"
                                                           @change="checkChange">
                                                </span> SKU展示
                                            </label>-->
                                            <checkbox v-model="item.sku" >SKU展示</checkbox>
                                        </i-col>
                                        <i-col span="2" style="width: 56px">
                                            <i-button type="ghost">编辑</i-button>
                                        </i-col>
                                        <i-col span="2" style="width: 56px">
                                            <i-button type="error" @click.native="deletePreForm(index)">删除</i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <i-button class="add-btn" type="ghost"
                                              @click.native="addCustomer">+添加一个属性</i-button>
                                    <p class="tip">已添加属性为商城前台商品筛选条件及商品详情</p>
                                    <p class="tip">需要修改属性值,请点击属性后面的编辑按钮</p>
                                    <p class="tip">商品展示方式若为SKU展示,则可勾选一SKU(单选);若为SPU展示,勾选后无效</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="排序">
                                    <i-input v-model="editDetail.goodsSort"></i-input>
                                    <p class="tip">数字范围为0~255,数字越小越靠前</p>
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