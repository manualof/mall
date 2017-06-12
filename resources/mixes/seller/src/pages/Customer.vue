<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {};
        },
        methods: {},
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="customer-wrap">
            <tabs value="name1">
                <tab-pane label="客服设置" name="name1">
                    <card :bordered="false">
                        <i-form ref="form" :model="form" :rules="ruleValidate" :label-width="150">
                            <h5>售前客服</h5>
                            <form-item>
                                <row>
                                    <i-col span="3">客服名称</i-col>
                                    <i-col span="4">
                                        <i-input></i-input>
                                    </i-col>
                                    <i-col span="3">客服工具</i-col>
                                    <i-col span="4">
                                        <i-input></i-input>
                                    </i-col>
                                    <i-col span="3">客服账号</i-col>
                                    <i-col span="4">
                                        <i-input></i-input>
                                    </i-col>
                                    <i-col span="3">
                                        <i-button type="error">删除</i-button>
                                    </i-col>
                                </row>
                                <row>
                                    <i-col span="3">客服名称</i-col>
                                    <i-col span="4">
                                        <i-input></i-input>
                                    </i-col>
                                    <i-col span="3">客服工具</i-col>
                                    <i-col span="4">
                                        <i-input></i-input>
                                    </i-col>
                                    <i-col span="3">客服账号</i-col>
                                    <i-col span="4">
                                        <i-input></i-input>
                                    </i-col>
                                    <i-col span="3">
                                        <i-button type="error">删除</i-button>
                                    </i-col>
                                </row>
                            </form-item>
                        </i-form>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
