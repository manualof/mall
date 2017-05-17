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
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'pic',
                        render() {
                            return '<icon type="image"></icon>';
                        },
                        title: '商品图片',
                        width: 170,
                    },
                    {
                        align: 'left',
                        key: 'advertising',
                        title: '广告词',
                        width: 170,
                    },
                    {
                        align: 'center',
                        key: 'configurationID',
                        title: '分类ID',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'configurationName',
                        title: '分类名称',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'brandID',
                        title: '品牌ID',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'brandName',
                        title: '品牌名称',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'time',
                        title: '发布时间',
                        width: 250,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button class="first-btn" @click.native="toEdit"
                                    type="ghost" size="small">编辑</i-button>
                                    <i-button class="first-btn" @click.native="remove(${index})"
                                    size="small" type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
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
                        pic: '',
                        time: '2017-03-30 16:30:41',
                    },
                    {
                        advertising: '17年春夏新品纯棉面料',
                        brandID: 33,
                        brandName: '迪卡侬',
                        configurationID: 33,
                        configurationName: '运动健康>户外>鞋服',
                        name: '太阳镜眼睛放蓝光紫外线',
                        pic: '',
                        time: '2017-03-30 16:30:41',
                    },
                    {
                        advertising: '17年春夏新品纯棉面料',
                        brandID: 33,
                        brandName: '迪卡侬',
                        configurationID: 33,
                        configurationName: '运动健康>户外>鞋服',
                        name: '太阳镜眼睛放蓝光紫外线',
                        pic: '',
                        time: '2017-03-30 16:30:41',
                    },
                    {
                        advertising: '17年春夏新品纯棉面料',
                        brandID: 33,
                        brandName: '迪卡侬',
                        configurationID: 33,
                        configurationName: '运动健康>户外>鞋服',
                        name: '太阳镜眼睛放蓝光紫外线',
                        pic: '',
                        time: '2017-03-30 16:30:41',
                    },
                ],
                searchCategory: '',
                searchWord: '',
                searchList: [
                    {
                        label: '店铺名称',
                        value: '订单编号',
                    },
                    {
                        label: '商品名称',
                        value: '商品名称',
                    },
                    {
                        label: '商品分类',
                        value: '商品分类',
                    },
                ],
                self: this,
            };
        },
        methods: {
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
                                <i-button class="export-btn" @click="exportData" type="ghost">+新增数据</i-button>
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
