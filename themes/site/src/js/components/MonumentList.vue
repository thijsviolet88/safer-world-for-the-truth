<template>
    <ul class="relative mt-20 h-[35rem] lg:grid lg:grid-cols-3 lg:gap-x-3 lg:gap-y-5" ref="monument">
      <MonumentItem v-for="journalist in data" :journalist="journalist"/>
    </ul>
    <IconSpin class="fixed inset-y-0 inset-x-0" v-if="loading"/>
  </template>
  
<script setup>
import { useWindowScroll } from '@vueuse/core'
import axios from "axios"
import { onMounted, ref, watch } from 'vue'
import IconSpin from './icons/Spin.vue'
import MonumentItem from './MonumentItem.vue';
  
const monument = ref(null);
const data = ref([]);
const url = 'https://api.cpj.org/v1/persons/?page=1&pagesize=10';
const page = ref(1);
const loading = ref(false);
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
      page: page,
      pageSize: 12,
    }
  })
  .then(response => {
      console.log(response.data)
      data.value = [...data.value, ...response.data.data];
      page.value++;
  })
  .catch(error => {
      console.error('Error fetching data:', error);
  }).finally(() => {
    loading.value = false;
    window.scrollTo();
  });
}

onMounted(() => {
  fetchData();
})
</script>