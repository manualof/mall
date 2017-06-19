<template>
    <div>
        <row class="expand-row" v-for="item in row.subordinate">
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
        </row>
    </div>
</template>
<script>
    export default {
        props: {
            row: Object,
        },
    };
</script>