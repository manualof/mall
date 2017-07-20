<script>
    import HeaderBar from './public/HeaderBar';
    import FooterBar from './public/FooterBar';
    import LogoModal from './public/LogoModal';
    import ContentNav from './public/ContentNav';
    import FooterContent from './public/FooterContent';

    export default {
        components: {
            ContentNav,
            FooterBar,
            FooterContent,
            HeaderBar,
            LogoModal,
        },
    };
</script>
<template>
    <div class="layout">
        <header-bar></header-bar>
        <logo-modal></logo-modal>
        <content-nav></content-nav>
        <div class="content">
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
        <footer-content></footer-content>
        <footer-bar></footer-bar>
    </div>
</template>
