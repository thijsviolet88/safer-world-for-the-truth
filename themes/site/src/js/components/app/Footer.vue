<template>
    <footer class="shadow-3xl bg-white fixed bottom-0 left-0 right-0 z-10" :class="{'relative': showCollapse}">
        <header @click="toggleCollapse" class="p-6 text-center flex gap-x-2 items-center justify-center cursor-pointer">
            <h2>Be part of A Safer World For the Truth</h2>
            <IconChevron class="transistion-all duration-300 w-4 h-4" :class="{'rotate-180': showCollapse}"/>
        </header>
        <div ref="scrollTarget" class="bg-black transistion-all duration-300" v-show="showCollapse">
            <slot/>
        </div>
    </footer>
</template>

<script setup>
import { ref } from "vue";
import IconChevron from "../icons/Chevron";

const showCollapse = ref(false);
const scrollTarget = ref(null);

const toggleCollapse = () => {    
    showCollapse.value = !showCollapse.value;

    if(document.querySelector('main').style.padding !== 0) {
        document.querySelector('main').style.padding = '0';
    } else {
        document.querySelector('main').style.padding = '400px';
    }
    document.querySelector('main').style.padding = '0';
    setTimeout(() => {
        window.scrollTo({top: document.body.scrollHeight || document.documentElement.scrollHeight, behavior: 'smooth'});
    }, 10);
}
</script>