<template>
    <div class="menu">
        <ul class="menu-bar">
            <li v-for="menu in menus">
                <i class="icon iconfont icon-nvzhuang" :class="menu.icon"></i>
                <span>{{ menu.name }}</span>
                <i class="icon iconfont icon-gengduo triangle"></i>
                <div class="menu-content">
                    <div class="content-list" v-for="item in menu.secondMenu">
                        <h5>{{ item.name }}</h5>
                        <ul class="row">
                            <li class="col-sm-1" v-for="product in item.products"><a href="javascript:void (0)">{{ product.product }}</a><span>|</span></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                menus: [
                    {
                        name: '女装外套',
                        icon: 'icon-nvzhuang',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        name: '棉品寝卧',
                        icon: 'icon-shanghuo',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        name: '童装其他',
                        icon: 'icon-tongxie',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        name: '家具家纺',
                        icon: 'icon-nvzhuang',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        name: '家具家纺',
                        icon: 'icon-nvzhuang',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        name: '家具家纺',
                        icon: 'icon-nvzhuang',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        name: '童装其他',
                        icon: 'icon-nvzhuang',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        name: '婴儿制品',
                        icon: 'icon-nvzhuang',
                        recommend: [
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                            {
                                id: 1,
                                name: '护发精油',
                            },
                        ],
                        secondMenu: [
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                            {
                                name: '洗护日用',
                                products: [
                                    {
                                        id: 123,
                                        product: '洗发水',
                                    },
                                    {
                                        id: 123,
                                        product: '护发素',
                                    },
                                    {
                                        id: 123,
                                        product: '发膜',
                                    },
                                    {
                                        id: 123,
                                        product: '染发剂',
                                    },
                                    {
                                        id: 123,
                                        product: '护法精油',
                                    },
                                    {
                                        id: 123,
                                        product: '梳子',
                                    },
                                    {
                                        id: 123,
                                        product: '沐浴露',
                                    },
                                ],
                            },
                        ],
                    },
                ],
            };
        },
    };
</script>
