<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            const self = this;
            return {
                columns: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        key: 'num',
                        title: '编号',
                        width: 200,
                    },
                    {
                        key: 'title',
                        title: '活动标题',
                        width: 400,
                    },
                    {
                        key: 'startTime',
                        title: '开始时间',
                        width: 200,
                    },
                    {
                        key: 'endTime',
                        title: '结束时间',
                        width: 200,
                    },
                    {
                        key: 'isstatus',
                        render(h, data) {
                            if (data.row.status) {
                                return h('span', {
                                    props: {
                                        class: 'status-check',
                                    },
                                }, [
                                    h('icon', {
                                        props: {
                                            type: 'checkmark-circled',
                                        },
                                    }),
                                    '开启',
                                ]);
                            }
                            return h('span', [
                                h('icon', {
                                    props: {
                                        type: 'close-circled',
                                    },
                                }),
                                '关闭',
                            ]);
                        },
                        title: '状态',
                        width: 500,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(h, data) {
                            return h('div', [
                                h('dropdown', {
                                    scopedSlots: {
                                        list() {
                                            return h('dropdown-menu', [
                                                h('dropdown-item', '活动设置'),
                                                h('dropdown-item', {
                                                    on: {
                                                        click() {
                                                            self.toGoodsSet();
                                                        },
                                                    },
                                                }, '商品设置'),
                                            ]);
                                        },
                                    },
                                }, [
                                    h('i-button', {
                                        props: {
                                            type: 'ghost',
                                        },
                                    }, [
                                        '设置',
                                        h('icon', {
                                            props: {
                                                type: 'arrow-down-b',
                                            },
                                        }),
                                    ]),
                                ]),
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.removeAd(data.index);
                                        },
                                    },
                                    props: {
                                        class: 'delete-ad',
                                        type: 'ghost',
                                    },
                                }, '删除'),
                            ]);
                        },
                        title: '操作',
                        width: 200,
                    },
                ],
                list: [
                    {
                        endTime: '2016-12-23',
                        num: '00333',
                        startTime: '2016-12-23',
                        status: false,
                        title: '时尚但不易过时，高上大，还配有眼睛盒，发货速度',
                    },
                    {
                        endTime: '2016-12-23',
                        num: '00333',
                        startTime: '2016-12-23',
                        status: false,
                        title: '时尚但不易过时，高上大，还配有眼睛盒，发货速度',
                    },
                    {
                        endTime: '2016-12-23',
                        num: '00333',
                        startTime: '2016-12-23',
                        status: true,
                        title: '时尚但不易过时，高上大，还配有眼睛盒，发货速度',
                    },
                    {
                        endTime: '2016-12-23',
                        num: '00333',
                        startTime: '2016-12-23',
                        status: false,
                        title: '时尚但不易过时，高上大，还配有眼睛盒，发货速度',
                    },
                ],
            };
        },
        methods: {
            removeAd(index) {
                this.list.splice(index, 1);
            },
            toGoodsSet() {
                this.$router.push({
                    path: 'spike/set',
                });
            },
            toSalesSpikeTime() {
                this.$router.push('spike/time');
            },
            toSaleSpikeAdjunction() {
                this.$router.push('spike/adjunction');
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-spike">
            <tabs value="name1">
                <tab-pane label="秒杀活动" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>请先设置“秒杀活动”时间段</p>
                            <p>秒杀活动列表可对活动进行编辑、删除、设置等商品操作</p>
                            <p>秒杀截止时间内多个活动可同时进行</p>
                        </div>
                        <div class="advertisement-action">
                            <i-button class="add-data" @click.native="toSaleSpikeAdjunction"
                                      type="ghost">+添加活动</i-button>
                            <i-button class="delete-data" @click.native="toSalesSpikeTime"
                                      type="ghost">时间段列表</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                        </div>
                        <i-table highlight-row :columns="columns" :data="list"></i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>