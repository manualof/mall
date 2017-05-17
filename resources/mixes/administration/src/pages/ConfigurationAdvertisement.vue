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
                advertisement: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        key: 'name',
                        title: '名称',
                        width: 200,
                    },
                    {
                        key: 'type',
                        title: '类型',
                        width: 100,
                    },
                    {
                        key: 'showStyle',
                        title: '展示方式',
                        width: 200,
                    },
                    {
                        key: 'wordNum',
                        title: '宽度/字数',
                        width: 150,
                    },
                    {
                        key: 'heightNum',
                        title: '高度',
                        width: 150,
                    },
                    {
                        key: 'adverNum',
                        title: '广告数',
                        width: 150,
                    },
                    {
                        key: 'showNum',
                        title: '正在展示',
                        width: 150,
                    },
                    {
                        key: 'isshow',
                        render(row) {
                            return `<span class="status-check" v-if="${row.status} === true">
                                    <icon type="checkmark-circled"></icon>开启</span>
                                    <span v-if="${row.status} === false">
                                    <icon type="close-circled"></icon>关闭</span>`;
                        },
                        title: '是否启用',
                        width: 200,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        render(row, column, index) {
                            return `<dropdown>
                                    <i-button type="ghost">设置<icon type="arrow-down-b"></icon></i-button>
                                    <dropdown-menu slot="list">
                                    <dropdown-item>设置设置</dropdown-item>
                                    </dropdown-menu></dropdown>
                                    <i-button class="delete-ad" click.native="removeAd(${index})"
                                    type="ghost" >删除</i-button>`;
                        },
                        title: '操作',
                        width: 200,
                    },
                ],
                advertisementData: [
                    {
                        adverNum: 0,
                        heightNum: 206,
                        isshow: '是',
                        name: '商品列表左侧广告位',
                        showStyle: '多广告展示',
                        showNum: 4,
                        status: true,
                        type: '图片',
                        wordNum: 206,
                    },
                    {
                        adverNum: 0,
                        heightNum: 206,
                        isshow: '是',
                        name: '商品列表左侧广告位',
                        showStyle: '多广告展示',
                        showNum: 4,
                        status: true,
                        type: '图片',
                        wordNum: 206,
                    },
                    {
                        adverNum: 0,
                        heightNum: 206,
                        isshow: '是',
                        name: '商品列表左侧广告位',
                        showStyle: '多广告展示',
                        showNum: 4,
                        status: true,
                        type: '图片',
                        wordNum: 206,
                    },
                ],
                self: this,
            };
        },
        methods: {
            newAddData() {
                const self = this;
                self.$router.push({
                    path: 'advertisement/add',
                });
            },
            removeAd(index) {
                this.advertisementData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="configuration-advertisement">
            <tabs value="name1">
                <tab-pane label="广告管理" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>将广告位调用代码放入前台页面，将显示该广告位的广告</p>
                        </div>
                        <div class="advertisement-action">
                            <i-button class="add-data" type="ghost" @click.native="newAddData">+新增数据</i-button>
                            <i-button class="delete-data" type="ghost">批量删除</i-button>
                            <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                        </div>
                        <i-table highlight-row :columns="advertisement" :context="self"
                                 :data="advertisementData"></i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>