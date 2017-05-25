export default function (injection) {
    injection.useSidebar('seller', [
        {
            children: [
                {
                    path: '/seller/home',
                    title: '首页',
                },
            ],
            icon: 'plus',
            title: '首页',
        },
        {
            children: [
                {
                    path: '/seller/goods',
                    title: '商品列表',
                },
                {
                    path: '/seller/goods/notice',
                    title: '预约/到货通知',
                },
                {
                    path: '/seller/goods/standard',
                    title: '商品规格',
                },
                {
                    path: '/seller/goods/picture',
                    title: '图片空间',
                },
            ],
            icon: 'plus',
            title: '商品',
        },
        {
            children: [
                {
                    path: '/seller/shop',
                    title: '店铺设置',
                },
                {
                    path: '/seller/shop/navigate',
                    title: '店铺导航',
                },
                {
                    path: '/seller/shop/trend',
                    title: '店铺动态',
                },
                {
                    path: '/seller/shop/message',
                    title: '店铺信息',
                },
                {
                    path: '/seller/shop/category',
                    title: '店铺分类',
                },
                {
                    path: '/seller/shop/application',
                    title: '品牌申请',
                },
                {
                    path: '/seller/shop/supplier',
                    title: '供货商',
                },
                {
                    path: '/seller/shop/store',
                    title: '门店',
                },
            ],
            icon: 'plus',
            title: '店铺',
        },
    ]);
}