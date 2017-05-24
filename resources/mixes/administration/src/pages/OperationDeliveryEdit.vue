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
                action: `${window.api}/mall/admin/upload`,
                loading: false,
                ruleValidate: {},
                self: this,
                styleData: [
                    {
                        children: [
                            {
                                label: '故宫',
                                value: 'gugong',
                            },
                            {
                                label: '天坛',
                                value: 'tiantan',
                            },
                            {
                                label: '王府井',
                                value: 'wangfujing',
                            },
                        ],
                        label: '北京',
                        value: 'beijing',
                    },
                    {
                        children: [
                            {
                                children: [
                                    {
                                        label: '拙政园',
                                        value: 'zhuozhengyuan',
                                    },
                                    {
                                        label: '狮子林',
                                        value: 'shizilin',
                                    },
                                ],
                                label: '苏州',
                                value: 'suzhou',
                            },
                            {
                                children: [
                                    {
                                        label: '拙政园1',
                                        value: 'zhuozhengyuan',
                                    },
                                    {
                                        label: '狮子林1',
                                        value: 'shizilin',
                                    },
                                ],
                                label: '拙政园1',
                                value: 'zhuozhengyuan',
                            },
                        ],
                        label: '江苏',
                        value: 'jiangsu',
                    },
                ],
                typeData: {
                    address: '',
                    cardPicture: image,
                    deliveryName: '',
                    idNum: '6622542456855141',
                    name: '财富中心自提点',
                    phone: '',
                    province: ['陕西省', '西安市'],
                    realName: '王思冉',
                    seatNumber: '',
                    status: true,
                },
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