import SignUp from '../components/SignUp';
import SignIn from '../components/SignIn';

import Layout from '../components/Layout';
import Home from '../components/Home';
import MyOrder from '../components/MyOrder';
import PersonnalCenter from '../components/PersonnalCenter';
import CustomerServe from '../components/CustomerServe';
import More from '../components/More';
import Businessmen from '../components/Businessmen';
import Offer from '../components/Offer';
import Discount from '../components/Discount';
import Spike from '../components/Spike';
import Classification from '../components/Classification';
import Search from '../components/Search';
import ProductDetails from '../components/ProductDetails';
import ShopHome from '../components/ShopHome';
import Evaluation from '../components/Evaluation';

import SubmitOrder from '../components/SubmitOrder';
import OrderSuccess from '../components/OrderSuccess';
import PayResult from '../components/PayResult';
import CartSettlement from '../components/CartSettlement';
import PaymentSuccess from '../components/PaymentSuccess';

import AllOrder from '../components/personnal-center/AllOrder';
import Coupon from '../components/personnal-center/Coupon';
import Integral from '../components/personnal-center/Integral';
import AccountSecurity from '../components/personnal-center/AccountSecurity';
import ShippingAddress from '../components/personnal-center/ShippingAddress';
import CollectStore from '../components/personnal-center/CollectStore';
import SelaesReturn from '../components/personnal-center/SelaesReturn';
import Footprint from '../components/personnal-center/Footprint';
import MyAccount from '../components/personnal-center/MyAccount';

import ShoppingProcess from '../components/ShoppingProcess';
import ShopProcess from '../components/ShoppingProcess/ShopProcess';
import PayMethod from '../components/ShoppingProcess/PayMethod';
import CommonProblem from '../components/ShoppingProcess/CommonProblem';
import ReturnProcess from '../components/ShoppingProcess/ReturnProcess';
import ReturnMoney from '../components/ShoppingProcess/ReturnMoney';
import ContactService from '../components/ShoppingProcess/ContactService';
import DeliveryMethod from '../components/ShoppingProcess/DeliveryMethod';
import DeliverySevice from '../components/ShoppingProcess/DeliverySevice';
import DeliveryTrack from '../components/ShoppingProcess/DeliveryTrack';
import AboutUs from '../components/ShoppingProcess/AboutUs';
import ContactUs from '../components/ShoppingProcess/ContactUs';
import Cooperation from '../components/ShoppingProcess/Cooperation';

import Refund from '../components/Refund';
import ReturnOfGoods from '../components/ReturnOfGoods';

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
                    },
                    {
                        path: 'selaes-return',
                        name: 'selaes-return',
                        component: SelaesReturn,
                    },
                    {
                        path: 'footprint',
                        name: 'footprint',
                        component: Footprint,
                    },
                    {
                        path: 'my-account',
                        name: 'my-account',
                        component: MyAccount,
                    },
                ],
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
        path: '/order-success',
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
