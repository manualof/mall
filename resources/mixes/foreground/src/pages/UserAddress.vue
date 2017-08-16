
<script>
    import Modal from '../components/Modal.vue';

    export default {
        components: {
            Modal,
        },
        data() {
            const reg = /^1[3|4|5|7|8][0-9]\d{8}$/;
            const validatorPhone = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('手机号不能为空'));
                } else if (!reg.test(value)) {
                    callback(new Error('请输入正确手机号'));
                } else {
                    callback();
                }
            };
            return {
                addressData: {
                    address: '',
                    area: '',
                    city: '',
                    isdefault: '',
                    phone: '',
                    province: '',
                    username: '',
                },
                addressRule: {
                    address: [
                        {
                            message: '请选择地区',
                            required: true,
                            type: 'array',
                            trigger: 'change',
                        },
                    ],
                    area: [
                        {
                            message: '请选择地区',
                            required: true,
                            type: 'array',
                            trigger: 'change',
                        },
                    ],
                    city: [
                        {
                            message: '请选择城市',
                            required: true,
                            type: 'array',
                            trigger: 'change',
                        },
                    ],
                    isdefault: [
                        {
                            message: '请选择地区',
                            required: true,
                            type: 'bealoon',
                        },
                    ],
                    phone: [
                        {
                            required: true,
                            trigger: 'blur',
                            type: 'number',
                            validator: validatorPhone,
                        },
                    ],
                    province: [
                        {
                            required: true,
                            message: '请选择省',
                        },
                    ],
                    username: [
                        {
                            required: true,
                            message: '请填写收货人',
                            trigger: 'blur',
                        },
                    ],
                },
                addressList: [
                    {
                        address: '陕西省  西安市 雁塔区 高新二路 36号 xx大厦',
                        isdefault: 1,
                        name: '王茂',
                        phone: 13000000000,
                    },
                    {
                        address: '陕西省  西安市 雁塔区 高新二路 36号 xx大厦',
                        isdefault: 0,
                        name: '王茂',
                        phone: 13000000000,
                    },
                    {
                        address: '陕西省  西安市 雁塔区 高新二路 36号 xx大厦',
                        isdefault: 0,
                        name: '王茂',
                        phone: 13000000000,
                    },
                ],
                areaList: [
                    {
                        id: 1,
                        name: '高新区',
                    },
                    {
                        id: 2,
                        name: '雁塔区',
                    },
                ],
                cityList: [
                    {
                        id: 1,
                        name: '西安市',
                    },
                    {
                        id: 2,
                        name: '咸阳市',
                    },
                ],
                modalTitle: '',
                provinceList: [
                    {
                        id: 1,
                        name: '陕西省',
                    },
                    {
                        id: 2,
                        name: '陕西省',
                    },
                ],
                status: 0,
            };
        },
        methods: {
            addNewAddress() {
                this.$refs.modal.open();
                this.modalTitle = '新增收货地址';
            },
            deleteAddress(item) {
                const index = this.addressList.indexOf(item);
                if (index !== -1) {
                    this.addressList.splice(index, 1);
                }
            },
            editModal() {
                this.$refs.modal.open();
                this.modalTitle = '编辑收货地址';
            },
            settingAddress(item) {
                this.addressList.forEach(index => {
                    index.isdefault = 0;
                });
                item.isdefault = 1;
            },
            submit() {
                const self = this;
                window.console.log(self.form);
            },
        },
    };
