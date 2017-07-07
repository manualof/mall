<script>
    import injection from '../helpers/injection';
    import image from '../assets/images/img_logo.png';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                self: this,
                templateColumns: [
                    {
                        align: 'center',
                        key: 'template',
                        title: '模版名称',
                        width: 160,
                    },
                    {
                        align: 'center',
                        key: 'company',
                        title: '物流公司',
                        width: 160,
                    },
                    {
                        align: 'center',
                        key: 'example',
                        render() {
                            return `<div class="example-module" v-if="row.isTemplate">
                                        <img :src="row.img" alt="">
                                        <div>
                                            <p>宽度: {{ row.width }}</p>
                                            <p>高度: {{ row.height }}</p>
                                        </div>
                                    </div>`;
                        },
                        title: '运单图例',
                    },
                    {
                        align: 'center',
                        key: 'type',
                        title: '模版类型',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(h, data) {
                            return h('div', [
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.editGoods(data.index);
                                        },
                                    },
                                    props: {
                                        class: 'edit-ad',
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                }, '测试'),
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.removeReviewGoods(data.index);
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                }, '绑定'),
                            ]);
                        },
                        title: '操作',
                        width: 180,
                    },
                ],
                templateData: [
                    {
                        company: '顺丰速运',
                        height: '139mm',
                        img: image,
                        isTemplate: true,
                        template: '常用模版1',
                        type: '平台模版',
                        width: '216mm',
                    },
                    {
                        company: '顺丰速运',
                        height: '139mm',
                        img: image,
                        isTemplate: true,
                        template: '常用模版1',
                        type: '平台模版',
                        width: '216mm',
                    },
                    {
                        company: '顺丰速运',
                        height: '139mm',
                        img: image,
                        isTemplate: true,
                        template: '常用模版1',
                        type: '平台模版',
                        width: '216mm',
                    },
                ],
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
    <div class="seller-wrap">
        <div class="order-waybill-select">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>模版绑定-选择模版</span>
            </div>
            <card :bordered="false">
                <i-table :columns="templateColumns"
                         :context="self"
                         :data="templateData"></i-table>
            </card>
        </div>
    </div>
</template>