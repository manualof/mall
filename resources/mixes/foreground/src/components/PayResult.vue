<script>
    import FooterBar from './public/FooterBar';
    import FooterContent from './public/FooterContent';
    import HeaderBar from './public/HeaderBar';
    import LogoModal from './public/LogoModal';
    import NeedBrowse from './public/NeedBrowse';
    import RightSide from './public/RightSide';

    export default {
        components: {
            FooterBar,
            FooterContent,
            HeaderBar,
            LogoModal,
            NeedBrowse,
            RightSide,
        },
    };
</script>
<template>
    <div class="pay-result ">
        <header-bar></header-bar>
        <logo-modal></logo-modal>
        <div class="pay-success padding-attribute">
            <div class="container">
                <div class="pay-success-content">
                    <div class="submit-title text-center"> 付款成功！我们将尽快安排发货！</div>
                    <!--<div class="submit-title text-center">付款失败！</div>-->
                    <div class="product-information">
                        <table width="100%">
                            <thead>
                            <tr>
                                <th class="name">商品信息</th>
                                <th>单价</th>
                                <th>数量</th>
                                <th>金额</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Purrfect diary 咕噜日记1-7岁儿童可爱短袜5双装儿童可爱短袜5双装儿童
                                    可爱短袜5双装
                                </td>
                                <td><s>&yen;126.07</s>
                                    <p>&yen;39.9</p></td>
                                <td>1</td>
                                <td class="price">&yen;39.90</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--<button class="order-btn submit-btn">查看订单</button>-->
                    <router-link :to="{ path: 'payment-success' }" class="order-btn submit-btn">查看订单</router-link>
                </div>
                <need-browse></need-browse>
            </div>
        </div>
        <right-side></right-side>
        <footer-content></footer-content>
        <footer-bar></footer-bar>
    </div>
</template>