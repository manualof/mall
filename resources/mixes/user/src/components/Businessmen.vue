<template>
    <div class="businessmen-box">
        <div class="shop_banner" v-if="temp==1">
            <img src="../assets/images/shop-banner.png"/>
            <div class="shop_icon1 shop_icon" @click="next">
                <div class="shop_icon2 shop_icon">
                    <div class="shop_icon3 shop_icon">
                        我要开店
                    </div>
                </div>
            </div>
        </div>
        <div class="container businessmen" v-if="temp != 1">
            <div class="step-box" v-if="temp >= 3">
                <ul class="clearfix row">
                    <li class="clearfix pull-left col-md-3.5" v-for="(tem,index) in temps"
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
                    <h4>入驻协议</h4>
                    <div>
                        <h5>商家入驻要求</h5>
                        <ol>
                            <li>请确保您的企业营业执照、组织机构代码证、银行开户许可证、税务登记证、一般纳税人资格证均有效；</li>
                            <li>请确保您所拥有的品牌有效或已获得相关授权；</li>
                            <li>请确保您所售商品已取得国家规定的相关行业资质。</li>
                        </ol>
                    </div>
                    <label class="agree">
                        <input type="checkbox" v-model="agree">
                        <span>
                    </span>
                        我已阅读并同意以上协议
                    </label>
                    <div class="col-md-offset-5 col-md-1">
                        <button class="btn btn-default next-btn btn-info" :disabled="!agree" @click="next">确认入驻店铺</button>
                    </div>
                </div>
                <div class="progress_03" v-if="temp===3">
                    <h4>入驻联系人信息</h4>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputName" class="col-md-2 control-label">联系人姓名</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="inputName" placeholder=""
                                       v-model="connect.name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone" class="col-md-2 control-label">联系人手机</label>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="inputPhone" placeholder=""
                                       v-model="connect.phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-2 control-label">联系人电子邮箱</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="inputEmail" placeholder=""
                                       v-model="connect.email">
                                <p>用于入驻过程中接收京东审核结果、开店账号密码信息，请务必正确填写。</p>
                            </div>
                        </div>
                        <div class="form-group">
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
                <div class="progress_04" v-if="temp===4">
                    <div class="prompt">
                        <ol>
                            <li>公司类信息需填项较多，建议先查看公司信息注意事项再进行填写；</li>
                            <li>公司信息请严格按照相关证件信息进行确认填写；</li>
                            <li>以下所需要上传电子版资质仅支持JPG、GIF、PNG格式的图片，大小不超过1M，且必须加盖企业彩色公章。</li>
                        </ol>
                    </div>
                    <div class="company_info">
                        <div class="info_item form-horizontal">
                            <h4>营业执照信息</h4>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">执照类型</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="license_type" v-model="lincenseInfo.license_type"
                                               value="ordinary"> 普通执照
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="license_type" v-model="lincenseInfo.license_type"
                                               value="threeCards"> 三证合一
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">公司名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="lincenseInfo.company_name"
                                           id="company_name"
                                           placeholder="">
                                    <p>请按照营业执照上登记的完整名称填写</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="registration_num" class="col-sm-2 control-label">营业执照注册号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="lincenseInfo.registration_num"
                                           id="registration_num"
                                           placeholder="">
                                    <p>请按照营业执照上的注册号进行填写</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">法定代表人姓名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="lincenseInfo.legal_person_name"
                                           id="legal_person_name" placeholder="">
                                    <p>请按照营业执照上登记的法人填写</p>
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
                                <label class="col-sm-2 control-label">营业执照详细地址</label>
                                <div class="col-sm-10">
                                    <span class="pull-left">北京市 朝阳区 三环以内</span>
                                    <input type="text" v-model="lincenseInfo.detial_adress"
                                           class="form-control pull-left"
                                           id="default_address" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">成立日期</label>
                                <div class="col-sm-10">
                                    <div class="date_div">
                                        <datepicker language="zh" v-model="lincenseInfo.setDate" name="setDate"
                                                    format="yyyy MMM dd">
                                        </datepicker>
                                        <span class="date_icon icon iconfont icon-rili"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">营业期限</label>
                                <div class="col-sm-10">
                                    <div class="date_div pull-left">
                                        <datepicker language="zh" v-model="lincenseInfo.startDate" name="startDate"
                                                    format="yyyy MMM dd">
                                        </datepicker>
                                        <span class="date_icon icon iconfont icon-rili"></span>
                                    </div>
                                    <span class="pull-left connect"></span>
                                    <div class="date_div pull-left">
                                        <datepicker language="zh" v-model="lincenseInfo.endDate" name="endDate"
                                                    format="yyyy MMM dd">
                                        </datepicker>
                                        <span class="date_icon icon iconfont icon-rili"></span>
                                    </div>
                                    <label class="radio-inline date_long">
                                        <input type="radio" name="inlineRadioOptions" v-model="lincenseInfo.endDate"
                                               value="longTime"> 长期
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">注册资本</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control pull-left"
                                           v-model="lincenseInfo.redistered_capital"
                                           placeholder="">
                                    <span class="pull-left input_suffix">万元</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">经营范围</label>
                                <div class="col-sm-10">
                  <textarea type="text" class="form-control business_scope" v-model="lincenseInfo.business_scope"
                            placeholder=""></textarea>
                                    <p>请与营业执照或企业信息公示网的经营范围保持一致</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">公司所在地</label>
                                <div class="col-sm-10">
                                    <Cascader :data="data" v-model="lincenseInfo.company_address"></Cascader>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">公司详细地址</label>
                                <div class="col-sm-10">
                                    <span class="pull-left">北京市 朝阳区 三环以内</span>
                                    <input type="text" v-model="lincenseInfo.company_detial_adress"
                                           class="form-control pull-left"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">公司电话</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="lincenseInfo.company_tel"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">公司紧急联系人</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="lincenseInfo.emergency_contact"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">法定代表人证件类型</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="certificate_type"
                                               v-model="lincenseInfo.certificate_type"
                                               value="mainland"> 大陆身份证
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="certificate_type"
                                               v-model="lincenseInfo.certificate_type"
                                               value="notMainland"> 非大陆证件
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">法定代表人身份证号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="lincenseInfo.legal_id"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">法人身份证电子版</label>
                                <div class="col-sm-10">
                                    <ul class="real-imgs clearfix">
                                        <li v-for="img in lincenseInfo.id_card_imgs">
                                            <img :src="img.content"/>
                                            <div class="cover">
                                                <i class="icon iconfont icon-icon_shanchu"
                                                   @click="deleteImg(lincenseInfo.id_card_imgs,img)"> </i>
                                            </div>
                                        </li>
                                        <li v-if="lincenseInfo.id_card_imgs.length<2">
                                            <div class="diamond-upload-file">
                                                <div class="icon iconfont icon-tupian"></div>
                                                <input type="file" accept="image/*"
                                                       @change="imageSelected($event,lincenseInfo.id_card_imgs)">
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="p_first">身份证要求正反两面，复印件请加盖开店公司红章。</p>
                                    <p class="p_prompt">图片尺寸请确保800px*800px以上，文件大小1MB以内，支持JPG、GIF、PNG格式，最多可上传2张</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">营业执照电子版</label>
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
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">银行开户电子版</label>
                                <div class="col-sm-10">
                                    <ul class="real-imgs clearfix">
                                        <li v-for="img in lincenseInfo.account_imgs">
                                            <img :src="img.content"/>
                                            <div class="cover">
                                                <i class="icon iconfont icon-icon_shanchu"
                                                   @click="deleteImg(lincenseInfo.account_imgs,img)"> </i>
                                            </div>
                                        </li>
                                        <li v-if="lincenseInfo.account_imgs.length<2">
                                            <div class="diamond-upload-file">
                                                <div class="icon iconfont icon-tupian"></div>
                                                <input type="file" accept="image/*"
                                                       @change="imageSelected($event,lincenseInfo.account_imgs)">
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="p_first">复印件需加盖公司红章扫描上传</p>
                                    <p class="p_prompt">图片尺寸请确保800px*800px以上，文件大小1MB以内，支持JPG、GIF、PNG格式</p>
                                </div>
                            </div>
                        </div>
                        <div class="info_item form-horizontal organization">
                            <h4>组织机构代码证</h4>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">组织机构代码</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="organizationInfo.code"
                                           placeholder="">
                                    <p>请按照组织机构代码证上的代码填写，不要省略“—”</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">组织机构代码证有效期</label>
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
                                    <label class="radio-inline date_long">
                                        <input type="radio" name="longTime" value="longTime"> 长期
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">组织机构代码证电子版</label>
                                <div class="col-sm-10">
                                    <ul class="real-imgs clearfix">
                                        <li v-for="img in organizationInfo.certificate_imgs">
                                            <img :src="img.content"/>
                                            <div class="cover">
                                                <i class="icon iconfont icon-icon_shanchu"
                                                   @click="deleteImg(organizationInfo.certificate_imgs,img)"> </i>
                                            </div>
                                        </li>
                                        <li v-if="organizationInfo.certificate_imgs.length<2">
                                            <div class="diamond-upload-file">
                                                <div class="icon iconfont icon-tupian"></div>
                                                <input type="file" accept="image/*"
                                                       @change="imageSelected($event,organizationInfo.certificate_imgs)">
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="p_first">复印件需加盖公司红章扫描上传，三证合一的此处请上传营业执照电子版</p>
                                    <p class="p_prompt">图片尺寸请确保800px*800px以上，文件大小1MB以内，支持JPG、GIF、PNG格式,最多可上传2张</p>
                                </div>
                            </div>
                        </div>
                        <div class="info_item form-horizontal taxation">
                            <h4>税务登记证</h4>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">纳税人类型</label>
                                <div class="col-sm-10">
                                    <select class="form-control address_select" v-model="taxationInfo.taxpayer_type">
                                        <option value="">自然人</option>
                                        <option value="">北京市</option>
                                        <option value="">北京市</option>
                                        <option value="">北京市</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">纳税人识别号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="taxationInfo.code" placeholder="">
                                    <p>请按照组织机构代码证上的代码填写，不要省略“—”</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">纳税类型税码</label>
                                <div class="col-sm-10">
                                    <select class="form-control address_select" v-model="taxationInfo.tax_paymentCode">
                                        <option value="">自然人</option>
                                        <option value="">北京市</option>
                                        <option value="">北京市</option>
                                        <option value="">北京市</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="legal_person_name" class="col-sm-2 control-label">税务登记电子版</label>
                                <div class="col-sm-10">
                                    <ul class="real-imgs clearfix">
                                        <li v-for="img in taxationInfo.certificate_imgs">
                                            <img :src="img.content"/>
                                            <div class="cover">
                                                <i class="icon iconfont icon-icon_shanchu"
                                                   @click="deleteImg(taxationInfo.certificate_imgs,img)"> </i>
                                            </div>
                                        </li>
                                        <li v-if="taxationInfo.certificate_imgs.length<1">
                                            <div class="diamond-upload-file">
                                                <div class="icon iconfont icon-tupian"></div>
                                                <input type="file" accept="image/*"
                                                       @change="imageSelected($event,taxationInfo.certificate_imgs)">
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="p_first">请同时上传国税、地税的税务登记证，两者缺一不可，复印件加盖公司红章，[国地税合一示例] [国地税非合一示例]
                                        如贵司所在地区已推行“三证合一”，此处请上传营业执照副本电子版。</p>
                                    <p class="p_prompt">图片尺寸请确保800px*800px以上，文件大小1MB以内，支持JPG、GIF、PNG格式,最多可上传1张</p>
                                </div>
                            </div>
                        </div>
                        <div class="info_item form-horizontal bank">
                            <h4>银行账号信息</h4>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">银行开户名</label>
                                <div class="col-sm-10">
                                    {{ lincenseInfo.company_name }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">对公结算银行账号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="bankInfo.public_account"
                                           placeholder="">
                                    <p>用于京东平台与开店公司间账务结算。</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">开户银行支行联行号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="bankInfo.branch_num"
                                           placeholder="">
                                    <p>请咨询开户行客服获取联行号，通过联行号进行查询选择。</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">开户银行支行名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" v-model="bankInfo.branch_name"
                                           placeholder="">
                                    <p>部分支行和上级分行共用联行号，确定选择联行号对应银行支行即可</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">开户银行支行所在地</label>
                                <div class="col-sm-10">
                                    <select class="form-control address_select" v-model="bankInfo.address">
                                        <option value="">自然人</option>
                                        <option value="">北京市</option>
                                        <option value="">北京市</option>
                                        <option value="">北京市</option>
                                    </select>
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
                </div>
                <div class="progress_05" v-if="temp===5">
                    <div class="info_item form-horizontal operating">
                        <h4>经营信息</h4>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公司类型</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select" v-model="operatingInfo.company_type">
                                    <option value="">请选择</option>
                                    <option value="">责任有限公司</option>
                                    <option value="">无限公司</option>
                                    <option value="">私企</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公司官网地址</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="operatingInfo.web_address"
                                       placeholder="">
                                <p>形如：http://www.xbmy.com/</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">最近一年销售额</label>
                            <div class="col-sm-10">
                                <div class="clearfix">
                                    <input type="text" class="form-control pull-left" v-model="operatingInfo.year_sales"
                                           pattern=""
                                           placeholder="">
                                    <span class="pull-left input_suffix">万元</span>
                                </div>
                                <p>仅输入不得超过9位数的正整数</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">同类电子商务网站经验</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" name="similar_experience"
                                           v-model="operatingInfo.similar_experience"
                                           value="have"> 有
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="similar_experience"
                                           v-model="operatingInfo.similar_experience" value="no">
                                    无
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="registration_num" class="col-sm-2 control-label">网店地址</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="operatingInfo.shop_address"
                                       placeholder="">
                                <p>形如：http://www.jd.com/，仅输入主要网店地址即可。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="legal_person_name" class="col-sm-2 control-label">网店运营人数</label>
                            <div class="col-sm-10 clearfix">
                                <input type="text" class="form-control pull-left" v-model="operatingInfo.person_num"
                                       placeholder="">
                                <span class="pull-left input_suffix">人</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">可售商品数量</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select" v-model="operatingInfo.available_num">
                                    <option value="">请选择</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                                <p>某一商品的多种颜色、尺码或包装形式不同时，按一件商品计算。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">预计平均客单价</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select" v-model="operatingInfo.average_price">
                                    <option value="">请选择</option>
                                    <option value="">1~100</option>
                                    <option value="">101_200</option>
                                    <option value="">201~300</option>
                                </select>
                                <p>用户购物时，单次购买的平均金额。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">仓库情况</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select" v-model="operatingInfo.warehouse_situation">
                                    <option value="">请选择</option>
                                    <option value="">1~100</option>
                                    <option value="">101_200</option>
                                    <option value="">201~300</option>
                                </select>
                                <p>用户购物时，单次购买的平均金额。。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">仓库地址</label>
                            <div class="col-sm-10">
                                <input type="text" v-model="operatingInfo.warehouse_address" class="form-control"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">常用物流公司</label>
                            <div class="col-sm-10">
                                <input maxlength="50" type="text" v-model="operatingInfo.used_logistics"
                                       class="form-control"
                                       placeholder="">
                                <p>可填写多个，用逗号分隔，如“申通，圆通”，最大50字。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ERP类型</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select" v-model="operatingInfo.erp_type">
                                    <option value="">请选择</option>
                                    <option value="">1~100</option>
                                    <option value="">101_200</option>
                                    <option value="">201~300</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="col-sm-2 control-label">代运营公司名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="operatingInfo.behalf_company_name"
                                       placeholder="">
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
                <div class="progress_06" v-if="temp===6">
                    <div class="info_item form-horizontal operating">
                        <h4>选择店铺类型</h4>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">店铺类型</label>
                            <div class="col-sm-10">
                                <select class="form-control address_select" v-model="shopInfo.shop_type.name">
                                    <option value="" v-for="option in shopInfo.shop_type.options">{{ option }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info_item form-horizontal operating">
                        <h4>选择可经营类目</h4>
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
                            <label for="company_name" class="col-sm-2 control-label">企业商号</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="shopInfo.business_firm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="col-sm-2 control-label">店铺名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="shopInfo.shop_account" placeholder="">
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
                <div class="progress_07 settled_audit_box" v-if="temp===7">
                    <div class="info_item form-horizontal">
                        <h4>入驻状态</h4>
                        <div class="row settled_audit">
                            <div class="col-sm-1 control-label">店铺类型</div>
                            <div class="col-sm-9">
                                等待审核人员进行审核。如对已提交信息有疑问，您可以自主撤销此次入驻申请。
                            </div>
                            <div class="col-sm-2 text-right">
                                <button class="btn btn-default prev-btn">撤销申请</button>
                            </div>
                        </div>
                        <div class="info_item table-responsive">
                            <h4>审核日志</h4>
                            <table class="table settled_audit">
                                <tr>
                                    <td class="text-center">入驻审核</td>
                                    <td class="text-center">操作时间</td>
                                    <td class="text-center">结果</td>
                                </tr>
                                <tr>
                                    <td class="text-center">商家提交申请</td>
                                    <td class="text-center">2017-03-10 14:11:20</td>
                                    <td class="text-center">656856546提交资质审核</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Datepicker from 'vuejs-datepicker';
    import Cascader from 'iview/src/components/cascader';

//    import img from '../assets/images/alipay.png';

    export default {
        data() {
            return {
                agree: false,
                temps: ['入驻须知', '公司信息', '店铺信息', '入驻审核'],
                temp: 1,
                data: [{
                    value: 'beijing',
                    label: '北京',
                    children: [
                        {
                            value: 'gugong',
                            label: '故宫',
                        },
                        {
                            value: 'tiantan',
                            label: '天坛',
                        },
                        {
                            value: 'wangfujing',
                            label: '王府井',
                        },
                    ],
                }, {
                    value: 'jiangsu',
                    label: '江苏',
                    children: [
                        {
                            value: 'nanjing',
                            label: '南京',
                            children: [
                                {
                                    value: 'fuzimiao',
                                    label: '夫子庙',
                                },
                            ],
                        },
                        {
                            value: 'suzhou',
                            label: '苏州',
                            children: [
                                {
                                    value: 'zhuozhengyuan',
                                    label: '拙政园',
                                },
                                {
                                    value: 'shizilin',
                                    label: '狮子林',
                                },
                            ],
                        },
                    ],
                }],
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
        components: {
            Datepicker,
            Cascader,
        },
    };
</script>