<script>
    import injection from '../helpers/injection';
    import image from '../assets/images/adv.jpg';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            return {
                action: `${window.api}/mall/upload`,
                typeData: {
                    name: '财富中心自提点',
                    realName: '王思冉',
                    phone: '',
                    seatNumber: '',
                    deliveryName: '',
                    province: ['陕西省', '西安市'],
                    address: '',
                    idNum: '6622542456855141',
                    cardPicture: image,
                    status: true,
                },
                styleData: [
                    {
                        value: 'beijing',
                        label: '北京',
                        children: [
                            {
                                value: 'gugong',
                                label: '故宫',
                            },
                            {
                                value: 'tiantan',
                                label: '天坛',
                            },
                            {
                                value: 'wangfujing',
                                label: '王府井',
                            },
                        ],
                    },
                    {
                        value: 'jiangsu',
                        label: '江苏',
                        children: [
                            {
                                value: 'suzhou',
                                label: '苏州',
                                children: [
                                    {
                                        value: 'zhuozhengyuan',
                                        label: '拙政园',
                                    },
                                    {
                                        value: 'shizilin',
                                        label: '狮子林',
                                    },
                                ],
                            },
                            {
                                value: 'zhuozhengyuan',
                                label: '拙政园1',
                                children: [
                                    {
                                        value: 'zhuozhengyuan',
                                        label: '拙政园1',
                                    },
                                    {
                                        value: 'shizilin',
                                        label: '狮子林1',
                                    },
                                ],
                            },
                        ],
                    },
                ],
                ruleValidate: {},
                self: this,
                loading: false,
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.typeData.validate(valid => {
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
    <div class="mall-wrap">
        <div class="operation-delivery-edit">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>管理—新增自提点</span>
            </div>
            <card :bordered="false">
                <i-form ref="typeData" :model="typeData" :rules="ruleValidate" :label-width="200">
                    <row>
                        <i-col span="12">
                            <form-item label="自提点用户名">
                                {{ typeData.name }}
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="真实姓名">
                                {{ typeData.realName }}
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="手机号">
                                <i-input v-model="typeData.phone"></i-input>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="座机号">
                                <i-input v-model="typeData.seatNumber"></i-input>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="自提点名称">
                                <i-input v-model="typeData.deliveryName"></i-input>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="所在地区">
                                <cascader :data="styleData" trigger="hover" v-model="typeData.province"></cascader>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="18">
                            <form-item label="详细地址">
                                <i-input v-model="typeData.address" type="textarea"></i-input>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="身份证号码">
                                {{ typeData.idNum }}
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="身份证正面">
                                <img :src="typeData.cardPicture" alt="">
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="状态" >
                                <i-switch size="large" v-model="typeData.status">
                                    <span slot="open">开启</span>
                                    <span slot="close">关闭</span>
                                </i-switch>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item>
                                <i-button :loading="loading" type="primary" @click.native="submit">
                                    <span v-if="!loading">确认提交</span>
                                    <span v-else>正在提交…</span>
                                </i-button>
                            </form-item>
                        </i-col>
                    </row>
                </i-form>
            </card>
        </div>
    </div>
</template>
