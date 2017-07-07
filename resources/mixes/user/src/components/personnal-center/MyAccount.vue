<template>
    <div class="my-account">
        <div class="saases-title">
            <span @click="qiehuan1" :class="{xuanzhong: status === 1}">基本信息</span>
            <span @click="qiehuan2" :class="{xuanzhong: status === 2}">账号绑定</span>
            <span @click="qiehuan3" :class="{xuanzhong: status === 3}">更换头像</span>
        </div>
        <div class="clearfix"></div>
        <div class="box">
            <div v-if="status === 1" class="jiben-msg">
                <form action="">
                    <div class="group-input first-group">
                        <div class="label-l">真实姓名</div>
                        <div class="msg">{{ info.realName }}</div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">性别</div>
                        <div class="msg">
                            <label class="radio-box">
                                <input type="radio" name="sex" value="男" v-model="info.sex">
                                <span></span>
                                男
                            </label>
                            <label class="radio-box">
                                <input type="radio" name="sex" value="女" v-model="info.sex">
                                <span></span>
                                女
                            </label>
                            <label class="radio-box">
                                <input type="radio" name="sex" value="全部" v-model="info.sex">
                                <span></span>
                                保密
                            </label>
                        </div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">生日</div>
                        <div class="msg">
                            <Date-picker
                                    :value="value2"
                                    format="yyyy年MM月dd日"
                                    type="date"
                                    placeholder="选择日期">
                            </Date-picker>
                        </div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">邮箱</div>
                        <div class="msg">{{ info.email.replace(reg, "$1****$2") }}
                        <span class="xiugai">修改</span>
                        </div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">所在地区</div>
                        <div class="msg"><Ascader :data="data" v-model="info.address"></Ascader></div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">QQ</div>
                        <div class="msg"><input type="text" class="form-control" v-model="info.qq"></div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">阿里旺旺</div>
                        <div class="msg"><input type="text" class="form-control" v-model="info.ali"></div>
                    </div>
                    <div class="group-input">
                        <div class="label-l"></div>
                        <div class="msg">
                                <div class="submit"> 保存修改</div>
                        </div>
                    </div>
                </form>


            </div>
            <div v-if="status === 2" class="zhanghao">
                <div class="bangding">
                    <span>绑定QQ帐号</span>
                    <span class="weibangding">未绑定（绑定后即可用QQ账号登录）</span>
                    <div class="jiebang"><router-link to="">绑定</router-link></div>
                </div>
                <div class="bangding">
                    <span>绑定微信账号</span>
                    <span class="weibangding">已绑定</span>
                    <div class="jiebang"><router-link to="">解绑</router-link></div>
                </div>
            </div>
            <div v-if="status === 3" class="genghuan">
                <div class="group-input">
                    <div class="label-l">头像预览</div>
                    <div class="msg">
                        <div class="tupian">
                            <img :src="info.imgsrc" alt="">
                        </div>
                        <div class="tishi">头像默认尺寸为120*120px，请根据系统操作提示进行裁剪并生效</div>
                        <Upload
                             :on-success="handleSuccess"
                             action="//jsonplaceholder.typicode.com/posts/">
                            <i-button class="shangchuan" type="ghost" >图片上传</i-button>
                        </Upload>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Ascader from 'iview/src/components/cascader';
    import Radio from 'iview/src/components/radio';
    import DatePicker from 'iview/src/components/date-picker';
    import RadioGroup from 'iview/src/components/radio/radio-group';
    import Upload from 'iview/src/components/upload/upload';
    import IButton from 'iview/src/components/button';

    export default{
        components: {
            Ascader, Radio, DatePicker, RadioGroup, Upload, IButton,
        },
        data() {
            return {
                reg: /(.{2}).+(.{2}@.+)/g,
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
                imgName: '',
                info: {
                    address: [],
                    ali: '',
                    email: '10507822722@qq.com',
                    imgsrc: '',
                    realName: 'ibenchu',
                    sex: '男',
                    qq: '1050782272',
                },
                uploadList: [],
                status: 1,
                value1: [],
                visible: false,
            };
        },
        methods: {
            qiehuan1() {
                this.status = 1;
            },
            qiehuan2() {
                this.status = 2;
            },
            qiehuan3() {
                this.status = 3;
            },
            handleSuccess() {},
        },
    };
</script>