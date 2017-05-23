export default function (injection) {
    injection.useSidebar('seller', [
        {
            children: [
                {
                    path: '/seller/list',
                    title: '商品列表',
                },
            ],
            icon: 'plus',
            title: '商品',
        },
    ]);
}