import SignUp from '../components/SignUp';
import SignIn from '../components/SignIn';

import Layout from '../components/Layout';
import Home from '../components/Home';
import MyOrder from '../components/MyOrder';
import Help from '../components/Help';
import AfterSale from '../components/AfterSale';
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
        path: '/mall',
        component: Layout,
        children: [
            {
                name: 'home',
                path: '/',
                component: Home,
            },
            {
                path: '/mall/signup',
                component: SignUp,
                name: 'signup',
            },
            {
                path: '/mall/signin',
                component: SignIn,
                name: 'signin',
            },
            {
                path: '/mall/order',
                name: 'order',
                component: MyOrder,
            },
            {
                path: '/mall/scan-pay',
                name: 'scan-pay',
                component: ScanPay,
            },
            {
                path: '/mall/customer-serve',
                name: 'customer-serve',
                component: CustomerServe,
            },
            {
                path: '/mall/help',
                name: 'help',
                component: Help,
            },
            {
                path: '/mall/after-sale',
                name: 'after-sale',
                component: AfterSale,
            },
            {
                path: '/mall/more',
                name: 'more',
                component: More,
            },
            {
                path: '/mall/offer',
                name: 'offer',
                component: Offer,
            },
            {
                path: '/mall/discount',
                name: 'discount',
                component: Discount,
            },
            {
                path: '/mall/spike',
                name: 'spike',
                component: Spike,
            },
            {
                path: '/mall/refund',
                name: 'refund',
                component: Refund,
            },
            {
                path: '/mall/return-of-goods',
                name: 'return-of-goods',
                component: ReturnOfGoods,
            },
            {
                path: '/mall/classification',
                name: 'classification',
                component: Classification,
            },
            {
                path: '/mall/search',
                name: 'search',
                component: Search,
            },
            {
                path: '/mall/search/product-details',
                name: 'product-details',
                component: ProductDetails,
            },
            {
                path: '/mall/search/product-details/submit-order',
                name: 'submit-order',
                component: SubmitOrder,
            },
            {
                path: '/mall/cart-settlement',
                name: 'cart-settlement',
                component: CartSettlement,
            },
            {
                path: '/mall/evaluation',
                name: 'evaluation',
                component: Evaluation,
            },
            {
                path: '/',
                component: ShoppingProcess,
                redirect: { name: 'shop-process' },
                children: [
                    {
                        path: '/mall/shop-process',
                        name: 'shop-process',
                        component: ShopProcess,
                    },
                    {
                        path: '/mall/shop-process/pay-method',
                        name: 'pay-method',
                        component: PayMethod,
                    },
                    {
                        path: '/mall/shop-process/common-problem',
                        name: 'common-problem',
                        component: CommonProblem,
                    },
                    {
                        path: '/mall/shop-process/return-process',
                        name: 'return-process',
                        component: ReturnProcess,
                    },
                    {
                        path: '/mall/shop-process/return-money',
                        name: 'return-money',
                        component: ReturnMoney,
                    },
                    {
                        path: '/mall/shop-process/contact-service',
                        name: 'contact-service',
                        component: ContactService,
                    },
                    {
                        path: '/mall/shop-process/delivery-method',
                        name: 'delivery-method',
                        component: DeliveryMethod,
                    },
                    {
                        path: '/mall/shop-process/delivery-sevice',
                        name: 'delivery-sevice',
                        component: DeliverySevice,
                    },
                    {
                        path: '/mall/shop-process/delivery-track',
                        name: 'delivery-track',
                        component: DeliveryTrack,
                    },
                    {
                        path: '/mall/shop-process/about-us',
                        name: 'about-us',
                        component: AboutUs,
                    },
                    {
                        path: '/mall/shop-process/contact-us',
                        name: 'contact-us',
                        component: ContactUs,
                    },
                    {
                        path: '/mall/shop-process/cooperation',
                        name: 'cooperation',
                        component: Cooperation,
                    },
                ],
            },
            {
                path: '/mall/order-success',
                name: 'order-success',
                component: OrderSuccess,
            },
            {
                path: '/mall/pay-result',
                name: 'pay-result',
                component: PayResult,
            },
            {
                path: '/mall/payment-success',
                name: 'payment-success',
                component: PaymentSuccess,
            },
        ],
    },
];
