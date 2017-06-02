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
        {
            children: [
                {
                    path: '/seller/statistics',
                    title: '店铺概况',
                },
                {
                    path: '/seller/statistics/goods',
                    title: '商品分析',
                },
                {
                    path: '/seller/statistics/operation',
                    title: '运营报告',
                },
                {
                    path: '/seller/statistics/industry',
                    title: '行业分析',
                },
                {
                    path: '/seller/statistics/flow',
                    title: '流量统计',
                },
                {
                    path: '/seller/statistics/settlement',
                    title: '商品结算',
                },
            ],
            icon: 'plus',
            title: '统计结算',
        },
    ]);
}