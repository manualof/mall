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
                accountColumns: [
                    {
                        align: 'center',
                        title: '排序',
                        type: 'selection',
                        width: 80,
                    },
                    {
                        align: 'center',
                        key: 'account',
                        title: '管理员账号',
                    },
                    {
                        align: 'center',
                        key: 'name',
                        title: '真实姓名',
                    },
                    {
                        align: 'center',
                        key: 'phone',
                        title: '联系电话',
                    },
                    {
                        align: 'center',
                        key: 'time',
                        title: '最后登录时间',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button @click.native="remove(${index})"
                                    type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                accountData: [
                    {
                        account: 'guanli',
                        name: '王某某',
                        phone: 2334444444,
                        time: '2016-12-20 13:31:54',
                    },
                    {
                        account: 'guanli',
                        name: '王某某',
                        phone: 2334444444,
                        time: '2016-12-20 13:31:54',
                    },
                    {
                        account: 'guanli',
                        name: '王某某',
                        phone: 2334444444,
                        time: '2016-12-20 13:31:54',
                    },
                ],
                self: this,
            };
        },
        methods: {
            remove(index) {
                this.accountData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="account-wrap">
            <tabs value="name1">
                <tab-pane label="账号管理" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>1.只有商家后台总管理员可以增删管理员账号</p>
                            <p>2.管理员账号可操作商家后台的所有功能</p>
                        </div>
                        <i-button class="first-btn" type="ghost">+新增管理员</i-button>
                        <i-button type="ghost">批量删除</i-button>
                        <i-table :columns="accountColumns"
                                 :context="self"
                                 :data="accountData"
                                 ref="accountList">
                        </i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>