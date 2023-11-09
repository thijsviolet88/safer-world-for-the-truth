<template>
    <li>
        <a class="bg-white-dark shadow-2xl py-10 px-5 flex flex-col items-center space-y-4 text-center hover:bg-purple transistion-all duration-100">
            <header class="text-xl">
                {{ investigation.title }}
                <time class="block" :datetime="investigation.date">{{ investigation.date }}</time>
            </header>
            <button class="btn">Read more</button>
        </a>
    </li>
</template>

<script setup>
const props = defineProps({
    investigation: Object,
});
</script>