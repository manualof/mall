import SignUp from '../components/SignUp';
import SignIn from '../components/SignIn';

import Layout from '../components/Layout';
import Home from '../components/Home';
import MyOrder from '../components/MyOrder';
import CustomerServe from '../components/CustomerServe';
import More from '../components/More';
import Offer from '../components/Offer';
import Discount from '../components/Discount';
import Spike from '../components/Spike';
import Classification from '../components/Classification';
import Search from '../components/Search';
import ProductDetails from '../components/ProductDetails';
import Evaluation from '../components/Evaluation';

import SubmitOrder from '../components/SubmitOrder';
import OrderSuccess from '../components/OrderSuccess';
import PayResult from '../components/PayResult';
import CartSettlement from '../components/CartSettlement';
import PaymentSuccess from '../components/PaymentSuccess';
import ScanPay from '../components/ScanPay';

import ShoppingProcess from '../components/ShoppingProcess';
import ShopProcess from '../assets/less/ShoppingProcess/ShopProcess';
import PayMethod from '../assets/less/ShoppingProcess/PayMethod';
import CommonProblem from '../assets/less/ShoppingProcess/CommonProblem';
import ReturnProcess from '../assets/less/ShoppingProcess/ReturnProcess';
import ReturnMoney from '../assets/less/ShoppingProcess/ReturnMoney';
import ContactService from '../assets/less/ShoppingProcess/ContactService';
import DeliveryMethod from '../assets/less/ShoppingProcess/DeliveryMethod';
import DeliverySevice from '../assets/less/ShoppingProcess/DeliverySevice';
import DeliveryTrack from '../assets/less/ShoppingProcess/DeliveryTrack';
import AboutUs from '../assets/less/ShoppingProcess/AboutUs';
import ContactUs from '../assets/less/ShoppingProcess/ContactUs';
import Cooperation from '../assets/less/ShoppingProcess/Cooperation';

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
            },
            {
                path: 'search/product-details',
                name: 'product-details',
                component: ProductDetails,
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
