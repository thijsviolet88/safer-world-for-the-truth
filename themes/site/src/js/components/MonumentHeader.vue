<template>
    <header>
        Since 1992, {{ journalistsKilled }} journalists have been murdered. These are the men and women murdered for doing their job: finding the truth.
    </header>
</template>

<script setup>
const props = defineProps({
    journalistsKilled: Number,
})
</script>

