<template>
  <div>
    <h1>Dados de Dengue</h1>
    <ul>
      <li v-for="dengue in dengueData" :key="dengue.id">{{ dengue.title }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      dengueData: []
    };
  },
  created() {
    this.fetchDengueData();
  },
  methods: {
    async fetchDengueData() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/dengue');
        this.dengueData = response.data;
      } catch (error) {
        console.error('Erro ao buscar dados:', error);
      }
    }
  }
};
</script>
