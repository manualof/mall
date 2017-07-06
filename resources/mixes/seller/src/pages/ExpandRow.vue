<template>
    <div>
        <i-table class="expand-row"
                 :columns="columns"
                 :context="self"
                 :data="row.subordinate"
                 ref="categoryList"
                 :show-header="false">
        </i-table>
        <!--<row class="expand-row" v-for="item in row.subordinate">
            <i-col span="6">
                <span class="expand-value">{{ item.name }}</span>
            </i-col>
            <i-col span="6">
                <span class="expand-value">{{ item.sort }}</span>
            </i-col>
            <i-col span="6">
                <span class="expand-value">
                    <i-switch size="large" v-model="item.status">
                        <span slot="open">开启</span>
                        <span slot="close">关闭</span>
                    </i-switch>
                </span>
            </i-col>
            <i-col span="6">
                <span class="expand-key"></span>
                <span class="expand-value">
                    <i-button @click.native="edit()" type="ghost">编辑</i-button>
                    <i-button @click.native="remove()" class="delete-ad"
                              type="ghost">删除</i-button>
                </span>
            </i-col>
        </row>-->
    </div>
</template>
<script>
    export default {
        data() {
            return {
                self: this,
                columns: [
                    {
                        key: 'space',
                        title: '',
                        width: 110,
                    },
                    {
                        key: 'name',
                        title: '分类名称',
                    },
                    {
                        align: 'center',
                        key: 'sort',
                        title: '排序',
                    },
                    {
                        key: 'shelves',
                        render() {
                            return `<i-switch size="large" v-model="row.status">
                                    <span slot="open">开启</span>
                                    <span slot="close">关闭</span>
                                    </i-switch>`;
                        },
                        title: '上架',
                    },
                    {
                        align: 'center',
                        key: 'action',
                        render(row, column, index) {
                            return `<i-button @click.native="edit(${index})" type="ghost">编辑</i-button>
                                    <i-button @click.native="remove(${index})" class="delete-ad"
                                     type="ghost">删除</i-button>`;
                        },
                        title: '操作',
                    },
                ],
            };
        },
        props: {
            row: Object,
        },
    };
</script>