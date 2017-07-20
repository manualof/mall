<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/adv.jpg';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            const self = this;
            return {
                columns: [
                    {
                        key: 'name',
                        render(h, data) {
                            return h('div', {
                                class: {
                                    'goods-name-row': true,
                                },
                            }, [
                                h('div', {
                                    class: {
                                        img: true,
                                    },
                                }, [
                                    h('img', {
                                        domProps: {
                                            src: data.row.image,
                                        },
                                    }),
                                ]),
                                h('div', {
                                    class: {
                                        'right-text': true,
                                    },
                                }, [
                                    h('p', data.row.name),
                                ]),
                            ]);
                        },
                        title: '商品名称',
                    },
                    {
                        align: 'center',
                        key: 'category',
                        title: '商品分类',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('div', [
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.remove(data.index);
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                }, '认领'),
                            ]);
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                list: [
                    {
                        category: '电子产品',
                        image: image1,
                        name: '可用十年 创意椭圆不锈钢肥皂(带底托精装) 神奇除味去',
                    },
                    {
                        category: '电子产品',
                        image: image1,
                        name: '可用十年 创意椭圆不锈钢肥皂(带底托精装) 神奇除味去',
                    },
                    {
                        category: '电子产品',
                        image: image1,
                        name: '可用十年 创意椭圆不锈钢肥皂(带底托精装) 神奇除味去',
                    },
                ],
                searchList: [
                    {
                        label: '商品名称',
                        value: '1',
                    },
                    {
                        label: '商品分类',
                        value: '2',
                    },
                ],
            };
        },
        methods: {},
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="goods-claim">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>商品列表-认领商品</span>
            </div>
            <card :bordered="false">
                <div class="goods-body-header">
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
                         :columns="columns"
                         :context="self"
                         :data="list">
                </i-table>
                <div class="page">
                    <page :total="100" show-elevator></page>
                </div>
            </card>
        </div>
    </div>
</template>

