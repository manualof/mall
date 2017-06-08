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
                address: [
                    {
                        address: '陕西省西安市高新区详细地址',
                        name: '本初1',
                        phone: '1234544444',
                    },
                    {
                        address: '陕西省西安市高新区详细地址1',
                        name: '本初2',
                        phone: '1234544441',
                    },
                    {
                        address: '陕西省西安市高新区详细地址2',
                        name: '本初3',
                        phone: '1234544443',
                    },
                ],
                defaultAddress: {
                    address: '陕西省西安市高新区详细地址',
                    name: '本初1',
                    phone: '1234544444',
                },
                self: this,
            };
        },
        methods: {
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="order-setting">
            <tabs value="name1">
                <tab-pane label="发货地址" name="name1">
                    <card :bordered="false">
                        <i-button class="first-btn" type="ghost" @click.native="newAddAddress">新增地址</i-button>
                        <div class="table-content">
                            <div class="table-title">
                                <span>选择默认</span>
                                <span>联系人</span>
                                <span>发货地址</span>
                                <span>电话</span>
                            </div>
                            <radio-group v-model="defaultAddress" vertical>
                                <radio :label="item" v-for="item in address">
                                    <span>{{ item.name }}</span>
                                    <span>{{ item.address }}</span>
                                    <span>{{ item.phone }}</span>
                                </radio>
                            </radio-group>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="默认物流公司" name="name2">
                    <card :bordered="false">

                    </card>
                </tab-pane>
                <tab-pane label="免运费额度" name="name3">
                    <card :bordered="false">

                    </card>
                </tab-pane>
                <tab-pane label="发货单打印" name="name4">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>