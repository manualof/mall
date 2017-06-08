<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/img_logo.png';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                editModal: false,
                loading: false,
                logisticsColumns: [
                    {
                        align: 'center',
                        key: 'name',
                        title: '公司名称',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'number',
                        render() {
                            return '<i-input v-model="row.number"></i-input>';
                        },
                        title: '物流单号',
                        width: 300,
                    },
                    {
                        align: 'center',
                        key: 'message',
                        render() {
                            return '<i-input v-model="row.message"></i-input>';
                        },
                        title: '备忘',
                    },
                    {
                        align: 'center',
                        render() {
                            return '<i-button type="ghost">确认</i-button>';
                        },
                        title: '操作',
                        width: 160,
                    },
                ],
                logisticsData: [
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                ],
                noLogisticsColumns: [
                    {
                        align: 'center',
                        key: 'name',
                        title: '公司名称',
                        width: 200,
                    },
                    {
                        align: 'center',
                        key: 'number',
                        render() {
                            return '<i-input v-model="row.number"></i-input>';
                        },
                        title: '物流单号',
                        width: 300,
                    },
                    {
                        align: 'center',
                        key: 'message',
                        render() {
                            return '<i-input v-model="row.message"></i-input>';
                        },
                        title: '备忘',
                    },
                    {
                        align: 'center',
                        render() {
                            return '<i-button type="ghost">确认</i-button>';
                        },
                        title: '操作',
                        width: 160,
                    },
                ],
                noLogisticsData: [
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                    {
                        name: '顺丰速运',
                        number: '4444444',
                        message: '',
                    },
                ],
                order: {
                    address: '陕西省西安市雁塔区科技四路中段陕西国土资源大厦公寓楼2304',
                    amount: 2,
                    company: '顺丰速运',
                    createTime: '2017-02-09 ',
                    freight: '10.00',
                    goods: [
                        {
                            amount: 2,
                            image: image1,
                            name: 'MIUI/小米 小米手机4 小米4 MI4智能4G手机包邮 黑色 D-LT（4G）/TD-SCD',
                            price: '100.00',
                        },
                        {
                            amount: 2,
                            image: image1,
                            name: 'MIUI/小米 小米手机4 小米4 MI4智能4G手机包邮 黑色 D-LT（4G）/TD-SCD',
                            price: '100.00',
                        },
                    ],
                    goodsName: 'MIUI /小米小米手机4小米4代MI4智能4G手机包邮黑色D-LTE（4G）/ TD-SCD',
                    message: '',
                    number: 22222222222,
                    orderNum: 3333333333333,
                    phone: 122222222,
                    price: '20.00',
                    priceAll: '167.00',
                    process: [
                        {
                            status: '2016-12-21 11:30:31 发往西安中转',
                        },
                        {
                            status: '2016-12-21 11:30:31 发往西安中转',
                        },
                        {
                            status: '2016-12-21 11:30:31 西安市高新二路揽件',
                        },
                    ],
                    user: '旺旺',
                },
                self: this,
                styleData: [
                    {
                        children: [
                            {
                                children: [
                                    {
                                        label: '故宫',
                                        value: '故宫',
                                    },
                                    {
                                        label: '天坛',
                                        value: '天坛',
                                    },
                                    {
                                        label: '王府井',
                                        value: '王府井',
                                    },
                                    {
                                        label: '电动车',
                                        value: '电动车',
                                    },
                                    {
                                        label: '安全座椅',
                                        value: '安全座椅',
                                    },
                                ],
                                label: '童车童床',
                                value: '童车童床',
                            },
                            {
                                label: '营养辅食',
                                value: '营养辅食',
                            },
                            {
                                label: '尿裤湿巾',
                                value: '尿裤湿巾',
                            },
                        ],
                        label: '北京',
                        value: '北京',
                    },
                    {
                        children: [
                            {
                                children: [
                                    {
                                        label: '婴儿推车1',
                                        value: '婴儿推车1',
                                    },
                                    {
                                        label: '自行车2',
                                        value: '自行车2',
                                    },
                                    {
                                        label: '婴儿推车3',
                                        value: '婴儿推车3',
                                    },
                                    {
                                        label: '电动车',
                                        value: '电动车',
                                    },
                                    {
                                        label: '安全座椅4',
                                        value: '安全座椅4',
                                    },
                                ],
                                label: '狮子林',
                                value: '狮子林',
                            },
                            {
                                children: [
                                    {
                                        label: '夫子庙',
                                        value: '夫子庙',
                                    },
                                    {
                                        label: '夫子庙1',
                                        value: '夫子庙1',
                                    },
                                ],
                                label: '南京',
                                value: '南京',
                            },
                            {
                                children: [
                                    {
                                        label: '车1',
                                        value: '车1',
                                    },
                                    {
                                        label: '自行车2',
                                        value: '自行车2',
                                    },
                                ],
                                label: '拙政园',
                                value: '拙政园',
                            },
                        ],
                        label: '江苏',
                        value: '江苏',
                    },
                ],
                userInformation: {
                    message: '',
                    phone: '',
                    province: '',
                    user: '',
                },
            };
        },
        methods: {
            editInformation() {
                this.editModal = true;
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            submitInformation() {
                const self = this;
                self.loading = true;
                self.$refs.userInformation.validate(valid => {
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
        <div class="order-ship-set">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>待发货-设置发货</span>
            </div>
            <card :bordered="false">
                <div>
                    <h5>
                        <span>第一步</span>
                        确认收货信息及交易详情
                    </h5>
                    <table class="order-table">
                        <tbody>
                        <tr class="space">
                            <td colspan="2">
                                <span>订单号:{{ order.orderNum }}</span>
                                <span>下单时间:{{ order.createTime }}</span>
                                <button class="print-btn">打印发货单</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <div class="goods-name-row" v-for="item in order.goods">
                                        <div class="img-text">
                                            <div class="img">
                                                <img :src="item.image" alt="">
                                            </div>
                                            <div class="goods-name">
                                                <p>{{ item.name }}</p>
                                                <p>&yen;{{ item.price }} X {{ item.amount }}件</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <i-form ref="order" :model="order" :rules="ruleValidate" :label-width="80">
                                    <row>
                                        <i-col span="20">
                                            <form-item label="运费">{{ order.freight}}</form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col span="20">
                                            <form-item label="发货备注">
                                                <i-input type="textarea" v-model="order.message"
                                                         :autosize="{minRows: 3,maxRows: 5}"></i-input>
                                            </form-item>
                                        </i-col>
                                    </row>
                                </i-form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="address-information clearfix">
                        <span>收货人信息: {{ order.user }}&nbsp;&nbsp;{{ order.phone }}&nbsp;&nbsp;{{ order.address }}</span>
                        <i-button type="ghost" @click.native="editInformation">编辑</i-button>
                    </div>
                </div>
                <div>
                    <h5>
                        <span>第二步</span>
                        确认发货信息
                    </h5>
                    <div class="address-information clearfix insure-infomation">
                        <span>收货人信息: {{ order.user }} {{ order.phone }} {{ order.address }}</span>
                        <i-button type="ghost">编辑</i-button>
                    </div>
                </div>
                <div>
                    <h5>
                        <span>第三步</span> 选择物流
                        <i class="tip">
                            您可以通过 “发货设置>默认物流公司” 添加或修改常用货运物流。免运可切换下方 [无需物流运输] 选项卡并操作
                        </i>
                    </h5>
                    <tabs value="name1">
                        <tab-pane label="选择物流公司" name="name1">
                            <i-form ref="logistics" :model="logistics" :rules="ruleValidate" :label-width="120">
                                <i-table :context="self"
                                         :columns="logisticsColumns"
                                         :data="logisticsData"
                                         ref="logistics"></i-table>
                                <i-button class="submit-btn" type="primary">确认提交</i-button>
                            </i-form>
                        </tab-pane>
                        <tab-pane label="无需物流运输" name="name2">
                            <i-form ref="logistics" :model="logistics" :rules="ruleValidate" :label-width="120">
                                <i-table :context="self"
                                         :columns="noLogisticsColumns"
                                         :data="noLogisticsData"
                                         ref="noLogistics"></i-table>
                                <i-button class="submit-btn" type="primary">确认提交</i-button>
                            </i-form>
                        </tab-pane>
                    </tabs>
                </div>
                <modal
                        v-model="editModal"
                        title="收货人信息" class="upload-picture-modal">
                    <div>
                        <i-form ref="userInformation" :model="userInformation" :rules="userValidate" :label-width="100">
                            <row>
                                <i-col span="12">
                                    <form-item label="收货人">
                                        <i-input v-model="userInformation.user"></i-input>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="12">
                                    <form-item label="电话">
                                        <i-input v-model="userInformation.phone"></i-input>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="12">
                                    <form-item label="地区">
                                        <cascader :data="styleData" trigger="hover"
                                                  v-model="userInformation.province"></cascader>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="22">
                                    <form-item label="详细信息">
                                        <i-input type="textarea" v-model="userInformation.message"
                                                 :autosize="{minRows: 3,maxRows: 5}"></i-input>
                                    </form-item>
                                </i-col>
                            </row>
                            <row>
                                <i-col span="20">
                                    <form-item>
                                        <i-button :loading="loading" type="primary" @click.native="submitInformation">
                                            <span v-if="!loading">确认提交</span>
                                            <span v-else>正在提交…</span>
                                        </i-button>
                                    </form-item>
                                </i-col>
                            </row>
                        </i-form>
                    </div>
                </modal>
            </card>
        </div>
    </div>
</template>