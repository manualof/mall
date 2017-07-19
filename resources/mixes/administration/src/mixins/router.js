import Configuration from '../pages/Configuration.vue';
import ConfigurationCreate from '../pages/ConfigurationCreate.vue';
import ConfigurationEdit from '../pages/ConfigurationEdit.vue';
import ConfigurationCategoryEdit from '../pages/ConfigurationCategoryEdit.vue';
import ConfigurationAdvertisement from '../pages/ConfigurationAdvertisement.vue';
import ConfigurationAdvertisementAdd from '../pages/ConfigurationAdvertisementAdd.vue';
import ConfigurationAdvertisementPosition from '../pages/ConfigurationAdvertisementPosition.vue';
import ConfigurationImage from '../pages/ConfigurationImage.vue';
import ConfigurationMessage from '../pages/ConfigurationMessage.vue';
import ConfigurationMessageEditor from '../pages/ConfigurationMessageEditor.vue';
import ConfigurationPay from '../pages/ConfigurationPay.vue';
import ConfigurationSearch from '../pages/ConfigurationSearch.vue';
import ConfigurationSearchEditor from '../pages/ConfigurationSearchEditor.vue';
import ConfigurationSearchAdd from '../pages/ConfigurationSearchAdd.vue';
import Dashboard from '../pages/Dashboard.vue';
import Layout from '../layouts/Layout.vue';
import Operation from '../pages/Operation.vue';
import OperationDelivery from '../pages/OperationDelivery.vue';
import OperationDeliveryLook from '../pages/OperationDeliveryLook.vue';
import OperationDeliveryEdit from '../pages/OperationDeliveryEdit.vue';
import OperationDeliveryAdd from '../pages/OperationDeliveryAdd.vue';
import OperationSettlement from '../pages/OperationSettlement.vue';
import Order from '../pages/Order.vue';
import OrderView from '../pages/OrderView.vue';
import OrderComplain from '../pages/OrderComplain.vue';
import OrderEvaluation from '../pages/OrderEvaluation.vue';
import OrderRefund from '../pages/OrderRefund.vue';
import OrderRefundAllLook from '../pages/OrderRefundAllLook.vue';
import OrderRefundAllHandel from '../pages/OrderRefundAllHandel.vue';
import OrderRefundProcess from '../pages/OrderRefundProcess.vue';
import OrderRefundReedit from '../pages/OrderRefundReedit.vue';
import OrderRefundCreate from '../pages/OrderRefundCreate.vue';
import OrderRejected from '../pages/OrderRejected.vue';
import OrderRejectedLook from '../pages/OrderRejectedLook.vue';
import OrderRejectedLookReject from '../pages/OrderRejectedLookReject.vue';
import OrderRejectedHandel from '../pages/OrderRejectedHandel.vue';
import OrderRejectedAllHandel from '../pages/OrderRejectedAllHandel.vue';
import Product from '../pages/Product.vue';
import ProductBrand from '../pages/ProductBrand.vue';
import ProductBrandCreate from '../pages/ProductBrandCreate.vue';
import ProductBrandEdit from '../pages/ProductBrandEdit.vue';
import ProductCategory from '../pages/ProductCategory.vue';
import ProductCategoryEdit from '../pages/ProductCategoryEdit.vue';
import ProductCategoryCreate from '../pages/ProductCategoryCreate.vue';
import ProductCategoryAddUnder from '../pages/ProductCategoryAddUnder.vue';
import ProductCategoryLook from '../pages/ProductCategoryLook.vue';
import ProductCategoryLookAdd from '../pages/ProductCategoryLookAdd.vue';
import ProductCategoryLookAddUnder from '../pages/ProductCategoryLookAddUnder.vue';
import ProductCategoryLookEdit from '../pages/ProductCategoryLookEdit.vue';
import ProductCategoryLookUnder from '../pages/ProductCategoryLookUnder.vue';
import ProductCategoryLookUnderAdd from '../pages/ProductCategoryLookUnderAdd.vue';
import ProductCategoryLookUnderEdit from '../pages/ProductCategoryLookUnderEdit.vue';
import ProductLibrary from '../pages/ProductLibrary.vue';
import ProductLibraryEdit from '../pages/ProductLibraryEdit.vue';
import ProductLibraryCreate from '../pages/ProductLibraryCreate.vue';
import ProductPicture from '../pages/ProductPicture.vue';
import ProductPictureLook from '../pages/ProductPictureLook.vue';
import ProductPictureLookAll from '../pages/ProductPictureLookAll.vue';
import ProductStandard from '../pages/ProductStandard.vue';
import ProductStandardCreate from '../pages/ProductStandardCreate.vue';
import ProductStandardEdit from '../pages/ProductStandardEdit.vue';
import ProductType from '../pages/ProductType.vue';
import ProductTypeCreate from '../pages/ProductTypeCreate.vue';
import ProductTypeEdit from '../pages/ProductTypeEdit.vue';
import Statistics from '../pages/Statistics.vue';
import StatisticsAftersales from '../pages/StatisticsAftersales.vue';
import StatisticsAnalysis from '../pages/StatisticsAnalysis.vue';
import StatisticsGoods from '../pages/StatisticsGoods.vue';
import StatisticsMember from '../pages/StatisticsMember.vue';
import StatisticsSales from '../pages/StatisticsSales.vue';
import StatisticsStore from '../pages/StatisticsStore.vue';
import Store from '../pages/Store.vue';
import StoreEdit from '../pages/StoreEdit.vue';
import StoreLook from '../pages/StoreLook.vue';
import StoreLookApplication from '../pages/StoreLookApplication.vue';
import StoreCategory from '../pages/StoreCategory.vue';
import StoreCategorySet from '../pages/StoreCategorySet.vue';
import StoreCategoryCreate from '../pages/StoreCategoryCreate.vue';
import StoreDynamics from '../pages/StoreDynamics.vue';
import SalesFullDown from '../pages/SalesFullDown.vue';
import SalesActive from '../pages/SalesActive.vue';
import StoreLevel from '../pages/StoreGrade.vue';
import StoreLevelCreate from '../pages/StoreGradeCreate.vue';
import StoreLevelEdit from '../pages/StoreGradeEdit.vue';
import SalesSpikes from '../pages/SalesSpikes.vue';
import SalesSpikesTime from '../pages/SalesSpikesTime.vue';
import SalesSpikesTimeEdit from '../pages/SalesSpikesTimeEdit.vue';

