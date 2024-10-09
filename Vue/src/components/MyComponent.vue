<template>
    <div>
      <h1>{{ mensagem }}</h1>
    </div>
  </template>
  
  <script lang="ts">
  import { defineComponent, ref } from 'vue';
  import axios from 'axios';
  
  export default defineComponent({
    setup() {
      const mensagem = ref('');
  
      axios.get('http://127.0.0.1:8000')
        .then(response => {
          mensagem.value = response.data.message;
        })
        .catch(error => {
          console.error(error);
        });
  
      return { mensagem };
    },
  });
  </script>
  