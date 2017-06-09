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
                selfTemplateColumns: [
                    {
                        align: 'center',
                        key: 'company',
                        title: '物流公司',
                        width: 120,
                    },
                    {
                        align: 'center',
                        key: 'template',
                        title: '运单模版',
                        width: 120,
                    },
                    {
                        align: 'center',
                        key: 'example',
                        render() {
                            return `<div class="example-module">
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
                        key: 'topWidth',
                        title: '上偏移量',
                        width: 120,
                    },
                    {
                        align: 'center',
                        key: 'leftWidth',
                        title: '左偏移量',
                        width: 120,
                    },
                    {
                        align: 'center',
                        key: 'default',
                        render() {
                            return `<i-switch size="large" v-model="row.status">
                                        <span slot="open">开启</span>
                                        <span slot="close">关闭</span>
                                    </i-switch>`;
                        },
                        title: '启用',
                        width: 120,
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button class="action-btn" @click.native="design"
                                    size="small" type="ghost">设计</i-button>
                                    <i-button class="action-btn" size="small" type="ghost">测试</i-button>
                                    <i-button class="action-btn" @click.native="edit"
                                    size="small" type="ghost">编辑</i-button>
                                    <i-button class="action-btn" @click.native="remove(${index})"
                                    size="small" type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                    },
                ],
                selfTemplateData: [
                    {
                        company: '顺丰速运',
                        height: '139mm',
                        img: image,
                        isTemplate: true,
                        leftWidth: 2,
                        status: true,
                        template: '常用模版1',
                        topWidth: 2,
                        width: '216mm',
                    },
                    {
                        company: '顺丰速运',
                        height: '139mm',
                        img: image,
                        isTemplate: true,
                        leftWidth: 2,
                        status: true,
                        template: '常用模版1',
                        topWidth: 2,
                        width: '216mm',
                    },
                ],
                templateColumns: [
                    {
                        align: 'center',
                        key: 'company',
                        title: '物流公司',
                        width: 160,
                    },
                    {
                        align: 'center',
                        key: 'template',
                        title: '运单模版',
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
                        key: 'default',
                        render() {
                            return `<i-switch size="large" v-model="row.status" v-if="row.isTemplate">
                                        <span slot="open">开启</span>
                                        <span slot="close">关闭</span>
                                    </i-switch>`;
                        },
                        title: '默认',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<div v-if="row.isTemplate">
                                        <i-button class="edit-btn" size="small" type="ghost">编辑</i-button>
                                        <i-button size="small" type="ghost">解绑</i-button>
                                    </div>
                                    <i-button size="small" type="ghost" v-if="!row.isTemplate"
                                    @click.native="selectTemplate(${index})">选择模板</i-button>`;
                        },
                        title: '操作',
                        width: 160,
                    },
                ],
                templateData: [
                    {
                        company: '顺丰速运',
                        height: '139mm',
                        img: image,
                        isTemplate: true,
                        status: true,
                        template: '常用模版1',
                        width: '216mm',
                    },
                    {
                        company: '顺丰速运',
                        template: '未绑定',
                        isTemplate: false,
                    },
                    {
                        company: '顺丰速运',
                        template: '未绑定',
                        isTemplate: false,
                    },
                ],
            };
        },
        methods: {
            addTemplate() {
                const self = this;
                self.$router.push(
                    {
                        path: 'waybill/add',
                    },
                );
            },
            design() {
                const self = this;
                self.$router.push(
                    {
                        path: 'waybill/design',
                    },
                );
            },
            edit() {
                const self = this;
                self.$router.push(
                    {
                        path: 'waybill/edit',
                    },
                );
            },
            remove(index) {
                this.selfTemplateData.splice(index, 1);
            },
            selectTemplate() {
                const self = this;
                self.$router.push(
                    {
                        path: 'waybill/select',
                    },
                );
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="order-waybill">
            <tabs value="name1">
                <tab-pane label="模版绑定" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>1.未绑定的物流公司后边会出现“选择模板”按钮，在选择模板页面可以绑定可用的打印模板</p>
                            <p>2.点击“设置”按钮可以设置自定义的内容，包括偏移量和需要显示的项目</p>
                            <p>3.点击“默认”按钮可以设置当前模板为默认打印模板</p>
                            <p>4.点击“解绑”按钮可以解除当前绑定，重新选择其他模板</p>
                        </div>
                        <i-table :columns="templateColumns"
                                 :context="self"
                                 :data="templateData"></i-table>
                    </card>
                </tab-pane>
                <tab-pane label="自建模版" name="name2">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>1.未绑定的物流公司后边会出现“选择模板”按钮，在选择模板页面可以绑定可用的打印模板</p>
                            <p>2.点击“设置”按钮可以设置自定义的内容，包括偏移量和需要显示的项目</p>
                            <p>3.点击“默认”按钮可以设置当前模板为默认打印模板</p>
                            <p>4.点击“解绑”按钮可以解除当前绑定，重新选择其他模板</p>
                        </div>
                        <i-button class="first-btn" type="ghost" @click.native="addTemplate">+添加模板</i-button>
                        <i-table :columns="selfTemplateColumns"
                                 :context="self"
                                 :data="selfTemplateData"></i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>