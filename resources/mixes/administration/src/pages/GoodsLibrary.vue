<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/img_logo.png';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            const self = this;
            return {
                libraryColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'name',
                        title: '商品名称',
                    },
                    {
                        align: 'center',
                        key: 'pic',
                        render(h, data) {
                            return h('tooltip', {
                                props: {
                                    placement: 'right-end',
                                },
                                scopedSlots: {
                                    content() {
                                        return h('img', {
                                            domProps: {
                                                src: data.row.pic,
                                            },
                                        });
                                    },
                                    default() {
                                        return h('icon', {
                                            props: {
                                                type: 'image',
                                            },
                                        });
                                    },
                                },
                            });
                        },
                        title: '商品图片',
                        width: 120,
                    },
                    {
                        align: 'left',
                        key: 'advertising',
                        title: '广告词',
                    },
                    {
                        align: 'center',
                        key: 'configurationID',
                        title: '分类ID',
                    },
                    {
                        align: 'center',
                        key: 'configurationName',
                        title: '分类名称',
                    },
                    {
                        align: 'center',
                        key: 'brandID',
                        title: '品牌ID',
                    },
                    {
                        align: 'center',
                        key: 'brandName',
                        title: '品牌名称',
                    },
                    {
                        align: 'center',
                        key: 'time',
                        title: '发布时间',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('div', [
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.toEdit(data.index);
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                }, '编辑'),
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.remove(data.index);
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                    style: {
                                        marginLeft: '10px',
                                    },
                                }, '删除'),
                            ]);
                        },
                        title: '操作',
                        width: 160,
                    },
                ],
                libraryData: [
                    {
                        advertising: '17年春夏新品纯棉面料',
                        brandID: 33,
                        brandName: '迪卡侬',
                        configurationID: 33,
                        configurationName: '运动健康>户外>鞋服',
                        name: '太阳镜眼睛放蓝光紫外线',
                        pic: image1,
                        time: '2017-03-30 16:30:41',
                    },
                    {
                        advertising: '17年春夏新品纯棉面料',
                        brandID: 33,
                        brandName: '迪卡侬',
                        configurationID: 33,
                        configurationName: '运动健康>户外>鞋服',
                        name: '太阳镜眼睛放蓝光紫外线',
                        pic: image1,
                        time: '2017-03-30 16:30:41',
                    },
                    {
                        advertising: '17年春夏新品纯棉面料',
                        brandID: 33,
                        brandName: '迪卡侬',
                        configurationID: 33,
                        configurationName: '运动健康>户外>鞋服',
                        name: '太阳镜眼睛放蓝光紫外线',
                        pic: image1,
                        time: '2017-03-30 16:30:41',
                    },
                    {
                        advertising: '17年春夏新品纯棉面料',
                        brandID: 33,
                        brandName: '迪卡侬',
                        configurationID: 33,
                        configurationName: '运动健康>户外>鞋服',
                        name: '太阳镜眼睛放蓝光紫外线',
                        pic: image1,
                        time: '2017-03-30 16:30:41',
                    },
                ],
                searchCategory: '',
                searchList: [
                    {
                        label: '商品名称',
                        value: '商品名称',
                    },
                    {
                        label: '分类名称',
                        value: '分类名称',
                    },
                    {
                        label: '品牌名称',
                        value: '品牌名称',
                    },
                ],
                searchWord: '',
                self: this,
            };
        },
        methods: {
            addData() {
                const self = this;
                self.$router.push(
                    {
                        path: 'library/add',
                    },
                );
            },
            remove(index) {
                this.libraryData.splice(index, 1);
            },
            toEdit() {
                const self = this;
                self.$router.push(
                    {
                        path: 'library/edit',
                    },
                );
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-library">
            <tabs value="name1">
                <tab-pane label="商品库管理" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>商品库中该数据的删除不影响店铺已经认领的商品</p>
                        </div>
                        <div class="store-body">
                            <div class="store-body-header">
                                <i-button class="export-btn" @click="addData" type="ghost">+新增数据</i-button>
                                <div class="store-body-header-right">
                                    <i-input v-model="searchWord" placeholder="请输入关键词进行搜索">
                                        <i-select v-model="searchCategory" slot="prepend" style="width: 100px">
                                            <i-option :value="item.value"
                                                      :key="item"
                                                      v-for="item in searchList" >{{ item.label }}</i-option>
                                        </i-select>
                                        <i-button slot="append" type="primary">搜索</i-button>
                                    </i-input>
                                </div>
                            </div>
                            <i-table class="shop-table"
                                     :context="self"
                                     :columns="libraryColumns"
                                     :data="libraryData"
                                     ref="orderTable"
                                     highlight-row>
                            </i-table>
                        </div>
                        <div class="page">
                            <page :total="100" show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>