import SignUp from '../components/SignUp.vue'
import SignIn from '../components/SignIn.vue'

import Layout from '../components/Layout.vue'
import Home from '../components/Home.vue'
import MyOrder from '../components/MyOrder.vue'
import PersonnalCenter from '../components/PersonnalCenter.vue'
import CustomerServe from '../components/CustomerServe.vue'
import More from '../components/More.vue'
import Businessmen from '../components/Businessmen.vue'
import Offer from '../components/Offer.vue'
import Discount from '../components/Discount.vue'
import Spike from '../components/Spike.vue'
import Classification from '../components/Classification.vue'
import Search from '../components/Search.vue'
import ProductDetails from '../components/ProductDetails.vue'
import ShopHome from '../components/ShopHome.vue'
import Evaluation from '../components/Evaluation.vue'

import SubmitOrder from '../components/SubmitOrder.vue'
import OrderSuccess from '../components/OrderSuccess.vue'
import PayResult from '../components/PayResult.vue'
import CartSettlement from '../components/CartSettlement.vue'
import PaymentSuccess from '../components/PaymentSuccess.vue'

import AllOrder from '../components/personnal-center/AllOrder.vue'
import Coupon from '../components/personnal-center/Coupon.vue'
import Integral from '../components/personnal-center/Integral.vue'
import AccountSecurity from '../components/personnal-center/AccountSecurity.vue'
import ShippingAddress from '../components/personnal-center/ShippingAddress.vue'
import CollectStore from '../components/personnal-center/CollectStore.vue'

import ShoppingProcess from '../components/ShoppingProcess.vue'
import ShopProcess from '../components/ShoppingProcess/ShopProcess.vue'
import PayMethod from '../components/ShoppingProcess/PayMethod.vue'
import CommonProblem from '../components/ShoppingProcess/CommonProblem.vue'
import ReturnProcess from '../components/ShoppingProcess/ReturnProcess.vue'
import ReturnMoney from '../components/ShoppingProcess/ReturnMoney.vue'
import ContactService from '../components/ShoppingProcess/ContactService.vue'
import DeliveryMethod from '../components/ShoppingProcess/DeliveryMethod.vue'
import DeliverySevice from '../components/ShoppingProcess/DeliverySevice.vue'
import DeliveryTrack from '../components/ShoppingProcess/DeliveryTrack.vue'
import AboutUs from '../components/ShoppingProcess/AboutUs.vue'
import ContactUs from '../components/ShoppingProcess/ContactUs.vue'
import Cooperation from '../components/ShoppingProcess/Cooperation.vue'

export default [
    {
        path: '/signup',
        component: SignUp,
        name: 'signup',
    },
    {
        path: '/signin',
        component: SignIn,
        name: 'signin',
    },
    {
        path: '/',
        component: Layout,
        children: [
            {
                name: '',
                path: '',
                redirect: { name: 'home' },
            },
            {
                path: 'home',
                name: 'home',
                component: Home,
            },
            {
                path: 'order',
                name: 'order',
                component: MyOrder,
            },
            {
                path: 'personnal-center',
                name: 'personnal-center',
                component: PersonnalCenter,
                redirect: { name: 'all-order' },
                children: [
                    {
                        path: 'all-order',
                        name: 'all-order',
                        component: AllOrder,
                    },
                    {
                        path: 'coupon',
                        name: 'coupon',
                        component: Coupon,
                    },
                    {
                        path: 'integral',
                        name: 'integral',
                        component: Integral,
                    },
                    {
                        path: 'account-security',
                        name: 'account-security',
                        component: AccountSecurity,
                    },
                    {
                        path: 'shipping-address',
                        name: 'shipping-address',
                        component: ShippingAddress,
                    },
                    {
                        path: 'collect-store',
                        name: 'collect-store',
                        component: CollectStore,
                    }
                ]
            },
            {
                path: 'customer-serve',
                name: 'customer-serve',
                component: CustomerServe,
            },
            {
                path: 'more',
                name: 'more',
                component: More,
            },
            {
                path: 'businessmen',
                name: 'businessmen',
                component: Businessmen,
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
                path: 'classification',
                name: 'classification',
                component: Classification,
            },
            {
                path: 'search',
                name: 'search',
                component: Search,
            },
            {
                path: 'search/product-details',
                name: 'product-details',
                component: ProductDetails,
            },
            {
                path: 'shop-home',
                name: 'shop-home',
                component: ShopHome,
            },
            {
                path: 'submit-order',
                name: 'submit-order',
                component: SubmitOrder,
            },
            {
                path: 'cart',
                name: 'cart-settlement',
                component: CartSettlement,
            },
            {
                path: 'evaluation',
                name: 'evaluation',
                component: Evaluation,
            },
            {
                path: '/',
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
        ],
    },
    {
        path: 'order-success',
        name: 'order-success',
        component: OrderSuccess,
    },
    {
        path: '/pay-result',
        name: 'pay-result',
        component: PayResult,
    },
    {
        path: '/payment-success',
        name: 'payment-success',
        component: PaymentSuccess,
    },
];
