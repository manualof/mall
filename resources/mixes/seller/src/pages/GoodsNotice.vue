<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                goodsColumns: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'goodsSku',
                        title: '商品SKU',
                        width: 150,
                    },
                    {
                        key: 'goodsName',
                        title: '商品名称',
                        width: 600,
                    },
                    {
                        key: 'memberName',
                        title: '会员名称',
                        width: 150,
                    },
                    {
                        key: 'createdAt',
                        title: '添加时间',
                        width: 500,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button @click.native="removeGoods(${index})" class="delete-ad"
                                     type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 150,
                    },
                ],
                goodsData: [
                    {
                        createdAt: '2017-04-01 21:30:19',
                        goodsName: 'MIUI/小米 小米手机4 小米4代 MI4智能4G手机包邮 黑色 D-LTE（4G）/TD-SCD',
                        goodsSku: 265689,
                        memberName: 'benchu',
                    },
                    {
                        createdAt: '2017-04-01 21:30:19',
                        goodsName: 'MIUI/小米 小米手机4 小米4代 MI4智能4G手机包邮 黑色 D-LTE（4G）/TD-SCD',
                        goodsSku: 265689,
                        memberName: 'benchu',
                    },
                    {
                        createdAt: '2017-04-01 21:30:19',
                        goodsName: 'MIUI/小米 小米手机4 小米4代 MI4智能4G手机包邮 黑色 D-LTE（4G）/TD-SCD',
                        goodsSku: 265689,
                        memberName: 'benchu',
                    },
                    {
                        createdAt: '2017-04-01 21:30:19',
                        goodsName: 'MIUI/小米 小米手机4 小米4代 MI4智能4G手机包邮 黑色 D-LTE（4G）/TD-SCD',
                        goodsSku: 265689,
                        memberName: 'benchu',
                    },
                ],
                self: this,
            };
        },
        methods: {
            removeGoods(index) {
                this.goodsData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="goods-notice">
            <tabs value="name1">
                <tab-pane label="预约到货通知" name="name1">
                    <card :bordered="false">
                        <div class="goods-list">
                            <i-button type="ghost">批量删除</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                            <i-table class="goods-table"
                                     :columns="goodsColumns"
                                     :context="self"
                                     :data="goodsData"
                                     ref="goodsList"
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