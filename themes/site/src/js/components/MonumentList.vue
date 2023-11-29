<template>
  <section>
    <!-- <MonumentHeader v-if="!loading" :journalistsKilled="journalistsKilled"/> -->
    <ul class="relative mt-10 lg:mt-20 h-[35rem] flex flex-col lg:grid lg:grid-cols-3 lg:gap-x-3 gap-y-5" ref="monument">
      <MonumentItem v-for="(journalist, index) in data" :journalist="journalist" :index="index"/>
    </ul>
    <IconSpin class="fixed bottom-10 inset-x-0 scale-50" v-if="loading"/>
  </section>
</template>
  
<script setup>
import { useWindowScroll } from '@vueuse/core'
import axios from "axios"
import { onMounted, ref, watch } from 'vue'
import IconSpin from './icons/Spin.vue'
import MonumentItem from './MonumentItem.vue';
import MonumentHeader from './MonumentHeader.vue';
  
const monument = ref(null);
const data = ref([]);
const url = 'https://api.cpj.org/v1/persons/';
const page = ref(0);
const loading = ref(false);
const journalistsKilled = ref(0);
const { x, y } = useWindowScroll({ behavior: 'smooth' })

watch(y, () => {
 if(y.value === (document.documentElement.scrollHeight - document.documentElement.clientHeight)) {
  fetchData();
 }
})
const fetchData = () => {
  loading.value = true;

  axios.get(url, {
    params: {
      page: page.value,
      pageSize: 12,
    }
  })
  .then(response => {
      console.log(response.data)
      journalistsKilled.value = (response.data.meta.pageCount * response.data.meta.pageSize);
      data.value = [...data.value, ...response.data.data];
  })
  .catch(error => {
      console.error('Error fetching data:', error);
  }).finally(() => {
    page.value++;
    loading.value = false;
    window.scrollTo();
  });
}

onMounted(() => {
  fetchData();
})
</script>