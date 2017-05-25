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
                goodsPicture: {
                    sortType: '',
                },
                sortType: [
                    {
                        label: '从小到大',
                        value: '1',
                    },
                    {
                        label: '时间',
                        value: '2',
                    },
                ],
            };
        },
        methods: {
            removeGoods(index) {
                this.goodsData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="goods-picture">
            <tabs value="name1">
                <tab-pane label="相册管理" name="name1">
                    <card :bordered="false">
                        <div class="goods-list">
                            <div class="btn-group">
                                <i-button class="first-btn" type="ghost">创建相册</i-button>
                                <i-button type="ghost">上传图片</i-button>
                                <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                                <row class="float-right">
                                    <i-col span="12">排序方式</i-col>
                                    <i-col span="12">
                                        <i-select v-model="goodsPicture.sortType">
                                            <i-option v-for="item in sortType"
                                                      :value="item.value">{{ item.label }}</i-option>
                                        </i-select>
                                    </i-col>
                                </row>
                            </div>
                        </div>
                        <div class="page">
                            <page :total="100" show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>