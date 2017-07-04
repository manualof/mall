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
                activeModal: false,
                form: {
                    id: 5424367,
                    name: 'SONY索尼SFGHGKHJKH平板电脑 16G 官方标配',
                    price: '5463.00',
                    shopName: '店铺名称',
                    sku: 133,
                    time: '1235-32-3',
                },
                goodsColumns: [
                    {
                        align: 'center',
                        key: 'sku',
                        title: '商品SKU',
                        width: 120,
                    },
                    {
                        key: 'name',
                        title: '商品名称',
                    },
                    {
                        align: 'center',
                        key: 'time',
                        title: '发货时间',
                    },
                    {
                        align: 'center',
                        key: 'price',
                        title: '商品价格',
                    },
                    {
                        align: 'center',
                        key: 'id',
                        title: '店铺ID',
                    },
                    {
                        align: 'center',
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button size="small" type="ghost" @click.native="look">查看</i-button>
                                    <i-button class="delete-ad" size="small" type="ghost"
                                    @click.native="remove(${index})">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                goodsData: [
                    {
                        id: 5424367,
                        name: 'SONY索尼SFGHGKHJKH平板电脑 16G 官方标配',
                        price: '5463.00',
                        shopName: '店铺名称',
                        sku: 133,
                        time: '1235-32-3',
                    },
                    {
                        id: 5424367,
                        name: 'SONY索尼SFGHGKHJKH平板电脑 16G 官方标配',
                        price: '5463.00',
                        shopName: '店铺名称',
                        sku: 133,
                        time: '1235-32-3',
                    },
                    {
                        id: 5424367,
                        name: 'SONY索尼SFGHGKHJKH平板电脑 16G 官方标配',
                        price: '5463.00',
                        shopName: '店铺名称',
                        sku: 133,
                        time: '1235-32-3',
                    },
                    {
                        id: 5424367,
                        name: 'SONY索尼SFGHGKHJKH平板电脑 16G 官方标配',
                        price: '5463.00',
                        shopName: '店铺名称',
                        sku: 133,
                        time: '1235-32-3',
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
            remove(index) {
                this.goodsData.splice(index, 1);
            },
            look() {
                this.activeModal = true;
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-active">
            <tabs value="name1">
                <tab-pane label="预售活动" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>商家发布的预售商品列表</p>
                            <p>可进行添加,编辑,修改,删除等操作,查看预售活动订单</p>
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
                        <modal
                                v-model="activeModal"
                                title="活动详情" class="refund-attribute-modal">
                            <div class="sales-fulldown-modal">
                                <i-form ref="form" :model="form" :rules="formValidate" :label-width="100">
                                    <row>
                                        <i-col span="18">
                                            <form-item label="商品SKU">
                                                {{ form.sku }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="18">
                                            <form-item label="商品名称">
                                                {{ form.name }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="18">
                                            <form-item label="发货时间">
                                                {{ form.time }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="18">
                                            <form-item label="商品价格">
                                                {{ form.price }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="18">
                                            <form-item label="店铺ID">
                                                {{ form.id }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="18">
                                            <form-item label="店铺名称">
                                                {{ form.shopName }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                </i-form>
                            </div>
                        </modal>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
