<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
//        computed: {
//            getStartTime() {
//                return Date.parse(this.form.startTime);
//            },
//        },
        data() {
            return {
                form: {
                    endTime: '',
                    startTime: '',
                    status: false,
                    title: '',
                },
                rules: {
                    title: [
                        {
                            message: '标题不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
                endOptions: {
                    disabledDate(date) {
                        return date && date.valueOf() < Date.now() - 86400000;
                    },
                },
                loading: false,
                self: this,
                startOptions: {
                    disabledDate(date) {
                        return date && date.valueOf() < Date.now() - 86400000;
                    },
                },
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
//            shuchu() {
//                console.log(Date.parse(this.form.startTime));
//            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.form.validate(valid => {
                    if (valid) {
                        self.$Message.success('提交成功!');
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
        <div class="sales-spike-add">
                <div class="add-title">
                    <card :bordered="false">
                        <i-button type="text" @click.native="goBack">
                            <icon type="chevron-left"></icon>
                        </i-button>
                        <span>秒杀活动—添加秒杀活动</span>
                    </card>
                </div>
            <card :bordered="false">
                <div class="add-body">
                    <div class="prompt-box">
                        <p>提示</p>
                        <p>秒杀活动仅设置结束时间，截止时间内多个活动可同时进行，建议标题以分类区分便于管理</p>
                    </div>
                    <i-form :label-width="200" ref="form" :model="form" :rules="rules">
                        <row>
                            <i-col span="12">
                                <form-item label="活动标题：" prop="title">
                                    <i-input v-model="form.title" placeholder=""></i-input>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="开始时间：">
                                    <date-picker type="date" placeholder="选择日期"
                                                 :options="startOptions"
                                                 v-model="form.startTime"></date-picker>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="结束时间：">
                                    <date-picker type="date" placeholder="选择日期"
                                                 :options="endOptions"
                                                 @on-change="shuchu"
                                                 v-model="form.endTime"></date-picker>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="状态：">
                                    <i-switch size="large" v-model="form.status">
                                        <span slot="open">开启</span>
                                        <span slot="close">关闭</span>
                                    </i-switch>
                                </form-item>
                            </i-col>
                        </row>
                        <form-item>
                            <i-button @click.native="submit" type="primary">
                                <span v-if="!loading">确认提交</span>
                                <span v-else>正在提交…</span>
                            </i-button>
                        </form-item>
                    </i-form>
                </div>
            </card>
        </div>
    </div>
</template>