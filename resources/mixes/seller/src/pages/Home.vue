<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                shop: {
                    level: '白金店铺',
                    manage: '管理员',
                    name: '西部母婴用品店',
                    valid: '2020年5月10日',
                },
                user: {
                    name: 'nwaijhf',
                },
            };
        },
        methods: {},
    };
</script>
<template>
    <div class="mall-wrap">
        <div class="home-wrap">
            <tabs value="home">
                <tab-pane label="首页" name="home">
                    <card :bordered="false">
                        <row class="top-shop-intro">
                            <i-col class="img" span="2">
                                <img src="" alt="">
                            </i-col>
                            <i-col span="22">
                                <h4>{{ shop.name }}
                                    <span>(用户名:{{ user.name }})</span>
                                </h4>
                                <ul>
                                    <li>管理权限:{{ shop.manage }}</li>
                                    <li>店铺等级:{{ shop.level }}</li>
                                    <li>有效期:{{ shop.valid }}</li>
                                </ul>
                            </i-col>
                        </row>
                        <div class="bottom-shop-tip">
                            
                        </div>
                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>