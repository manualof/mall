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
                killColumns: [
                    {
                        align: 'center',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'num',
                        title: '编号',
                    },
                    {
                        key: 'spike',
                        title: '秒杀时段名称',
                    },
                    {
                        key: 'startTime',
                        title: '每日开始时间',
                    },
                    {
                        key: 'endTime',
                        title: '每日结束时间',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        title: '操作',
                        width: 140,
                        render() {
                            return '<i-button  @click.native="toEdit"  type="ghost" size="small">+设置商品</i-button>';
                        },
                    },
                ],
                killDate: [
                    {
                        action: '',
                        endTime: '2017-12-27',
                        num: '001',
                        spike: '午夜场',
                        startTime: '2016-02-15',
                    },
                    {
                        endTime: '2017-12-27',
                        num: '002',
                        spike: '午夜场',
                        startTime: '2016-02-15',
                    },
                    {
                        endTime: '2017-12-27',
                        num: '003',
                        spike: '午夜场',
                        startTime: '2016-02-15',
                    },
                    {
                        endTime: '2017-12-27',
                        num: '004',
                        spike: '午夜场',
                        startTime: '2016-02-15',
                    },
                    {
                        endTime: '2017-12-27',
                        num: '005',
                        spike: '午夜场',
                        startTime: '2016-02-15',
                    },

                ],
                self: this,
            };
        },
        methods: {
            addGoods() {},
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            toEdit() {
                const self = this;
                self.$router.push({
                    path: 'set/add',
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-activity-set">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>秒杀活动—设置商品</span>
            </div>
           <card :bordered="false">
               <i-table highlight-row :columns="killColumns"  :context="self"  :data="killDate"></i-table>
           </card>
        </div>
    </div>
</template>
