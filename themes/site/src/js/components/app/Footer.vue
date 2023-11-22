<template>
    <footer class="shadow-3xl bg-white fixed bottom-0 left-0 right-0 z-10">
        <header @click="toggleCollapse" class="p-6 text-center flex gap-x-2 items-center justify-center cursor-pointer">
            <h2>Be part of A Safer World For the Truth</h2>
            <IconChevron class="transistion-all duration-300 w-4 h-4" :class="{'rotate-180': showCollapse}"/>
        </header>
        <div class="bg-black transistion-all duration-300" v-if="showCollapse">
            <slot/>
        </div>
    </footer>
</template>

<script setup>
import { ref } from "vue";
import IconChevron from "../icons/Chevron";

const showCollapse = ref(false);

const toggleCollapse = () => {
    showCollapse.value = !showCollapse.value;
}
</script>