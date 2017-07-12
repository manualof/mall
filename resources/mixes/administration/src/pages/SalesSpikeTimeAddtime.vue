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
                form: {
                    endTime: '',
                    name: '',
                    startTime: '',
                },
                loading: false,
                validate: {
                    name: [
                        {
                            message: '时段标题不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
            };
        },
        methods: {
            goback() {
                const self = this;
                self.$router.go(-1);
            },
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
        <div class="sales-spike-time-add">
            <div class="time-add-title">
                <i-button type="text" @click.native="goback">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>秒杀活动—时间段列表—添加时间段列表</span>
            </div>
            <card :bordered="false">
                <div class="time-add-body">
                    <div class="prompt-box">
                        <p>提示</p>
                        <p>第一次新增秒杀时间段可对开始时间进行修改，以后默认为上一时间段结束时间的后一秒</p>
                        <p>秒杀时段名称将会显示在秒杀列表页的时间段内</p>
                        <p>编辑秒杀结束时段时不会影响到下一秒杀时段开始时间，结束时间不得小于当前时段开始时间，
                            不得大于下一段结束时间</p>
                    </div>
                    <i-form :label-width="200" ref="form" :model="form" :rules="validate">
                        <row>
                            <i-col span="12">
                                <form-item label="秒杀时段名称：" prop="name">
                                    <i-input v-model="form.name" placeholder=""></i-input>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="开始时间：">
                                    <time-picker type="time" placeholder="选择时间"
                                                 v-model="form.startTime"></time-picker>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="结束时间：">
                                    <time-picker type="time" placeholder="选择时间"
                                                 v-model="form.endTime"></time-picker>
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