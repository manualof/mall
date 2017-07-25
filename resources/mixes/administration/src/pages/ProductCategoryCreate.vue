<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            injection.loading.start();
            injection.http.post(`${window.api}/mall/admin/product/category/list`).then(response => {
                const structures = response.data.structure;
                next(vm => {
                    if (to.query.parent) {
                        vm.form.parent = to.query.parent;
                    }
                    vm.structures = Object.keys(structures).map(index => {
                        const item = structures[index];
                        item.label = item.name;
                        item.value = item.id;
                        const children = item.children;
                        item.children = Object.keys(children).map(i => {
                            const sub = children[i];
                            sub.label = sub.name;
                            sub.value = sub.id;
                            const down = sub.children;
                            sub.children = Object.keys(down).map(n => {
                                const low = down[n];
                                low.label = low.name;
                                low.value = low.id;
                                return low;
                            });
                            return sub;
                        });
                        return item;
                    });
                    injection.loading.finish();
                    injection.sidebar.active('mall');
                });
            }).catch(() => {
                injection.loading.fail();
            });
        },
        data() {
            return {
                structures: [],
                form: {
                    deposit: 10,
                    name: '',
                    order: 0,
                    parent: [],
                },
                loading: false,
                rules: {
                    deposit: [
                        {
                            message: '分佣比例不能为空',
                            required: true,
                            trigger: 'blur',
                            type: 'number',
                        },
                    ],
                    name: [
                        {
                            message: '名称名称不能为空',
                            required: true,
                            trigger: 'blur',
                            type: 'string',
                        },
                    ],
                },
                parents: [
                    {
                        label: '颜色',
                        value: '1',
                    },
                    {
                        label: '类型',
                        value: '2',
                    },
                ],
            };
        },
        methods: {
            submit() {
                const self = this;
                self.loading = true;
                self.$refs.form.validate(valid => {
                    if (valid) {
                        const form = self.form;
                        if (form.parent.length > 0) {
                            form.parent_id = form.parent[form.parent.length];
                        }
                        self.$http.post(`${window.api}/mall/admin/product/category/create`, self.form).then(() => {
                            self.$notice.open({
                                title: '创建商品分类信息成功！',
                            });
                            if (self.form.parent) {
                                self.$router.push({
                                    path: '/mall/goods/category',
                                    query: {
                                        parent: form.parent_id,
                                    },
                                });
                            } else {
                                self.$router.push('/mall/goods/category');
                            }
                        }).catch(() => {
                        }).finally(() => {
                            self.loading = false;
                        });
                    } else {
                        self.loading = false;
                        self.$notice.error({
                            title: '请正确填写设置信息！',
                        });
                    }
                });
            },
        },
        watch: {
            form: {
                deep: true,
                handler(val) {
                    window.console.log(val);
                },
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-category-add">
            <div class="edit-link-title">
                <router-link to="/mall/goods/category">
                    <i-button type="text" @click.native="goBack">
                        <icon type="chevron-left"></icon>
                    </i-button>
                </router-link>
                <span>分类管理—新增</span>
            </div>
            <card :bordered="false">
                <i-form ref="form" :model="form" :rules="rules" :label-width="200">
                    <div class="basic-information">
                        <row>
                            <i-col span="12">
                                <form-item label="分类名称" prop="name">
                                    <i-input v-model="form.name"></i-input>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="分佣比例" prop="deposit">
                                    <i-input v-model="form.deposit"></i-input>
                                    <div class="tip">
                                        <p>分佣比例必须为0-100的整数,默认关联至子分类</p>
                                    </div>
                                </form-item>
                            </i-col>
                            <i-col span="1" class="inline-symbol">%</i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="上级分类">
                                    <cascader change-on-select :data="structures" v-model="form.parent"
                                              @on-change="selectChange"></Cascader>
                                    <p class="tip">如果选择上级分类,那么新的分类则为被选择上级分类的子分类</p>
                                </form-item>
                            </i-col>
                        </row>
                        <row>
                            <i-col span="12">
                                <form-item label="排序">
                                    <i-input v-model="form.order"></i-input>
                                    <p class="tip">数字范围为0~255，数字越小越靠前</p>
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
                    </div>
                </i-form>
            </card>
        </div>
    </div>
</template>