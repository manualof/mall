<script>
    import injection from '../helpers/injection';
    import image from '../assets/images/img_logo.png';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('seller');
            });
        },
        data() {
            return {
                shopMessage: {
                    businessScope: '服饰',
                    companyAddress: '高新二路220号国土资源大厦公寓楼',
                    companyEmail: '336645564@qq.com',
                    companyName: '本初网络',
                    companyPhone: '029-2222365',
                    companyPlace: '陕西省西安市雁塔区',
                    contactName: 'ddd',
                    contactPhone: '13626468989',
                    employeesNum: '50',
                    licenseNo: '3326568946464',
                    licensePicture: image,
                    licensePlace: '陕西省西安市雁塔区',
                    licenseTime: '2010/10/0-2020/12/20',
                    registered: '10w',
                },
            };
        },
        methods: {
        },
    };
</script>
<template>
    <div class="seller-wrap">
        <div class="shop-message">
            <tabs value="name1">
                <tab-pane label="店铺信息" name="name1">
                    <card :bordered="false">
                        <i-form ref="goodsEdit" :model="goodsEdit" :rules="ruleValidate" :label-width="200">
                            <div class="library-application">
                                <h5>商品基本信息</h5>
                                <div>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="公司名称">
                                                {{ shopMessage.companyName }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="所在地">
                                                {{ shopMessage.companyPlace }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="详细地址">
                                                {{ shopMessage.companyAddress }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="公司电话">
                                                {{ shopMessage.companyPhone }}
                                            </form-item>
                                        </i-col>
                                        <i-col  span="12">
                                            <form-item label="电子邮箱">
                                                {{ shopMessage.companyEmail }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="员工总数">
                                                {{ shopMessage.employeesNum }}人
                                            </form-item>
                                        </i-col>
                                        <i-col  span="12">
                                            <form-item label="注册资金">
                                                {{ shopMessage.registered }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="联系人姓名">
                                                {{ shopMessage.contactName }}
                                            </form-item>
                                        </i-col>
                                        <i-col  span="12">
                                            <form-item label="联系人电话">
                                                {{ shopMessage.contactPhone }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                </div>
                            </div>
                            <div class="library-application">
                                <h5>营业执照信息（副本）</h5>
                                <div>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="营业执照号">
                                                {{ shopMessage.companyName }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="营业执照所在地">
                                                {{ shopMessage.companyPlace }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="营业执照有效期">
                                                {{ shopMessage.companyAddress }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="法定经营范围">
                                                {{ shopMessage.companyPhone }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                    <row>
                                        <i-col  span="12">
                                            <form-item label="营业执照电子版">
                                                {{ shopMessage.companyPhone }}
                                            </form-item>
                                        </i-col>
                                    </row>
                                </div>
                            </div>
                        </i-form>
                    </card>
                </tab-pane>
                <tab-pane label="申请续签" name="name2">
                    <card :bordered="false">

                    </card>
                </tab-pane>
            </tabs>
        </div>
    </div>
</template>
