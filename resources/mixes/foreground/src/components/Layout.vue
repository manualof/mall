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
    import HeaderBar from '../../../user/src/components/dashboard/HeaderBar';
    import FooterBar from '../../../user/src/components/dashboard/FooterBar';
    import LogoModal from '../../../user/src/components/dashboard/LogoModal';
    import ContentNav from '../../../user/src/components/dashboard/ContentNav';
    import FooterContent from '../../../user/src/components/dashboard/FooterContent';

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

