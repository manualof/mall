<script>
    import Upload from 'iview/src/components/upload/upload.vue';

    export default{
        components: {
            Upload,
        },
        data() {
            return {
                accountData: {
                    address: [],
                    ali: '',
                    birthday: new Date(),
                    email: '10507822722@qq.com',
                    imgsrc: '',
                    realName: 'ibenchu',
                    sex: '男',
                    qq: '1050782272',
                },
                accountRule: {
                    address: [],
                    ali: '',
                    birthday: new Date(),
                    email: '10507822722@qq.com',
                    imgsrc: '',
                    realName: 'ibenchu',
                    sex: '男',
                    qq: '1050782272',
                },
                data: [{
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
                }, {
                    value: 'jiangsu',
                    label: '江苏',
                    children: [
                        {
                            value: 'nanjing',
                            label: '南京',
                            children: [
                                {
                                    value: 'fuzimiao',
                                    label: '夫子庙',
                                },
                            ],
                        },
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
                    ],
                }],
                loading: false,
                reg: /(.{2}).+(.{2}@.+)/g,
                imgName: '',
                uploadList: [],
                status: 1,
                value1: [],
                visible: false,
            };
        },
        methods: {
            switchTab(index) {
                this.status = index;
            },
            handleSuccess() {},
        },
    };
</script>
<template>
    <div class="my-account">
        <div class="saases-title">
            <span @click="switchTab(1)" :class="{selected: status === 1}">基本信息</span>
            <span @click="switchTab(2)" :class="{selected: status === 2}">账号绑定</span>
            <span @click="switchTab(3)" :class="{selected: status === 3}">更换头像</span>
        </div>
        <div class="clearfix"></div>
        <div class="box">
            <div v-if="status === 1">
                <i-form ref="accountForm" :model="accountData" :rules="accountRule">
                    <form-item label="真实姓名">
                        <div class="msg">{{ accountData.realName }}</div>
                    </form-item>
                    <form-item label="性别" prop="sex">
                        <radio-group v-model="accountData.sex">
                            <radio label="male">男</radio>
                            <radio label="female">女</radio>
                            <radio label="confidentiality">保密</radio>
                        </radio-group>
                    </form-item>
                    <form-item class="input-item" label="生日">
                        <date-picker type="date" placeholder="选择日期" v-model="accountData.birthday">
                        </date-picker>
                    </form-item>
                    <form-item label="邮箱">
                        <div class="msg">{{ accountData.email.replace(reg, "$1****$2") }}
                            <span class="modify">修改</span>
                        </div>
                    </form-item>
                    <form-item class="input-item" label="所在地区">
                        <cascader :data="data" v-model="accountData.address"></cascader>
                    </form-item>
                    <form-item class="input-item" label="QQ" prop="qq">
                        <i-input v-model="accountData.qq"></i-input>
                    </form-item>
                    <form-item class="input-item" label="阿里旺旺" prop="ali">
                        <i-input v-model="accountData.ali"></i-input>
                    </form-item>
                    <form-item>
                        <i-button :loading="loading" class="submit" type="primary">
                            <span v-if="!loading">保存修改</span>
                            <span v-else>正在保存…</span>
                        </i-button>
                    </form-item>
                </i-form>
            </div>
            <div v-if="status === 2" class="account-bind">
                <div class="bind">
                    <span>绑定QQ帐号</span>
                    <span class="wechat-bind">未绑定（绑定后即可用QQ账号登录）</span>
                    <div class="bind-cancel"><a>绑定</a></div>
                </div>
                <div class="bind">
                    <span>绑定微信账号</span>
                    <span class="wechat-bind">已绑定</span>
                    <div class="bind-cancel"><a>解绑</a></div>
                </div>
            </div>
            <div v-if="status === 3">
                <div class="group-input">
                    <div class="label-l">头像预览</div>
                    <div class="msg">
                        <div class="head-img">
                            <img :src="accountData.imgsrc" alt="">
                        </div>
                        <div class="prompt">头像默认尺寸为120*120px，请根据系统操作提示进行裁剪并生效</div>
                        <Upload
                             :on-success="handleSuccess"
                             action="//jsonplaceholder.typicode.com/posts/">
                            图片上传
                        </Upload>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>