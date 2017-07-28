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
    import HeaderBar from './HeaderBar.vue';
    import FooterBar from './FooterBar.vue';
    import LogoModal from './LogoModal.vue';
    import ContentNav from './ContentNav.vue';
    import FooterContent from './FooterContent.vue';

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

