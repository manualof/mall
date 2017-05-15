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
                timeListColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'number',
                        title: '编号',
                    },
                    {
                        align: 'center',
                        key: 'name',
                        title: '秒杀时段名称',
                    },
                    {
                        align: 'center',
                        key: 'startTime',
                        title: '每日开始时间',
                    },
                    {
                        align: 'center',
                        key: 'finishTime',
                        title: '每日结束时间',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        title: '操作',
                        width: 180,
                        render(row, column, index) {
                            return `<i-button type="ghost" class="first-btn" size="small" @click="remove(${index})">
                                    编辑</i-button><i-button type="ghost" size="small">删除</i-button>`;
                        },
                    },
                ],
                timeListData: [
                    {
                        finishTime: '2016-12-23',
                        name: '午夜场',
                        number: '001',
                        startTime: '2016-12-23',
                    },
                    {
                        finishTime: '2016-12-23',
                        name: '午夜场',
                        number: '001',
                        startTime: '2016-12-23',
                    },
                    {
                        finishTime: '2016-12-23',
                        name: '午夜场',
                        number: '001',
                        startTime: '2016-12-23',
                    },
                    {
                        finishTime: '2016-12-23',
                        name: '午夜场',
                        number: '001',
                        startTime: '2016-12-23',
                    },
                    {
                        finishTime: '2016-12-23',
                        name: '午夜场',
                        number: '001',
                        startTime: '2016-12-23',
                    },
                ],
            };
        },
        methods: {
            addSpikePeriod() {
                const self = this;
                self.$router.push({
                    path: 'time/addtime',
                });
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-activity-time">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>秒杀活动—时间段列表</span>
            </div>
            <div class="store storeBox">
                <div class="prompt-box">
                    <h6>提示</h6>
                    <p>建议设置四至五个时间段（前台显示）</p>
                </div>
                <div class="store-body">
                    <div class="store-body-header">
                        <i-button class="export-btn" @click.natice="addSpikePeriod" type="ghost">+添加秒杀时段</i-button>
                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                    </div>
                    <i-table highlight-row class="shop-table" :columns="timeListColumns" :data="timeListData"></i-table>
                </div>
            </div>
        </div>
    </div>
</template>
