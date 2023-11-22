import { createApp } from "vue";

import AppFooter from "./components/app/Footer.vue"
import Cookie from './components/Cookie.vue'
import IconChevron from "./components/icons/Chevron.vue"
import IconCross from "./components/icons/Cross.vue"
import IconLogo from "./components/icons/Logo.vue"
import HamburgerMenu from "./components/app/HamburgerMenu.vue"

createApp({
    components: {
        AppFooter,
        Cookie,
        IconChevron,
        IconCross,
        IconLogo,
        HamburgerMenu
    }
}).mount('#app');

