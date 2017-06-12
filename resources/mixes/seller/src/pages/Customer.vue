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
                form: {
                    afterAccount: '',
                    afterName: '',
                    afterTool: '',
                    preAccount: '',
                    preName: '',
                    preTool: '',
                    workTime: '',
                },
                loading: false,
                toolList: [
                    {
                        label: '工具1',
                        value: '工具1',
                    },
                    {
                        label: '工具2',
                        value: '工具2',
                    },
                ],
            };
        },
        methods: {
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
    <div class="seller-wrap">
        <div class="customer-wrap">
            <tabs value="name1">
                <tab-pane label="客服设置" name="name1">
                    <card :bordered="false">
                        <i-form ref="form" :model="form" :rules="ruleValidate" :label-width="150">
                            <div>
                                <h5>售前客服</h5>
                                <form-item>
                                    <row>
                                        <i-col span="3">客服名称</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.name"></i-input>
                                        </i-col>
                                        <i-col span="3">客服工具</i-col>
                                        <i-col span="4">
                                            <i-select v-model="form.tool">
                                                <i-option v-for="item in toolList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </i-col>
                                        <i-col span="3">客服账号</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.account"></i-input>
                                        </i-col>
                                        <i-col span="3">
                                            <i-button type="error">删除</i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <row>
                                        <i-col span="3">客服名称</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.name"></i-input>
                                        </i-col>
                                        <i-col span="3">客服工具</i-col>
                                        <i-col span="4">
                                            <i-select v-model="form.tool">
                                                <i-option v-for="item in toolList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </i-col>
                                        <i-col span="3">客服账号</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.account"></i-input>
                                        </i-col>
                                        <i-col span="3">
                                            <i-button type="error">删除</i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <i-button class="add-btn" type="ghost">+添加客服</i-button>
                                </form-item>
                            </div>
                            <div>
                                <h5>售后客服</h5>
                                <form-item>
                                    <row>
                                        <i-col span="3">客服名称</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.afterName"></i-input>
                                        </i-col>
                                        <i-col span="3">客服工具</i-col>
                                        <i-col span="4">
                                            <i-select v-model="form.afterTool">
                                                <i-option v-for="item in toolList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </i-col>
                                        <i-col span="3">客服账号</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.afterAccount"></i-input>
                                        </i-col>
                                        <i-col span="3">
                                            <i-button type="error">删除</i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <row>
                                        <i-col span="3">客服名称</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.afterName"></i-input>
                                        </i-col>
                                        <i-col span="3">客服工具</i-col>
                                        <i-col span="4">
                                            <i-select v-model="form.afterTool">
                                                <i-option v-for="item in toolList" :value="item.value"
                                                          :key="item">{{ item.label }}</i-option>
                                            </i-select>
                                        </i-col>
                                        <i-col span="3">客服账号</i-col>
                                        <i-col span="4">
                                            <i-input v-model="form.afterAccount"></i-input>
                                        </i-col>
                                        <i-col span="3">
                                            <i-button type="error">删除</i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <i-button class="add-btn" type="ghost">+添加客服</i-button>
                                </form-item>
                            </div>
                            <div class="form-work-time">
                                <h5>工作时间</h5>
                                <form-item label="工作时间">
                                    <row>
                                        <i-col span="16">
                                            <i-input v-model="form.workTime"></i-input>
                                            <p class="tip">例：（工作时间 AM 10:00~PM 10:00）</p>
                                        </i-col>
                                    </row>
                                </form-item>
                                <form-item>
                                    <row>
                                        <i-col span="16">
                                            <i-button :loading="loading" class="add-btn"
                                                      type="primary" @click.native="submit">
                                                <span v-if="!loading">确认提交</span>
                                                <span v-else>正在提交…</span>
                                            </i-button>
                                        </i-col>
                                    </row>
                                </form-item>
                            </div>
                        </i-form>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
