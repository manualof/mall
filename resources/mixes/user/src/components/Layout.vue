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
    import HeaderBar from './dashboard/HeaderBar'
    import FooterBar from './dashboard/FooterBar'
    import LogoModal from './dashboard/LogoModal'
    import ContentNav from './dashboard/ContentNav'
    import FooterContent from './dashboard/FooterContent'

    export default {
        components: {
            HeaderBar,
            FooterBar,
            LogoModal,
            ContentNav,
            FooterContent
        }
    }
</script>

