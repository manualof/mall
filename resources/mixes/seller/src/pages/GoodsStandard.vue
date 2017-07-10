<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            const self = this;
            return {
                firstType: [
                    {
                        label: '店铺名称',
                        value: '电子数码1',
                    },
                    {
                        label: '商品名称',
                        value: '电子数码2',
                    },
                    {
                        label: '商品分类',
                        value: '电子数码3',
                    },
                ],
                goodsColorColumns: [
                    {
                        align: 'center',
                        key: 'sort',
                        render(h, data) {
                            return h('input-number', {
                                props: {
                                    max: 10,
                                    min: 1,
                                    value: data.row.sortNum,
                                },
                                style: {
                                    width: '64px',
                                },
                            });
                        },
                        title: '排序',
                        width: 150,
                    },
                    {
                        key: 'standardName',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '269px',
                                },
                            });
                        },
                        title: '规格值名称',
                        width: 400,
                    },
                    {
                        key: 'color',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '124px',
                                },
                            });
                        },
                        title: '颜色色块',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('i-button', {
                                on: {
                                    click() {
                                        self.removeColorGoods(data.index);
                                    },
                                },
                                props: {
                                    size: 'small',
                                    type: 'ghost',
                                },
                            }, '删除');
                        },
                        title: '操作',
                        width: 150,
                    },
                ],
                goodsColorData: [
                    {
                        sortNum: 1,
                    },
                ],
                goodsSizeColumns: [
                    {
                        align: 'center',
                        key: 'sort',
                        render(h, data) {
                            return h('input-number', {
                                props: {
                                    max: 10,
                                    min: 1,
                                    value: data.row.sortNum,
                                },
                                style: {
                                    width: '64px',
                                },
                            });
                        },
                        title: '排序',
                        width: 150,
                    },
                    {
                        key: 'standardName',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '268px',
                                },
                            });
                        },
                        title: '规格值名称',
                        width: 400,
                    },
                    {
                        key: 'size',
                        render(h) {
                            return h('i-input', {
                                props: {
                                    type: 'ghost',
                                },
                                style: {
                                    width: '124px',
                                },
                            });
                        },
                        title: '尺码大小',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('i-button', {
                                on: {
                                    click() {
                                        self.removeSizeGoods(data.index);
                                    },
                                },
                                props: {
                                    class: 'delete-ad',
                                    type: 'ghost',
                                },
                            }, '删除');
                        },
                        title: '操作',
                        width: 150,
                    },
                ],
                goodsSizeData: [
                    {
                        sortNum: 1,
                    },
                ],
                goodsStyle: {
                    firstType: '',
                    secondType: '',
                    thirdType: '',
                },
                secondType: [
                    {
                        label: '店铺名称',
                        value: '电子数码1',
                    },
                    {
                        label: '商品名称',
                        value: '电子数码2',
                    },
                    {
                        label: '商品分类',
                        value: '电子数码3',
                    },
                ],
                self: this,
                thirdType: [
                    {
                        label: '店铺名称',
                        value: '电子数码1',
                    },
                    {
                        label: '商品名称',
                        value: '电子数码2',
                    },
                    {
                        label: '商品分类',
                        value: '电子数码3',
                    },
                ],
            };
        },
        methods: {
            addColorStandard() {
                this.goodsColorData.push();
            },
            removeColorGoods(index) {
                this.goodsColorData.splice(index, 1);
            },
            removeSizeGoods(index) {
                this.goodsSizeData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="goods-standard">
            <tabs value="name1">
                <tab-pane label="商品规格" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>1.选择店铺经营的商品分类，以读取平台绑定的商品分类-规格类型，如分类："服装","规格","颜色",
                                "尺码'等；当商品分类具有"颜色"规格时，可选择色块加以标识 </p>
                            <p>2.添加所属规格下的规格值，已有规格值可以删除，新增未保存的规格值可以移除；新增的规格值必须填写，
                                否则该行数据不会被更新或保存</p>
                            <p>3.可通过排序0~255改变规格值显示顺序；在发布商品是勾选已绑定的商品规格，还可对规格值进行"别名"
                                修改操作，但不会影响规格值默认名称的设定</p>
                        </div>
                        <div class="goods-list">
                            <row>
                                <i-col span="3">选择经营的商品分类</i-col>
                                <i-col span="4">
                                    <i-select v-model="goodsStyle.firstType">
                                        <i-option v-for="item in firstType"
                                                  :value="item.value">{{ item.label }}</i-option>
                                    </i-select>
                                </i-col>
                                <i-col span="4">
                                    <i-select v-model="goodsStyle.secondType">
                                        <i-option v-for="item in secondType"
                                                  :value="item.value">{{ item.label }}</i-option>
                                    </i-select>
                                </i-col>
                                <i-col span="4">
                                    <i-select v-model="goodsStyle.thirdType">
                                        <i-option v-for="item in thirdType"
                                                  :value="item.value">{{ item.label }}</i-option>
                                    </i-select>
                                </i-col>
                            </row>
                            <tabs type="card">
                                <tab-pane label="编辑颜色规格">
                                    <div class="btn-group">
                                        <i-button type="ghost" class="float-right"
                                                  @click="addColorStandard">添加规格值</i-button>
                                    </div>
                                    <i-table class="goods-table"
                                             :columns="goodsColorColumns"
                                             :context="self"
                                             :data="goodsColorData"
                                             ref="goodsColorList"
                                             highlight-row>
                                    </i-table>
                                </tab-pane>
                                <tab-pane label="编辑尺码规格">
                                    <div class="btn-group">
                                        <i-button type="ghost" class="float-right"
                                                  @click="addSizeStandard">添加规格值</i-button>
                                    </div>
                                    <i-table class="goods-table"
                                             :columns="goodsSizeColumns"
                                             :context="self"
                                             :data="goodsSizeData"
                                             ref="goodsSizeList"
                                             highlight-row>
                                    </i-table>
                                </tab-pane>
                            </tabs>
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