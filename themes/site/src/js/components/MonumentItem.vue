<template>
    <li class="text-center animate-fade animate-delay-300 animate-ease-linear transistion-all duration-300 hover:scale-110 cursor-pointer">
        <h3>{{ journalist.fullName }} {{ journalist.entries[0].coverages ? `was a journalist covering ${formattedConverages(journalist.entries[0].coverages)}.` : 'was a journalist.' }} On {{ journalist.entries[0].endDisplay}} in {{ journalist.entries[0].location }} {{ journalist.gender === 'Male' ? 'he' : 'she' }} was {{ journalist.entries[0].status.toLowerCase() }} because of it. The ones responsible for his death are still at large.</h3>
    </li>
</template>

<script setup>
const props = defineProps({
    journalist: Object,
    index: Number,
})

const formattedConverages = (coverages) => {
    return coverages.toLowerCase().replace(/, /g, ' & ');
}
</script>