export default function (injection) {
    injection.useModuleRoute([
        {
            children: [
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Dashboard,
                    path: '/',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Configuration,
                    path: 'configuration',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationCreate,
                    path: 'configuration/create',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationEdit,
                    path: 'configuration/edit/main',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationCategoryEdit,
                    path: 'configuration/category/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationAdvertisement,
                    path: 'configuration/advertisement',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationAdvertisementAdd,
                    path: 'configuration/advertisement/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationAdvertisementPosition,
                    path: 'configuration/advertisement/position',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationImage,
                    path: 'configuration/image',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationMessage,
                    path: 'configuration/message',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationPay,
                    path: 'configuration/pay',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationMessageEditor,
                    path: 'configuration/message/editor',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationSearch,
                    path: 'configuration/search',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationSearchAdd,
                    path: 'configuration/search/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ConfigurationSearchEditor,
                    path: 'configuration/search/editor',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Product,
                    path: 'goods',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductLibrary,
                    path: 'goods/library',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductLibraryCreate,
                    path: 'goods/library/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductLibraryEdit,
                    path: 'goods/library/edit/:id',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategory,
                    path: 'goods/category',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryEdit,
                    path: 'goods/category/edit/:id',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryCreate,
                    path: 'goods/category/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryAddUnder,
                    path: 'goods/category/add/under',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryLook,
                    path: 'goods/category/look',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryLookAdd,
                    path: 'goods/category/look/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryLookAddUnder,
                    path: 'goods/category/look/add/under',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryLookEdit,
                    path: 'goods/category/look/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryLookUnder,
                    path: 'goods/category/look/under',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryLookUnderAdd,
                    path: 'goods/category/look/under/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductCategoryLookUnderEdit,
                    path: 'goods/category/look/under/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductBrand,
                    path: 'goods/brand',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductBrandCreate,
                    path: 'goods/brand/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductBrandEdit,
                    path: 'goods/brand/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductType,
                    path: 'goods/type',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductTypeEdit,
                    path: 'goods/type/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductTypeCreate,
                    path: 'goods/type/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductStandard,
                    path: 'goods/standard',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductStandardCreate,
                    path: 'goods/standard/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductStandardEdit,
                    path: 'goods/standard/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductPicture,
                    path: 'goods/picture',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductPictureLook,
                    path: 'goods/picture/look',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: ProductPictureLookAll,
                    path: 'goods/picture/look/all',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Order,
                    path: 'order',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderView,
                    path: 'order/view',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderComplain,
                    path: 'order/complain',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderEvaluation,
                    path: 'order/evaluation',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRefund,
                    path: 'order/refund',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRefundAllLook,
                    path: 'order/refund/all/look',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRefundAllHandel,
                    path: 'order/refund/all/handel',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRefundProcess,
                    path: 'order/refund/process',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRefundCreate,
                    path: 'order/refund/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRefundReedit,
                    path: 'order/refund/reedit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRejected,
                    path: 'order/rejected',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRejectedLook,
                    path: 'order/rejected/look',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRejectedLookReject,
                    path: 'order/rejected/look/reject',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRejectedHandel,
                    path: 'order/rejected/handel',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OrderRejectedAllHandel,
                    path: 'order/rejected/all/handel',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Operation,
                    path: 'operation',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OperationSettlement,
                    path: 'operation/settlement',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OperationDelivery,
                    path: 'operation/delivery',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OperationDeliveryAdd,
                    path: 'operation/delivery/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OperationDeliveryLook,
                    path: 'operation/delivery/look',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: OperationDeliveryEdit,
                    path: 'operation/delivery/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Statistics,
                    path: 'statistics',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StatisticsAftersales,
                    path: 'statistics/aftersales',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StatisticsAnalysis,
                    path: 'statistics/analysis',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StatisticsGoods,
                    path: 'statistics/goods',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StatisticsMember,
                    path: 'statistics/member',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StatisticsSales,
                    path: 'statistics/sales',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StatisticsStore,
                    path: 'statistics/store',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: Store,
                    path: 'store',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreLook,
                    path: 'store/look',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreLookApplication,
                    path: 'store/look/application',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreEdit,
                    path: 'store/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreCategory,
                    path: 'store/category',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreCategorySet,
                    path: 'store/category/set',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreCategoryCreate,
                    path: 'store/category/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreDynamics,
                    path: 'store/dynamics',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreLevel,
                    path: 'store/level',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreLevelCreate,
                    path: 'store/level/add',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: StoreLevelEdit,
                    path: 'store/level/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: SalesSpikes,
                    path: 'sales/spikes',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: SalesSpikesTime,
                    path: 'sales/spikes/time',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: SalesSpikesTimeEdit,
                    path: 'sales/spikes/time/edit',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: SalesActive,
                    path: 'sales/active',
                },
                {
                    beforeEnter: injection.middleware.requireAuth,
                    component: SalesFullDown,
                    path: 'sales/fulldown',
                },
            ],
            component: Layout,
            path: '/mall',
        },
    ]);
}