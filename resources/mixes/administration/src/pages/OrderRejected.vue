<script>
    import injection from '../helpers/injection';

    export default {
        beforeRouteEnter(to, from, next) {
            next(() => {
                injection.sidebar.active('mall');
            });
        },
        data() {
            return {
                allRecordsColumns: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'memberID',
                        title: '退单编号',
                        width: 190,
                    },
                    {
                        align: 'center',
                        key: 'memberAccount',
                        title: '退款金额',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'applicationStatus',
                        title: '申请原因',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'shopLength',
                        title: '申请图片',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'contactPhone',
                        title: '申请时间',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'contactEmail',
                        title: '涉及商品',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyName',
                        title: '退货数量',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyAddress',
                        title: '商品ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '订单编号',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '商家处理',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '商家处理备注',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '平台处理',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '平台处理备注',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '买家ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '商家ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        title: '操作',
                        width: 140,
                        render() {
                            return '<i-button @click.native="recordLook" type="ghost" size="small">查看</i-button>';
                        },
                    },
                ],
                allRecordsData: [
                    {
                        applicationStatus: '等待审核',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                        shopLength: '3年',
                    },
                    {
                        applicationStatus: '等待审核',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                        shopLength: '3年',
                    },
                    {
                        applicationStatus: '等待审核',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                        shopLength: '3年',
                    },
                    {
                        applicationStatus: '等待审核',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                        shopLength: '3年',
                    },
                ],
                pendingColumns: [
                    {
                        align: 'center',
                        fixed: 'left',
                        type: 'selection',
                        width: 60,
                    },
                    {
                        align: 'center',
                        key: 'memberID',
                        title: '退单编号',
                        width: 190,
                    },
                    {
                        align: 'center',
                        key: 'memberAccount',
                        title: '退款金额',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'applicationStatus',
                        title: '申请原因',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'shopLength',
                        title: '申请图片',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'contactName',
                        title: '申请原因',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'contactPhone',
                        title: '申请时间',
                        width: 100,
                    },
                    {
                        align: 'center',
                        key: 'contactEmail',
                        title: '涉及商品',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyName',
                        title: '退货数量',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyAddress',
                        title: '商品ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '订单编号',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '商家处理时间',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '商家处理备注',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '买家ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        key: 'companyPhone',
                        title: '商家ID',
                        width: 150,
                    },
                    {
                        align: 'center',
                        fixed: 'right',
                        key: 'action',
                        title: '操作',
                        width: 140,
                        render() {
                            return '<i-button type="ghost" size="small" @click.native="recordHandel">处理</i-button>';
                        },
                    },
                ],
                pendingData: [
                    {
                        applicationStatus: '等待审核',
                        shopLength: '3年',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                    },
                    {
                        applicationStatus: '等待审核',
                        shopLength: '3年',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                    },
                    {
                        applicationStatus: '等待审核',
                        shopLength: '3年',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                    },
                    {
                        applicationStatus: '等待审核',
                        shopLength: '3年',
                        contactName: '王',
                        contactPhone: '15434354534',
                        contactEmail: '105454354@qq.com',
                        companyName: '本初网络',
                        companyAddress: '陕西西安',
                        companyPhone: '029-5554544',
                        memberID: '65454654546',
                        memberAccount: '465465445',
                    },
                ],
                searchCategory: '',
                searchWord: '',
                searchList: [
                    {
                        label: '店铺名称',
                        value: '店铺名称',
                    },
                    {
                        label: '商品名称',
                        value: '商品名称',
                    },
                    {
                        label: '商品分类',
                        value: '商品分类',
                    },
                ],
                self: this,
            };
        },
        methods: {
            exportData() {
                this.$refs.pendingTable.exportCsv({
                    filename: '退货管理数据',
                });
            },
            remove(index) {
                this.pendingData.splice(index, 1);
            },
            recordHandel() {
                const self = this;
                self.$router.push({
                    path: 'rejected/handel',
                });
            },
            recordLook() {
                const self = this;
                self.$router.push({
                    path: 'rejected/look',
                });
            },
        },
    };
</script>
<template>
  <div class="mall-wrap">
      <div class="order-rejected">
          <tabs value="name1">
              <tab-pane label="待处理" name="name1">
                  <card :bordered="false">
                     <div class="prompt-box">
                         <p>提示</p>
                         <p>如果当前时间超过店铺有效期或店铺处于关闭状态，前台将不能继续浏览该店铺，但是店主仍然可以编辑该店铺</p>
                     </div>
                     <div class="store-body">
                         <div class="store-body-header">
                             <i-button class="export-btn" type="ghost" @click="exportData">导出数据</i-button>
                             <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                             <div class="store-body-header-right">
                                 <i-input v-model="searchWord">
                                     <i-select v-model="searchCategory" slot="prepend" style="width: 100px">
                                         <i-option v-for="item in searchList"
                                                   :key="item">
                                             :value="item.value"{{ item.label }}</i-option>
                                     </i-select>
                                     <i-button slot="append" type="primary">搜索</i-button>
                                 </i-input>
                             </div>
                         </div>
                         <i-table class="shop-table" :columns="pendingColumns" :data="pendingData"
                                  :context="self" highlight-row ref="pendingTable"></i-table>
                     </div>
                     <div class="page">
                         <page :total="100" show-elevator></page>
                     </div>
                  </card>
              </tab-pane>
              <tab-pane label="所有记录" name="name2">
                  <card :bordered="false">
                      <div class="store-body">
                          <div class="store-body-header">
                              <i-button class="export-btn" type="ghost"  @click="exportData" >导出数据</i-button>
                              <i-button type="text" icon="android-sync" class="refresh">刷新</i-button>
                              <div class="store-body-header-right">
                                  <i-input v-model="searchWord">
                                      <i-select v-model="searchCategory" slot="prepend" style="width: 100px">
                                          <i-option v-for="item in searchList" :value="item.value"
                                                    :key="item">{{ item.label }}</i-option>
                                      </i-select>
                                      <i-button slot="append" type="primary">搜索</i-button>
                                  </i-input>
                              </div>
                          </div>
                          <i-table  ref="pendingTable"  highlight-row class="shop-table" :columns="allRecordsColumns"
                                    :context="self" :data="allRecordsData"></i-table>
                          <div class="page">
                              <page :total="100" show-elevator></page>
                          </div>
                      </div>
                  </card>
              </tab-pane>
          </tabs>
    </div>
  </div>
</template>