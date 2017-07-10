<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            const self = this;
            return {
                managementSearch: '',
                searchList: [
                    {
                        label: '相册名称',
                        value: '1',
                    },
                    {
                        label: '相册ID',
                        value: '2',
                    },
                    {
                        label: '店铺名称',
                        value: '3',
                    },
                    {
                        label: '店铺ID',
                        value: '4',
                    },
                ],
                self: this,
                typeColumns: [
                    {
                        key: 'albumId',
                        title: '相册ID',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'albumName',
                        title: '相册名称',
                    },
                    {
                        align: 'center',
                        key: 'shopId',
                        title: '店铺ID',
                    },
                    {
                        align: 'center',
                        key: 'shopName',
                        title: '店铺名称',
                    },
                    {
                        align: 'center',
                        key: 'coverImg',
                        render(h) {
                            return h('icon', {
                                props: {
                                    type: 'image',
                                },
                            });
                        },
                        title: '封面图片',
                    },
                    {
                        align: 'center',
                        key: 'albumNum',
                        title: '图片数量',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        title: '操作',
                        width: 180,
                        render(h, data) {
                            return h('div', [
                                h('i-button', {
                                    on: {
                                        click() {
                                            self.look(data.index);
                                        },
                                    },
                                    props: {
                                        size: 'small',
                                        type: 'ghost',
                                    },
                                }, '查看'),
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
                                    style: {
                                        marginLeft: '10px',
                                    },
                                }, '删除'),
                            ]);
                        },
                    },
                ],
                typeData: [
                    {
                        albumId: '01',
                        albumName: '默认相册',
                        albumNum: 50,
                        shopId: '336',
                        shopName: 'Rey吕官方旗舰店',
                    },
                    {
                        albumId: '01',
                        albumName: '默认相册',
                        albumNum: 50,
                        shopId: '336',
                        shopName: 'Rey吕官方旗舰店',
                    },
                    {
                        albumId: '01',
                        albumName: '默认相册',
                        albumNum: 50,
                        shopId: '336',
                        shopName: 'Rey吕官方旗舰店',
                    },
                ],
            };
        },
        methods: {
            lookData() {
                const self = this;
                self.$router.push({
                    path: 'picture/look/all',
                });
            },
            look() {
                const self = this;
                self.$router.push({
                    path: 'picture/look',
                });
            },
            remove(index) {
                this.typeData.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="goods-picture">
            <tabs value="name1">
                <tab-pane label="图片空间" name="name1">
                    <card :bordered="false">
                        <div class="prompt-box">
                            <p>提示</p>
                            <p>相册删除后，相册内全部图片都会删除，不能恢复，请谨慎操作</p>
                        </div>
                        <div class="album-action">
                            <i-button class="add-data" type="ghost" @click.native="lookData">全部图片</i-button>
                            <i-button size="small" type="text" icon="android-sync" class="refresh">刷新</i-button>
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
                        <i-table highlight-row :columns="typeColumns" :context="self"
                                 :data="typeData"></i-table>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>