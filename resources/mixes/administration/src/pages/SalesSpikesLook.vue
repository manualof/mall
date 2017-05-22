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

            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-spikes-look">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>查看"数码数码"秒杀商品</span>
            </div>
            <div class="spikes-information">
                <card :bordered="false">
                    <div class="prompt-box">
                        <p>提示</p>
                        <p>可以查看活动商品，进行置顶与屏蔽操作</p>
                        <p>默认商品列表前五件商品在商城前台首页显示</p>
                    </div>
                    <div class="goods-body-header">
                        <i-button class="export-btn" @click="exportGoodsData" type="ghost">导出数据</i-button>
                        <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                        <div class="goods-body-header-right">
                            <i-input v-model="managementWord" placeholder="请输入关键词进行搜索">
                                <i-select v-model="managementSearch" slot="prepend" style="width: 100px;">
                                    <i-option v-for="item in searchList"
                                              :value="item.value">{{ item.label }}</i-option>
                                </i-select>
                                <i-button slot="append" type="primary">搜索</i-button>
                            </i-input>
                        </div>
                    </div>
                    <i-table class="goods-table"
                             :columns="goodsColumns"
                             :context="self"
                             :data="goodsData"
                             ref="goodsList">
                    </i-table>
                </card>
            </div>
        </div>
    </div>
</template>
