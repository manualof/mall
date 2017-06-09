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
                messageColumns: [
                    {
                        align: 'center',
                        title: '排序',
                        type: 'selection',
                        width: 80,
                    },
                    {
                        key: 'content',
                        title: '消息内容',
                    },
                    {
                        align: 'center',
                        key: 'sendTime',
                        title: '发送时间',
                        width: 280,
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button class="delete-ad" @click.native="look(${index})"
                                    type="ghost">查看</i-button>
                                    <i-button @click.native="remove(${index})"
                                    type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 280,
                    },
                ],
                messageData: [
                    {
                        content: '您的结算单平台已付款，请注意查收，结算单编号：37216565965',
                        sendTime: '2016-12-20 13:31:54',
                    },
                    {
                        content: '您的结算单平台已付款，请注意查收，结算单编号：37216565965',
                        sendTime: '2016-12-20 13:31:54',
                    },
                    {
                        content: '您的结算单平台已付款，请注意查收，结算单编号：37216565965',
                        sendTime: '2016-12-20 13:31:54',
                    },
                    {
                        content: '您的结算单平台已付款，请注意查收，结算单编号：37216565965',
                        sendTime: '2016-12-20 13:31:54',
                    },
                ],
                self: this,
            };
        },
        methods: {
            remove(index) {
                this.messageData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="customer-message">
            <tabs value="name1">
                <tab-pane label="消息列表" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>1.管理员可以看见全部消息</p>
                            <p>2.只有管理员可以删除消息，删除后其他账户的该条消息也将被删除</p>
                        </div>
                        <i-button class="first-btn" type="ghost">标位已读</i-button>
                        <i-button type="ghost">批量删除</i-button>
                        <i-table :columns="messageColumns"
                                 :context="self"
                                 :data="messageData"
                                 ref="messageList">
                        </i-table>
                    </card>
                </tab-pane>
                <tab-pane label="系统公告" name="name2">
                    <card :bordered="false">

                    </card>
                </tab-pane>
                <tab-pane label="消息接收设置" name="name3">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>