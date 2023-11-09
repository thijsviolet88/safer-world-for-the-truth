<template>
    <button @click="toggleMenu" aria-label="navigation menu" class="bg-secondary flex h-12 w-12 flex-col items-center justify-center rounded-full lg:hidden">
        <span class="bg-black before:-top-2 before:w-3.5 before:bg-black after:-bottom-2 after:w-5 after:bg-black relative h-0.5 w-6 transition-all duration-500 before:absolute before:left-0 before:h-0.5 before:transition-all before:duration-500 after:absolute after:left-0 after:h-0.5 after:transition-all after:duration-500"></span>
    </button>
    <div v-show="menuOpen" class="absolute w-full h-full inset-y-0 inset-x-0 bg-white z-10 pt-40 px-14 space-y-4">
        <slot/>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const menuOpen = ref(false);

const toggleMenu = () => {
    menuOpen.value = !menuOpen.value;
}
</script>
