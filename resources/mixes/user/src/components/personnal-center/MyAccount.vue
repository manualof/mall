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
                    <div class="group-input">
                        <div class="label-l">真实姓名</div>
                        <div class="msg">ibenchu</div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">性别</div>
                        <div class="msg">
                            <input name="sex" type="radio">男
                            <input name="sex" type="radio">女
                            <input name="sex" type="radio">保密
                        </div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">生日</div>
                        <div class="msg">
                            <Date-picker :value="value2" format="yyyy年MM月dd日" type="date" placeholder="选择日期" style="width: 200px"></Date-picker>
                        </div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">邮箱</div>
                        <div class="msg"><input type="text"></div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">所在地区</div>
                        <div class="msg"><Ascader :data="data" v-model="value1"></Ascader></div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">QQ</div>
                        <div class="msg"><input type="text"></div>
                    </div>
                    <div class="group-input">
                        <div class="label-l">阿里旺旺</div>
                        <div class="msg"><input type="text"></div>
                    </div>
                    <div class="group-input">
                        <div class="label-l"></div>
                        <div class="msg">保存修改</div>
                    </div>
                </form>


            </div>
            <div v-if="status === 2" class="zhanghao">

            </div>
            <div v-if="status === 3" class="genghuan">

            </div>
        </div>
    </div>
</template>
<script>
    import Ascader from 'iview/src/components/cascader';
    import Radio from 'iview/src/components/radio';
    import DatePicker from 'iview/src/components/date-picker';


    export default{
        components: {
            Ascader, Radio, DatePicker,
        },
        data() {
            return {
                status: 1,
                value1: [],
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
                value2: '2016-01-01',
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
        },
    };
</script>