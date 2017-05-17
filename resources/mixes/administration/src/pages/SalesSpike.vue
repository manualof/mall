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
                self: this,
                spikeActivity: [
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
                        render(row) {
                            return `<span class="status-check" v-if="${row.status} === true">
                                    <icon type="checkmark-circled"></icon>开启</span>
                                    <span v-if="${row.status} === false">
                                    <icon type="close-circled"></icon>关闭</span>`;
                        },
                        title: '状态',
                        width: 500,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(row, column, index) {
                            return `<dropdown>
                                    <i-button type="ghost">设置
                                    <icon type="arrow-down-b"></icon>
                                    </i-button>
                                    <dropdown-menu slot="list">
                                    <dropdown-item>活动设置</dropdown-item>
                                    <dropdown-item @click.native="toGoodsSet">商品设置</dropdown-item>
                                    </dropdown-menu>
                                    </dropdown>
                                    <i-button class="delete-ad" @click.native="removeAd(${index})"
                                    type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                        width: 200,
                    },
                ],
                spikeData: [
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
                this.spikeData.splice(index, 1);
            },
            toSalesSpikeTime() {
                this.$router.push('spike/time');
            },
            toSaleSpikeAdjunction() {
                this.$router.push('spike/adjunction');
            },
            toGoodsSet() {
                this.$router.push({
                    path: 'spike/set',
                });
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
                        <i-table highlight-row :columns="spikeActivity" :context="self" :data="spikeData"></i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>