<template>
    <div v-if="showPreferences" class="fixed bg-white-dark p-5 space-y-4 z-20 bottom-0 left-4 max-w-2xl">
        <header class="space-y-2">
            <h4 class="uppercase font-anonymous-pro">YOUR PREFERENCES REGARDING COOKIES ON THIS SITE</h4>
            <p class="text-sm leading-relaxed">We have placed cookies on your device to help make this website better. You can use this tool to change your cookie settings. Otherwise, we'll assume you're OK to continue.</p>
        </header>
        <div class="flex items-center gap-x-5">
            <button class="bg-white border tracking-widest p-3 uppercase">Accept</button>
            <button class="bg-white border tracking-widest p-3 uppercase">Preferences</button>
        </div>
        <p class="text-sm">For more information on how we use cookies, see our cookie statement <a href="#">Learn more</a></p>
        <p class="text-sm leading-relaxed">Some cookies are necessary for the functioning of ‘a Safer World for The Truth’ website. If you wish to restrict or block these cookies you can set your internet browser to do so, just click on the following link for further information: <a href="#" class="underline">www.aboutcookies.org</a></p>
        <div>
            <legend class="uppercase font-bold">Analytics cookies</legend>
            <div>
                <input type="checkbox" id="analytics" name="analytics" />
                <label for="analytics">
                    {{ analytics }}
                </label>
            </div>
        </div>
        <div>
            <legend class="uppercase font-bold">Marketing cookies</legend>
            <div>
                <input type="checkbox" id="marketing" name="marketing" />
                <label for="marketing">
                    {{ marketing }}
                </label>
            </div>
        </div>
    </div>
    <button @click="togglePreferences" class="uppercase border fixed z-20 -bottom-1 text-xs left-6 p-4 tracking-widest bg-white" v-else>
        Preferences
    </button>
</template>

<script setup>
import { ref } from 'vue'

defineProps({
    analytics: String,
    marketing: String,
});

const showPreferences = ref(false);
const togglePreferences = () => {
    showPreferences.value = !showPreferences.value;
}
</script>