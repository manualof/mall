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
                        render(h) {
                            return h('icon', {
                                props: {
                                    type: 'image',
                                },
                            });
                        },
                        title: '商品图片',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'goodsPrice',
                        title: '活动价格',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'prePrice',
                        title: '原价',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'startTime',
                        title: '开始时间',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'endTime',
                        title: '结束时间',
                        width: 180,
                    },
                    {
                        align: 'center',
                        key: 'status',
                        render(h, data) {
                            return h('i-switch', {
                                props: {
                                    size: 'large',
                                    value: data.row.status,
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
                        width: 240,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(h) {
                            return h('i-button', {
                                props: {
                                    class: 'delete-ad',
                                    size: 'small',
                                    type: 'ghost',
                                },
                            }, '屏蔽');
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                goodsData: [
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                    {
                        endTime: '2017-2-02',
                        goodsName: 'Sony/索尼 SGP512CN WIFI 32..',
                        goodsPrice: '99.00',
                        prePrice: '199.00',
                        startTime: '2017-2-02',
                        status: true,
                    },
                ],
                managementSearch: '',
                searchList: [
                    {
                        label: '店铺名称',
                        value: '店铺名称',
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
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-spikes-look">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>查看"数码数码"秒杀商品</span>
            </div>
            <div class="spikes-information">
                <card :bordered="false">
                    <div class="prompt-box">
                        <p>提示</p>
                        <p>可以查看活动商品，进行置顶与屏蔽操作</p>
                        <p>默认商品列表前五件商品在商城前台首页显示</p>
                    </div>
                    <div class="goods-body-header">
                        <div class="goods-body-header-right">
                            <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                    <i-option v-for="item in searchList"
                                              :value="item.value">{{ item.label }}
                                    </i-option>
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
                </card>
            </div>
        </div>
    </div>
</template>
