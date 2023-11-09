<template>
    <ul class="flex flex-col gap-y-10">
        <investigation v-for="(investigation, index) in investigations" :key="index" :investigation="investigation"/>
    </ul>
</template>

<script setup>
import Investigation from './Investigation.vue';

const props = defineProps({
    investigations: Array,
});
</script>