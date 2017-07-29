<template>
    <div class="businessmen-box">
        <div class="shop_banner" v-if="temp==1">
            <img src="../assets/images/shop-banner.png"/>
            <div class="shop_icon1 shop_icon" @click="next">
                <div class="shop_icon2 shop_icon">
                    <div class="shop_icon3 shop_icon">我要开店</div>
                </div>
            </div>
        </div>
        <div class="container businessmen" v-if="temp != 1">
            <div class="step-box" v-if="temp >= 3">
                <ul class="clearfix row">
                    <li class="clearfix pull-left col-md-3.5" v-for="(temp, index) in temps"
                        :class="{ active: temp >= index+2 }">
                        <ul class="clearfix cricle-box pull-left" v-if="index!=0">
                            <li class="cricle pull-left" v-for="i in 17"></li>
                        </ul>
                        <div class="step pull-left">
                            <span class="step-list">{{ index + 1 }}</span>
                            <p class="modify-margin">{{ tem }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content_box">
                <div class="progress_02" v-if="temp===2">
                    <h4 class="text-center">入驻协议</h4>
                    <div>
                        <h5>商家入驻要求</h5>
                        <ol>
                            <li>1.请确保您的企业营业执照、组织机构代码证、银行开户许可证、税务登记证、一般纳税人资格证均有效；</li>
                            <li>2.请确保您所拥有的品牌有效或已获得相关授权；</li>
                            <li>3.请确保您所售商品已取得国家规定的相关行业资质。</li>
                        </ol>
                    </div>
                    <label class="agree">
                        <input type="checkbox" v-model="agree">
                        <span></span>
                        我已阅读并同意以上协议
                    </label>
                    <div class="col-md-offset-5 col-md-1 col-sm-1">
                        <button class="btn btn-default next-btn btn-info" :disabled="!agree" @click="next">确认入驻店铺</button>
                    </div>
                </div>
                <div class="progress_03" v-if="temp===3">
                    <div>
                        <ol>
                            <li>1.公司类信息需填项较多，建议先查看公司信息注意事项再进行填写；</li>
                            <li>2.公司信息请严格按照相关证件信息进行确认填写；</li>
                            <li>3.以下所需要上传电子版资质仅支持JPG、GIF、PNG格式的图片，大小不超过1M，且必须加盖企业彩色公章。</li>
                        </ol>
                    </div>
                    <h4>公司及联系人信息</h4>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="company_name" class="col-sm-2 control-label">公司名称</label>
                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control"
                                       v-model="lincenseInfo.company_name"
                                       id="company_name"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公司所在地</label>
                            <div class="col-sm-10">
                                <cascader :data="data" v-model="lincenseInfo.company_address"></cascader>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公司详细地址</label>
                            <div class="col-sm-10">
                                <textarea type="text" v-model="lincenseInfo.company_detial_adress"
                                       class="form-control pull-left"
                                       placeholder="">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公司电话</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="lincenseInfo.company_tel"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">员工总数</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="lincenseInfo.company_tel"
                                       placeholder="">
                                人
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">注册资金</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="lincenseInfo.company_tel"
                                       placeholder="">
                                万元
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-md-2 col-sm-2 col-xs-2 control-label text-right">联系人姓名</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="email" class="form-control" id="inputName" placeholder=""
                                       v-model="connect.name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone" class="col-md-2 col-sm-2 col-xs-2 control-label text-right">联系人电话</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="tel" class="form-control" id="inputPhone" placeholder=""
                                       v-model="connect.phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 col-sm-2 col-xs-2 control-label text-right">电子邮箱</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="email" class="form-control" id="inputEmail" placeholder=""
                                       v-model="connect.email">
                            </div>
                        </div>
                    </div>
                    <h4>营业执照信息</h4>
                    <div class="form-horizontal">

                        <div class="form-group">
                            <label for="registration_num" class="col-sm-2 control-label">营业执照号</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="lincenseInfo.registration_num"
                                       id="registration_num"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">营业执照所在地</label>
                            <div class="col-sm-10">
                                <Cascader :data="data"
                                          v-model="lincenseInfo.business_license_address"></Cascader>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">营业期限</label>
                            <div class="col-sm-10">
                                <div class="date_div pull-left">
                                    <datepicker language="zh" v-model="organizationInfo.startDate" name="startDate"
                                                format="yyyy MMM dd">
                                    </datepicker>
                                    <span class="date_icon icon iconfont icon-rili"></span>
                                </div>
                                <span class="pull-left connect"></span>
                                <div class="date_div pull-left">
                                    <datepicker language="zh" v-model="organizationInfo.endDate" name="endDate"
                                                format="yyyy MMM dd">
                                    </datepicker>
                                    <span class="date_icon icon iconfont icon-rili"></span>
                                </div>
                                <label class="radio-inline date_long radio-box">
                                    <input type="checkbox" name="longTime" value="longTime">
                                    <span></span>长期
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="col-sm-2 control-label">法定经营范围</label>
                            <div class="col-sm-10">
                                    <textarea type="text" class="form-control business_scope" v-model="lincenseInfo.business_scope"
                                              placeholder=""></textarea>
                                <p class="p_first">请与营业执照或企业信息公示网的经营范围保持一致</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">营业执照电子版</label>
                            <div class="col-sm-10">
                                <ul class="real-imgs clearfix">
                                    <li v-for="img in lincenseInfo.license_imgs">
                                        <img :src="img.content"/>
                                        <div class="cover">
                                            <i class="icon iconfont icon-icon_shanchu"
                                               @click="deleteImg(lincenseInfo.license_imgs,img)"> </i>
                                        </div>
                                    </li>
                                    <li v-if="lincenseInfo.license_imgs.length<2">
                                        <div class="diamond-upload-file">
                                            <div class="icon iconfont icon-tupian"></div>
                                            <input type="file" accept="image/*"
                                                   @change="imageSelected($event,lincenseInfo.license_imgs)">
                                        </div>
                                    </li>
                                </ul>
                                <p class="p_first">营业执照复印件需加盖公司红章扫描上传，若营业执照上未体现注册资本、经营范围，请在营业执照后另行上传企业信息公示网上的截图。</p>
                                <p class="p_prompt">图片尺寸请确保800px*800px以上，文件大小1MB以内，支持JPG、GIF、PNG格式，最多可上传2张</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                            <div class="col-md-offset-4 col-sm-offset-4 col-xs-offset-4 col-md-1 col-sm-1 col-xs-1">
                                <button class="btn btn-default prev-btn" @click="prev">上一步</button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <button type="submit" class="col-md-offset-11 col-sm-offset-11 col-xs-offset-11 btn btn-info next-btn" @click="next">
                                    下一步，完善公司信息
                                </button>
                            </div>
                        </div>
                    </div>
                <div class="progress_06" v-if="temp===4">
                    <div class="info_item form-horizontal operating">
                        <h4>店铺信息</h4>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属分类</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select" v-model="shopInfo.shop_type.name">
                                    <option value="" v-for="option in shopInfo.shop_type.options">{{ option }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info_item form-horizontal operating">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">主营类目</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select pull-left main_categories"
                                        v-model="item.name"
                                        v-for="item in shopInfo.main_categories">
                                    <option value="" v-for="option in item.options">{{ option }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="col-sm-2 control-label">店铺名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="shopInfo.shop_name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="col-sm-2 control-label">店铺账号</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="shopInfo.business_firm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group btn_div">
                            <div class="col-md-offset-4 col-md-1">
                                <button class="btn btn-default prev-btn" @click="prev">上一步</button>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="col-md-offset-11 btn btn-info next-btn" @click="next">
                                    下一步，完善公司信息
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress_07 settled_audit_box" v-if="temp===5">
                    <p>如果您对提交的信息有疑问，可以
                        <router-link to="/"><u>点击修改公司信息</u></router-link>&nbsp;&nbsp;&nbsp;
                        <router-link to="/"><u>点击修改店铺信息</u></router-link>
                    </p>
                    <div class="info_item form-horizontal">
                        <h4>入驻状态</h4>
                        <div class="row settled_audit">
                            <div class="col-sm-1 control-label">待审核</div>
                            <div class="col-sm-9">
                                等待审核人员进行审核。如对已提交信息有疑问，您可以自主撤销此次入驻申请。
                            </div>
                            <div class="col-sm-2 text-right">
                                <button class="btn btn-default prev-btn">撤销申请</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Datepicker from 'vuejs-datepicker';
    import cities from '../data/cities';

    export default {
        components: {
            Datepicker,
        },
        data() {
            return {
                agree: false,
                temps: ['入驻须知', '公司信息', '店铺信息', '入驻审核'],
                temp: 1,
                data: cities,
                connect: {
                    name: '',
                    phone: '',
                    email: '',
                },
                lincenseInfo: {
                    company_name: '',
                    registration_num: '',
                    legal_person_name: '',
                    business_license_address: [],
                    license_type: true,
                    detial_adress: '',
                    setDate: new Date(),
                    startDate: new Date(),
                    endDate: new Date(),
                    redistered_capital: '',
                    company_detial_address: '',
                    business_scope: '',
                    company_address: [],
                    company_tel: '',
                    emergency_contact: '',
                    certificate_type: '',
                    legal_id: '',
                    id_card_imgs: [],
                    license_imgs: [],
                    account_imgs: [],
                },
                organizationInfo: {
                    code: '',
                    startDate: new Date(),
                    endDate: new Date(),
                    certificate_imgs: [],
                },
                taxationInfo: {
                    taxpayer_type: '',
                    code: '',
                    certificate_imgs: [],
                    tax_paymentCode: '',
                },
                bankInfo: {
                    public_account: '',
                    branch_num: '',
                    branch_name: '',
                    address: '',
                },
                operatingInfo: {
                    company_type: '',
                    web_address: '',
                    year_sales: '',
                    shop_address: '',
                    person_num: '',
                    similar_experience: '',
                    available_num: '',
                    average_price: '',
                    warehouse_situation: '',
                    warehouse_address: '',
                    used_logistics: '',
                    erp_type: '',
                    behalf_company_name: '',
                },
                shopInfo: {
                    shop_type: {
                        name: '',
                        options: ['请选择', '有限公司', '国营企业', '私营企业'],
                    },
                    main_categories: [
                        {
                            name: '',
                            options: ['请选择', '1', '2', '3'],
                        },
                        {
                            name: '',
                            options: ['请选择', '1', '2', '3'],
                        },
                        {
                            name: '',
                            options: ['请选择', '1', '2', '3'],
                        },
                    ],
                    shop_name: '',
                    business_firm: '',
                    shop_account: '',
                },
            };
        },
        methods: {
            next() {
                if (this.temp < 7) {
                    this.temp += 1;
                }
            },
            prev() {
                this.temp -= 1;
            },
            imageSelected(e, arr) {
                const file = e.target.files[0];
                const image = {
                    content: '',
                    file1: file,
                };
                const reader = new global.FileReader();
                reader.onload = () => {
                    image.content = reader.result;
                };
                reader.readAsDataURL(file);
                arr.push(image);
            },
            deleteImg(arr, item) {
                arr.splice(arr.indexOf(item));
            },
        },
    };
</script>