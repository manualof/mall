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
                goodsPicture: {
                    sortType: '',
                },
                pictureList: [
                    {
                        img: image,
                        name: '相册名称1',
                        num: '455',
                    },
                    {
                        img: image,
                        name: '相册名称2',
                        num: '455',
                    },
                    {
                        img: image,
                        name: '相册名称3',
                        num: '455',
                    },
                    {
                        img: image,
                        name: '相册名称4',
                        num: '455',
                    },
                    {
                        img: image,
                        name: '相册名称5',
                        num: '455',
                    },
                    {
                        img: image,
                        name: '相册名称6',
                        num: '455',
                    },
                    {
                        img: image,
                        name: '相册名称7',
                        num: '455',
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
            pictureManage() {
                console.log('11');
                const self = this;
                self.$router.push({
                    path: 'picture/manage',
                });
            },
            removeImage(index) {
                this.pictureList.splice(index, 1);
            },
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="goods-picture">
            <tabs value="name1">
                <tab-pane label="相册管理" name="name1">
                    <card :bordered="false">
                        <div class="goods-list">
                            <div class="btn-group">
                                <i-button class="first-btn" type="ghost">创建相册</i-button>
                                <i-button type="ghost">上传图片</i-button>
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
                            <div class="picture-group">
                                <ul class="clearfix">
                                    <li v-for="item in pictureList">
                                        <div class="img" @click="pictureManage">
                                            <img :src="item.img" alt="">
                                            <i-button type="text" @click.native="removeImage">
                                                <icon type="trash-a"></icon>
                                            </i-button>
                                        </div>
                                        <div class="img-intro">
                                            <span @click="pictureManage">{{ item.name }}</span>
                                            <i-button type="text" @click.native="editImage">
                                                <icon type="edit"></icon>
                                            </i-button>
                                        </div>
                                        <p class="tip">共{{ item.num }}张</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="page">
                            <page :total="100" show-elevator></page>
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>