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
                businessmenColumns: [
                    {
                        align: 'center',
                        key: 'activeName',
                        title: '活动名称',
                    },
                    {
                        align: 'center',
                        key: 'businessmenName',
                        title: '商家名称',
                    },
                    {
                        align: 'center',
                        key: 'businessmenId',
                        title: '商家ID',
                    },
                    {
                        align: 'center',
                        key: 'startTime',
                        title: '开始时间',
                    },
                    {
                        align: 'center',
                        key: 'endTime',
                        title: '结束时间',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('div', [
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.look(data.index);
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                }, '查看'),
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.toEdit();
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                    style: {
                                        marginLeft: '10px',
                                    },
                                }, '屏蔽'),
                            ]);
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                businessmenData: [
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                    {
                        activeName: '春季服装大秒杀活动',
                        businessmenName: '数码数码',
                        businessmenId: '222',
                        endTime: '2018-02-30',
                        startTime: '2018-04-23',
                    },
                ],
                goodsColumns: [
                    {
                        align: 'center',
                        key: 'goodsName',
                        title: '商品名称',
                        width: 240,
                    },
                    {
                        align: 'center',
                        key: 'goodsImg',
                        render(h, data) {
                            return h('tooltip', {
                                props: {
                                    placement: 'right-end',
                                },
                                scopedSlots: {
                                    content() {
                                        return h('img', {
                                            domProps: {
                                                src: data.row.goodsImg,
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
                    },
                    {
                        align: 'center',
                        key: 'goodsPrice',
                        title: '活动价格',
                    },
                    {
                        align: 'center',
                        key: 'prePrice',
                        title: '原价',
                    },
                    {
                        align: 'center',
                        key: 'startTime',
                        title: '开始时间',
                    },
                    {
                        align: 'center',
                        key: 'endTime',
                        title: '结束时间',
                    },
                    {
                        align: 'center',
                        key: 'status',
                        render(h, data) {
                            return h('i-switch', {
                                on: {
                                    'on-change': value => {
                                        let count = 0;
                                        self.goodsData.forEach(item => {
                                            if (item.status === true) {
                                                count += 1;
                                            }
                                        });
                                        if (value === true) {
                                            count += 1;
                                        }
                                        if (count <= 5) {
                                            self.goodsData[data.index].status = value;
                                        } else {
                                            const a = self.goodsData[data.index];
                                            a.status = false;
                                            self.$set(self.goodsData, data.index, a);
                                            self.$notice.error({
                                                title: '最多同时推荐五种商品！',
                                            });
                                        }
                                    },
                                },
                                props: {
                                    size: 'large',
                                    value: self.goodsData[data.index].status,
                                },
                                scopedSlots: {
                                    close() {
                                        return h('span', '关闭');
                                    },
                                    open() {
                                        return h('span', '开启');
                                    },
                                },
                            });
                        },
                        title: '推荐',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h) {
                            return h('i-button', {
                                props: {
                                    size: 'small',
                                    type: 'ghost',
                                },
                            }, '屏蔽');
                        },
                        title: '操作',
                        width: 120,
                    },
                ],
                goodsData: [
                    {
                        endTime: '2017-2-02',
                        goodsImg: image1,
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsImg: image1,
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: false,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsImg: image1,
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsImg: image1,
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsImg: image1,
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsImg: image1,
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: false,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsImg: image1,
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: false,
                    },
                ],
                searchList: [
                    {
                        label: '商品名称',
                        value: '1',
                    },
                    {
                        label: '商品ID',
                        value: '2',
                    },
                ],
                searchListBusis: [
                    {
                        label: '商家名称',
                        value: '1',
                    },
                    {
                        label: '商家ID',
                        value: '2',
                    },
                ],
            };
        },
        methods: {
            exportBusinessmenData() {
                this.$refs.businessmenList.exportCsv({
                    filename: '活动商家列表数据',
                });
            },
            exportGoodsData() {
                this.$refs.goodsList.exportCsv({
                    filename: '活动商品列表数据',
                });
            },
            look() {
                const self = this;
                self.$router.push({
                    path: 'spikes/look',
                });
            },
        },
        watch: {
            goodsData: {
                deep: true,
                handler() {},
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-spikes">
            <tabs value="name1">
                <tab-pane label="首页秒杀推荐" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>可以查看活动商品，并屏蔽</p>
                            <p>推荐商品默认在商城显示前五件，其余在商城首页不显示</p>
                        </div>
                        <div class="spikes-content">
                            <div class="goods-body-header">
                                <i-button class="export-btn" @click="exportGoodsData" type="ghost">导出数据</i-button>
                                <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                                <div class="goods-body-header-right">
                                    <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                        <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                            <i-option v-for="item in searchList"
                                                      :value="item.value">{{ item.label }}</i-option>
                                        </i-select>
                                        <i-button slot="append" type="primary">搜索</i-button>
                                    </i-input>
                                </div>
                            </div>
                            <i-table class="goods-table"
                                     :columns="goodsColumns"
                                     :context="self"
                                     :data="goodsData"
                                     ref="goodsList">
                            </i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
                            </div>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="秒杀频道设置" name="name2">
                    <card :bordered="false">
                        <div class="spikes-content">
                            <div class="goods-body-header">
                                <i-button class="export-btn" @click="exportBusinessmenData" type="ghost">导出数据</i-button>
                                <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                                <div class="goods-body-header-right">
                                    <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                        <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                            <i-option v-for="item in searchListBusis"
                                                      :value="item.value">{{ item.label }}</i-option>
                                        </i-select>
                                        <i-button slot="append" type="primary">搜索</i-button>
                                    </i-input>
                                </div>
                            </div>
                            <i-table class="goods-table"
                                     :columns="businessmenColumns"
                                     :context="self"
                                     :data="businessmenData"
                                     ref="businessmenList">
                            </i-table>
                            <div class="page">
                                <page :total="100" show-elevator></page>
                            </div>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
