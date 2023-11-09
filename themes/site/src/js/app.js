import { createApp } from "vue";

import AppFooter from "./components/app/Footer.vue"
import IconChevron from "./components/icons/Chevron.vue"
import IconCross from "./components/icons/Cross.vue"
import IconLogo from "./components/icons/Logo.vue"
import InvestigationList from "./components/InvestigationList.vue"
import HamburgerMenu from "./components/app/HamburgerMenu.vue"

createApp({
    components: {
        AppFooter,
        IconChevron,
        IconCross,
        IconLogo,
        InvestigationList,
        HamburgerMenu
    }
}).mount('#app');

