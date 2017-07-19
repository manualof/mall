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
<script>
    import HeaderBar from './HeaderBar';
    import FooterBar from './FooterBar';
    import LogoModal from './LogoModal';
    import ContentNav from './ContentNav';
    import FooterContent from './FooterContent';

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

