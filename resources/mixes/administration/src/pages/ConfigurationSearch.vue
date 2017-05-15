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
                    defaultSearch: '',
                },
                loading: false,
                rules: {
                    defaultSearch: [
                        {
                            message: '请输入默认关键词',
                            required: true,
                            trigger: 'change',
                            type: 'string',
                        },
                    ],
                },
                searchColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'searchTerms',
                        title: '搜索词',
                        width: 200,
                    },
                    {
                        align: 'left',
                        key: 'showTerms',
                        title: '显示词',
                        width: 1098,
                    },
                    {
                        align: 'center',
                        key: 'action',
                        title: '操作',
                        width: 180,
                        render(row, column, index) {
                            return `<i-button type="ghost" class="first-btn" size="small" @click="remove(${index})">
                                    删除</i-button><i-button type="ghost" size="small">查看</i-button>`;
                        },
                    },
                ],
                searchData: [
                    {
                        searchTerms: '手机',
                        showTerms: 'iphone全新发布，星空蓝',
                    },
                    {
                        searchTerms: '手机',
                        showTerms: 'iphone全新发布，星空蓝',
                    },
                    {
                        searchTerms: '手机',
                        showTerms: 'iphone全新发布，星空蓝',
                    },
                    {
                        searchTerms: '手机',
                        showTerms: 'iphone全新发布，星空蓝',
                    },
                    {
                        searchTerms: '手机',
                        showTerms: 'iphone全新发布，星空蓝',
                    },
                ],
            };
        },
        methods: {
            exportData() {
                this.$refs.searchTable.exportCsv({
                    filename: '搜索数据',
                });
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
            remove(index) {
                this.searchData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="configuration-search">
            <tabs value="defaultSearch">
                <tab-pane label="默认搜索" name="defaultSearch">
                    <card :bordered="false">
                        <div class="store-body">
                            <i-form :label-width="200" ref="form" :model="form" :rules="rules">
                                <row>
                                    <i-col span="12">
                                        <form-item label="默认搜索词">
                                            <i-input v-model="form.defaultSearch" placeholder=""></i-input>
                                            <span class="range">默认词设置将显示在前台搜索框下面，
                                                前台点击时直接作为关键词进行搜索，多个请用半角逗号","隔开</span>
                                        </form-item>
                                    </i-col>
                                </row>
                                <form-item>
                                    <i-button type="primary" @click.native="submit">
                                        <span v-if="!loading">确认提交</span>
                                        <span v-else>正在提交…</span>
                                    </i-button>
                                </form-item>
                            </i-form>
                        </div>
                    </card>
                </tab-pane>
                <tab-pane label="热门搜索" name="hot">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <h6>提示</h6>
                            <p>热门搜索词设置后，将显示在前台搜索框作为默认值随机出现，最多可设置10个热搜词</p>
                            <p>每个热搜词包括搜索词和显示词两部分，搜索词参与搜索，显示词不参与搜索，只显示作用</p>
                        </div>
                        <div class="store-body">
                            <div class="store-body-header">
                                <i-button class="export-btn" @click="exportData()"
                                          @click="exportData()" type="ghost" >导出数据</i-button>
                            </div>
                            <i-table highlight-row ref="searchTable" class="shop-table"
                                     :columns="searchColumns" :data="searchData"></i-table>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
