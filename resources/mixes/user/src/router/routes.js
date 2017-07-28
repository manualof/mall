import Layout from '../layouts/Layout.vue';
import Store from '../pages/Store.vue';
import StoreBusinessmen from '../pages/StoreBusinessmen.vue';
import UserLayout from '../layouts/UserLayout.vue';
import UserOrder from '../pages/UserOrder.vue';
import UserCoupon from '../pages/UserCoupon.vue';
import UserIntegral from '../pages/UserIntegral.vue';
import UserSecurity from '../pages/UserSecurity.vue';
import UserAddress from '../pages/UserAddress.vue';
import UserFollow from '../pages/UserFollow.vue';
import SelaesReturn from '../pages/SelaesReturn.vue';
import UserFootprint from '../pages/UserFootprint.vue';
import UserAccount from '../pages/UserAccount.vue';
import UserCollect from '../pages/UserCollect.vue';
import UserNotice from '../pages/UserNotice.vue';

import SignUp from '../pages/SignUp.vue';
import SignIn from '../pages/SignIn.vue';

import Home from '../pages/Home.vue';
import MyOrder from '../pages/MyOrder.vue';
import Help from '../pages/Help.vue';
import AfterSale from '../pages/AfterSale.vue';
import CustomerServe from '../pages/CustomerServe.vue';
import More from '../pages/More.vue';
import Offer from '../pages/Offer.vue';
import Discount from '../pages/Discount.vue';
import Spike from '../pages/Spike.vue';
import Classification from '../pages/Classification.vue';
import Search from '../pages/Search.vue';
import ProductDetails from '../pages/ProductDetails.vue';
import Evaluation from '../pages/Evaluation.vue';

import SubmitOrder from '../pages/SubmitOrder.vue';
import OrderSuccess from '../pages/OrderSuccess.vue';
import PayResult from '../pages/PayResult.vue';
import CartSettlement from '../pages/CartSettlement.vue';
import PaymentSuccess from '../pages/PaymentSuccess.vue';
import ScanPay from '../pages/ScanPay.vue';

import ShoppingProcess from '../pages/ShoppingProcess/ShoppingProcess.vue';
import ShopProcess from '../pages/ShoppingProcess/ShopProcess.vue';
import PayMethod from '../pages/ShoppingProcess/PayMethod.vue';
import CommonProblem from '../pages/ShoppingProcess/CommonProblem.vue';
import ReturnProcess from '../pages/ShoppingProcess/ReturnProcess.vue';
import ReturnMoney from '../pages/ShoppingProcess/ReturnMoney.vue';
import ContactService from '../pages/ShoppingProcess/ContactService.vue';
import DeliveryMethod from '../pages/ShoppingProcess/DeliveryMethod.vue';
import DeliverySevice from '../pages/ShoppingProcess/DeliverySevice.vue';
import DeliveryTrack from '../pages/ShoppingProcess/DeliveryTrack.vue';
import AboutUs from '../pages/ShoppingProcess/AboutUs.vue';
import ContactUs from '../pages/ShoppingProcess/ContactUs.vue';
import Cooperation from '../pages/ShoppingProcess/Cooperation.vue';

import Refund from '../pages/Refund.vue';
import ReturnOfGoods from '../pages/ReturnOfGoods.vue';

