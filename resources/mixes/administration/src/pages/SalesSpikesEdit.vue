<script>
    import injection from '../helpers/injection';
    import image1 from '../assets/images/img_logo.png';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            const self = this;
            return {
                form: {
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
                            key: 'pre_price',
                            title: '原价',
                            width: 180,
                        },
                        {
                            align: 'center',
                            key: 'price',
                            render(h, data) {
                                return h('i-input', {
                                    props: {
                                        type: 'ghost',
                                        value: data.row.price,
                                    },
                                });
                            },
                            title: '优惠价格',
                            width: 180,
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
                                    }, '删除'),
                                ]);
                            },
                            title: '操作',
                            width: 180,
                        },
                    ],
                    endTime: '',
                    list: [
                        {
                            image: image1,
                            name: '可用十年 创意椭圆不锈钢肥皂(带底托精装) 神奇除味去',
                            pre_price: '￥388.00',
                            price: '388.00',
                        },
                        {
                            image: image1,
                            name: '可用十年 创意椭圆不锈钢肥皂(带底托精装) 神奇除味去',
                            pre_price: '￥388.00',
                            price: '388.00',
                        },
                        {
                            image: image1,
                            name: '可用十年 创意椭圆不锈钢肥皂(带底托精装) 神奇除味去',
                            pre_price: '￥388.00',
                            price: '388.00',
                        },
                    ],
                    name: '',
                    startTime: '',
                },
                loading: false,
                rules: {
                    name: [
                        {
                            message: '活动名称不能为空',
                            required: true,
                            trigger: 'blur',
                        },
                    ],
                },
            };
        },
        methods: {
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            remove(index) {
                this.form.list.splice(index, 1);
            },
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.form.validate(valid => {
                    if (valid) {
                        self.$Message.success('提交成功!');
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="sales-spikes-edit">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>秒杀活动编辑</span>
            </div>
            <card :bordered="false">
                <i-form :label-width="180" :model="form" ref="form" :rules="rules">
                    <row>
                        <i-col span="12">
                            <form-item label="活动名称" prop="name">
                                <i-input v-model="form.name"></i-input>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="活动日期" prop="startTime">
                                <date-picker type="date" placeholder="选择日期" v-model="form.startTime"></date-picker>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item label="活动时间段" prop="endTime">
                                <time-picker type="time" placeholder="选择时间" v-model="form.endTime"></time-picker>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="24">
                            <form-item label="选择商品" prop="goods">
                                <i-table :columns="form.columns"
                                         :context="self"
                                         :data="form.list">
                                </i-table>
                            </form-item>
                        </i-col>
                    </row>
                    <row>
                        <i-col span="12">
                            <form-item>
                                <i-button :loading="loading" type="primary" @click.native="submit">
                                    <span v-if="!loading">确认提交</span>
                                    <span v-else>正在提交…</span>
                                </i-button>
                            </form-item>
                        </i-col>
                    </row>
                </i-form>
            </card>
        </div>
    </div>
</template>
