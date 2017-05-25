<script>
    import injection from '../helpers/injection';
    import image from '../assets/images/adv.jpg';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                checkAll: false,
                checkAllGroup: [],
                goodsPicture: {
                    sortType: '',
                },
                indeterminate: true,
                pictureList: [
                    {
                        img: image,
                        name: '商品rey的主图1',
                        uploadTime: '上传时间：2017/02/11 12:30:17',
                        size: '原图尺寸：400*400',
                    },
                    {
                        img: image,
                        name: '商品rey的主图2',
                        uploadTime: '上传时间：2017/02/11 12:30:17',
                        size: '原图尺寸：400*400',
                    },
                    {
                        img: image,
                        name: '商品rey的主图3',
                        uploadTime: '上传时间：2017/02/11 12:30:17',
                        size: '原图尺寸：400*400',
                    },
                    {
                        img: image,
                        name: '商品rey的主图4',
                        uploadTime: '上传时间：2017/02/11 12:30:17',
                        size: '原图尺寸：400*400',
                    },
                    {
                        img: image,
                        name: '商品rey的主图5',
                        uploadTime: '上传时间：2017/02/11 12:30:17',
                        size: '原图尺寸：400*400',
                    },
                ],
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
            checkAllGroupChange(data) {
                if (data.length === this.pictureList.length) {
                    this.indeterminate = false;
                    this.checkAll = true;
                } else if (data.length > 0) {
                    this.indeterminate = true;
                    this.checkAll = false;
                } else {
                    this.indeterminate = false;
                    this.checkAll = false;
                }
            },
            goBack() {
                const self = this;
                self.$router.go(-1);
            },
            handleCheckAll() {
                if (this.indeterminate) {
                    this.checkAll = false;
                } else {
                    this.checkAll = !this.checkAll;
                }
                this.indeterminate = false;
                if (this.checkAll) {
                    this.checkAllGroup = this.pictureList;
                } else {
                    this.checkAllGroup = [];
                }
            },
            removeImage(index) {
                this.pictureList.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="goods-picture-manage">
            <div class="edit-link-title">
                <i-button type="text" @click.native="goBack">
                    <icon type="chevron-left"></icon>
                </i-button>
                <span>相册管理-默认相册</span>
            </div>
            <card :bordered="false">
                <div class="goods-list">
                    <div class="btn-group">
                        <checkbox
                                :indeterminate="indeterminate"
                                :value="checkAll"
                                @click.prevent.native="handleCheckAll">全选</checkbox>
                        <i-button class="first-btn" type="ghost">上传图片</i-button>
                        <i-button type="ghost" class="first-btn">添加水印</i-button>
                        <i-button type="ghost">批量删除</i-button>
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
                    <checkbox-group v-model="checkAllGroup" @on-change="checkAllGroupChange">
                        <checkbox :label="item" v-for="(item, index) in pictureList">
                            <img :src="item.img" alt="">
                            <i-button type="text" @click.native="removeImage">
                                <icon type="trash-a"></icon>
                            </i-button>
                            <p>{{ item.name}}</p>
                            <p class="tip">{{ item.uploadTime}}</p>
                            <p class="tip">{{ item.size}}</p>
                        </checkbox>
                    </checkbox-group>
                </div>
                <div class="page">
                    <page :total="100" show-elevator></page>
                </div>
            </card>
        </div>
    </div>
</template>