</script>
<template>
    <div class="shipping-address">
        <div class="address-title clearfix">
            <h4>我的地址</h4>
            <button class="add-address" @click="addNewAddress">+新增收货地址</button>
        </div>
        <table width="100%" v-for="(item, index) in addressList">
            <colgroup>
                <col width="108px">
                <col width="390px">
                <col width="207px">
                <col width="144px">
                <col width="141px">
            </colgroup>
            <tbody>
            <tr>
                <td>{{ item.name }}</td>
                <td>{{ item.address }}</td>
                <td>{{ item.phone }}</td>
                <td class="td-edit">
                    <span data-toggle="modal" @click="editModal">编辑</span><span class="line">|</span>
                    <span @click="deleteAddress(item)">删除</span></td>
                <td class="td-address" v-if="item.isdefault == 1">默认地址</td>
                <td class="address" @click="settingAddress(item)" v-if="item.isdefault == 0">设为默认地址</td>
            </tr>
            </tbody>
        </table>
        <modal ref="modal">
            <div slot="title">
                <h4 class="modal-title" v-text="modalTitle"></h4>
            </div>
            <div slot="body">
                <form class="signup-form">
                    <div class="signup-form-group clearfix">
                        <label class="form-title">收货人姓名</label>
                        <input type="text"
                               class="signup-form-control form-control"
                               name="username"
                               placeholder="请输入收货人姓名"
                               v-model="addressData.username">
                    </div>
                    <div class="signup-form-group clearfix">
                        <label class="form-title">手机号码</label>
                        <input type="text"
                               class="signup-form-control form-control"
                               placeholder="手机号码为必填项"
                               v-model="addressData.phone">
                    </div>
                    <div class="signup-form-group clearfix">
                        <label class="form-title">所在地区</label>
                        <div class="select-province clearfix">
                            <i-select v-model="addressData.province"  style="width:150px">
                                <i-option v-for="province in provinceList"
                                        :value="province.name"
                                        :key="province.id">
                                    {{ province.name }}
                                </i-option>
                            </i-select>
                            <i-select v-model="addressData.city"  style="width:150px">
                                <i-option v-for="city in cityList"
                                        :value="city.name"
                                        :key="city.id">
                                    {{ city.name }}
                                </i-option>
                            </i-select>
                            <i-select v-model="addressData.area"  style="width:150px">
                                <i-option v-for="area in areaList"
                                        :value="area.name"
                                        :key="area.id">
                                    {{ area.name }}
                                </i-option>
                            </i-select>
                        </div>
                    </div>
                    <div class="signup-form-group clearfix group-address">
                        <label class="form-title">详细地址</label>
                        <textarea class="signup-form-control details-address form-control"
                                  name="address"
                                  placeholder="无需重复填写省市区，小于50个字"
                                  type="text"
                                  v-model="addressData.address">
                        </textarea>
                    </div>
                    <div class="signup-form-group default-address clearfix">
                        <label class="form-title"></label>
                        <div class="check-box">
                            <span><input type="checkbox" class="input_check" v-model="addressData.default"><label></label></span>
                        </div>
                        <span class="default">设为默认地址</span>
                    </div>
                </form>
                <i-form :model="addressData" :rules="addressRule">
                    <form-item label="收货人姓名" prop="username">
                        <i-input v-model="addressData.username" placeholder="请输入收货人姓名"></i-input>
                    </form-item>
                    <form-item label="手机号码" prop="phone">
                        <i-input v-model="addressData.phone" placeholder="手机号码为必填项"></i-input>
                    </form-item>
                    <form-item label="所在地区" prop="username">
                        <i-row>
                            <i-col span="7">
                                <i-select v-model="addressData.province"  style="width:150px">
                                    <i-option v-for="province in provinceList"
                                              :value="province.name"
                                              :key="province.id">
                                        {{ province.name }}
                                    </i-option>
                                </i-select>
                            </i-col>
                            <i-col span="7">
                                <i-select v-model="addressData.province"  style="width:150px">
                                    <i-select v-model="addressData.city"  style="width:150px">
                                        <i-option v-for="city in cityList"
                                                  :value="city.name"
                                                  :key="city.id">
                                            {{ city.name }}
                                        </i-option>
                                    </i-select>
                                </i-select>
                            </i-col>
                            <i-col span="7">
                                <i-select v-model="addressData.area"  style="width:150px">
                                    <i-option v-for="area in areaList"
                                              :value="area.name"
                                              :key="area.id">
                                        {{ area.name }}
                                    </i-option>
                                </i-select>
                            </i-col>
                        </i-row>
                        <i-input v-model="addressData.username" placeholder="请输入收货人姓名"></i-input>
                    </form-item>
                    <form-item label="手机号码" prop="phone">
                        <i-input v-model="addressData.phone" placeholder="手机号码为必填项"></i-input>
                    </form-item>
                </i-form>
            </div>
            <button type="button" class="order-btn" slot="save_address" @click="submit">保存地址</button>
        </modal>
    </div>
</template>