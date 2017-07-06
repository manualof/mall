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
                        <input type="text" class="signup-form-control" name="username" placeholder="请输入收货人姓名">
                    </div>
                    <div class="signup-form-group clearfix">
                        <label class="form-title">手机号码</label>
                        <input type="text" class="signup-form-control" name="telphone" placeholder="手机号码为必填项">
                    </div>
                    <div class="signup-form-group clearfix">
                        <label class="form-title">所在地区</label>
                        <div class="signup-form-control select-province">
                            <select>
                                <option value="0">请选择省份</option>
                            </select>
                            <select>
                                <option value="0">请选择市</option>
                            </select>
                            <select>
                                <option value="0">请选择区</option>
                            </select>
                        </div>
                    </div>
                    <div class="signup-form-group clearfix group-address">
                        <label class="form-title">详细地址</label>
                        <textarea type="text" class="signup-form-control details-address" name="address"
                                  placeholder="无需重复填写省市区，小于50个字"></textarea>
                    </div>
                    <div class="signup-form-group default-address clearfix">
                        <label class="form-title"></label>
                        <div class="check-box">
                            <span><input type="checkbox" class="input_check" id="check46"><label for="check46"> </label></span>
                        </div>
                        <span class="default">设为默认地址</span>
                    </div>
                </form>
            </div>
            <button type="button" class="order-btn" slot="save_address">保存地址</button>
        </modal>
    </div>
</template>

<script>
    import Modal from './Modal';

    export default {
        components: { Modal },
        data() {
            return {
                addressList: [
                    {
                        address: '陕西省  西安市 雁塔区 高新二路 36号 xx大厦',
                        isdefault: 1,
                        name: '王茂',
                        phone: 13000000000,
                    },
                    {
                        address: '陕西省  西安市 雁塔区 高新二路 36号 xx大厦',
                        isdefault: 1,
                        name: '王茂',
                        phone: 13000000000,
                    },
                    {
                        address: '陕西省  西安市 雁塔区 高新二路 36号 xx大厦',
                        isdefault: 1,
                        name: '王茂',
                        phone: 13000000000,
                    },
                ],
                modalTitle: '',
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
        },
    };
</script>