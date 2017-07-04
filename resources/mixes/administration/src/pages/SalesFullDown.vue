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
                        render() {
                            return '<icon type="image"></icon>';
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
                        render() {
                            return `<i-switch size="large" v-model="row.status">
                                    <span slot="open">开启</span>
                                    <span slot="close">关闭</span>
                                    </i-switch>`;
                        },
                        title: '状态',
                        width: 240,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render() {
                            return '<i-button class="delete-ad" size="small" type="ghost">屏蔽</i-button>';
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
                self: this,
            };
        },
        methods: {
            look() {
                const self = this;
                self.$router.push({
                    path: 'spikes/look',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-fulldown">
            <tabs value="name1">
                <tab-pane label="满减活动" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>商家发布的满减活动列表</p>
                            <p>删除操作不可恢复，请慎重操作</p>
                        </div>
                        <div class="goods-body-header">
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
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