export default [
    {
        path: '/mall',
        component: Layout,
        children: [

            {
                name: 'home',
                path: '/mall',
                component: Home,
            },
            {
                path: 'signup',
                component: SignUp,
                name: 'signup',
            },
            {
                path: 'signin',
                component: SignIn,
                name: 'signin',
            },
            {
                path: 'order',
                name: 'order',
                component: MyOrder,
            },
            {
                path: 'scan-pay',
                name: 'scan-pay',
                component: ScanPay,
            },
            {
                path: 'customer-serve',
                name: 'customer-serve',
                component: CustomerServe,
            },
            {
                path: 'help',
                name: 'help',
                component: Help,
            },
            {
                path: 'after-sale',
                name: 'after-sale',
                component: AfterSale,
            },
            {
                path: 'more',
                name: 'more',
                component: More,
            },
            {
                path: 'offer',
                name: 'offer',
                component: Offer,
            },
            {
                path: 'discount',
                name: 'discount',
                component: Discount,
            },
            {
                path: 'spike',
                name: 'spike',
                component: Spike,
            },
            {
                path: 'refund',
                name: 'refund',
                component: Refund,
            },
            {
                path: 'return-of-goods',
                name: 'return-of-goods',
                component: ReturnOfGoods,
            },
            {
                path: 'classification',
                name: 'classification',
                component: Classification,
            },
            {
                path: 'search',
                name: 'search',
                component: Search,
                children: [
                    {
                        path: 'product-details',
                        name: 'product-details',
                        component: ProductDetails,
                        children: [
                            {
                                path: 'submit-order',
                                name: 'submit-order',
                                component: SubmitOrder,
                            },
                        ],
                    },
                ],
            },
            {
                path: 'cart-settlement',
                name: 'cart-settlement',
                component: CartSettlement,
            },
            {
                path: 'evaluation',
                name: 'evaluation',
                component: Evaluation,
            },
            {
                path: 'shop-process',
                component: ShoppingProcess,
                redirect: { name: 'shop-process' },
                children: [
                    {
                        path: 'shop-process',
                        name: 'shop-process',
                        component: ShopProcess,
                    },
                    {
                        path: 'pay-method',
                        name: 'pay-method',
                        component: PayMethod,
                    },
                    {
                        path: 'common-problem',
                        name: 'common-problem',
                        component: CommonProblem,
                    },
                    {
                        path: 'return-process',
                        name: 'return-process',
                        component: ReturnProcess,
                    },
                    {
                        path: 'return-money',
                        name: 'return-money',
                        component: ReturnMoney,
                    },
                    {
                        path: 'contact-service',
                        name: 'contact-service',
                        component: ContactService,
                    },
                    {
                        path: 'delivery-method',
                        name: 'delivery-method',
                        component: DeliveryMethod,
                    },
                    {
                        path: 'delivery-sevice',
                        name: 'delivery-sevice',
                        component: DeliverySevice,
                    },
                    {
                        path: 'delivery-track',
                        name: 'delivery-track',
                        component: DeliveryTrack,
                    },
                    {
                        path: 'about-us',
                        name: 'about-us',
                        component: AboutUs,
                    },
                    {
                        path: 'contact-us',
                        name: 'contact-us',
                        component: ContactUs,
                    },
                    {
                        path: 'cooperation',
                        name: 'cooperation',
                        component: Cooperation,
                    },
                ],
            },
            {
                path: 'order-success',
                name: 'order-success',
                component: OrderSuccess,
            },
            {
                path: 'pay-result',
                name: 'pay-result',
                component: PayResult,
            },
            {
                path: 'payment-success',
                name: 'payment-success',
                component: PaymentSuccess,
            },
            {
                path: 'store',
                redirect: {
                    name: 'businessmen',
                },
                children: [
                    {
                        path: 'businessmen',
                        name: 'businessmen',
                        component: StoreBusinessmen,
                    },
                    {
                        path: 'shop-home',
                        name: 'shop-home',
                        component: Store,
                    },
                ],
            },
            {
                path: 'user',
                name: 'personnal-center',
                component: UserLayout,
                redirect: {
                    name: 'order',
                },
                children: [
                    {
                        component: UserOrder,
                        name: 'order',
                        path: 'order',
                    },
                    {
                        component: UserCoupon,
                        name: 'coupon',
                        path: 'coupon',
                    },
                    {
                        component: UserIntegral,
                        name: 'integral',
                        path: 'integral',
                    },
                    {
                        component: UserSecurity,
                        name: 'account-security',
                        path: 'account-security',
                    },
                    {
                        component: UserAddress,
                        name: 'address',
                        path: 'address',
                    },
                    {
                        component: UserFollow,
                        name: 'collect-store',
                        path: 'collect-store',
                    },
                    {
                        component: SelaesReturn,
                        name: 'selaes-return',
                        path: 'selaes-return',
                    },
                    {
                        component: UserFootprint,
                        name: 'footprint',
                        path: 'footprint',
                    },
                    {
                        component: UserAccount,
                        name: 'my-account',
                        path: 'my-account',
                    },
                    {
                        component: UserCollect,
                        name: 'my-collect',
                        path: 'my-collect',
                    },
                    {
                        component: UserNotice,
                        name: 'notice',
                        path: 'notice',
                    },
                ],
            },
        ],
    },
];
