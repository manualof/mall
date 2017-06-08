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
                loading: false,
                logistics: [
                    {
                        name: '顺丰快递',
                    },
                    {
                        name: '顺丰快递1',
                    },
                    {
                        name: '顺丰快递2',
                    },
                    {
                        name: '顺丰快递3',
                    },
                    {
                        name: '顺丰快递4',
                    },
                    {
                        name: '顺丰快递5',
                    },
                    {
                        name: '顺丰快递6',
                    },
                    {
                        name: '顺丰快递7',
                    },
                ],
                logisticsForm: {
                    money: '',
                },
                logisticsSelect: [],
                self: this,
            };
        },
        methods: {
            submitLogistics() {
                const self = this;
                self.loading = true;
                self.$refs.logisticsForm.validate(valid => {
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
                                <span>电话</span>s
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
                        <i-form ref="logistics" :model="logistics" :rules="ruleValidate">
                            <checkbox-group v-model="logisticsSelect">
                                <checkbox :label="item.name" v-for="item in logistics">
                                    <span>{{ item.name }}</span>
                                </checkbox>
                            </checkbox-group>
                            <row>
                                <i-col span="12">
                                    <form-item>
                                        <i-button :loading="loading" type="primary">
                                            <span v-if="!loading">确认提交</span>
                                            <span v-else>正在提交…</span>
                                        </i-button>
                                    </form-item>
                                </i-col>
                            </row>
                        </i-form>
                    </card>
                </tab-pane>
                <tab-pane label="免运费额度" name="name3">
                    <card :bordered="false">
                        <i-form ref="logisticsForm" :model="logisticsForm" :rules="ruleValidate" label-width="180">
                            <form-item label="免运费额度">
                                <row class="input-margin">
                                    <i-col span="2">
                                        <i-input v-model="logisticsForm.money"></i-input>
                                    </i-col>
                                    <i-col span="2">元</i-col>
                                </row>
                                <p class="tip">默认为0，标识不设置免运费额度，大于0标识购买金额超出该值后将免运费</p>
                            </form-item>
                            <row>
                                <i-col span="18">
                                    <form-item>
                                        <i-button :loading="loading" type="primary" @click.native="submitLogistics">
                                            <span v-if="!loading">确认提交</span>
                                            <span v-else>正在提交…</span>
                                        </i-button>
                                    </form-item>
                                </i-col>
                            </row>
                        </i-form>
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