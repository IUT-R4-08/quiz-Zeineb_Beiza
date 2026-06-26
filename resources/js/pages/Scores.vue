<template>
  <div class="container">
    <h1>🏆 Scoreboard</h1>

    <table v-if="scores.length">
      <thead>
        <tr>
          <th>Pseudo</th>
          <th>Score</th>
          <th>Catégorie</th>
          <th>Date</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="score in scores" :key="score.id">
          <td>{{ score.pseudo }}</td>
          <td>{{ score.score }}</td>
          <td>{{ score.category?.name ?? '—' }}</td>
          <td>{{ formatDate(score.created_at) }}</td>
        </tr>
      </tbody>
    </table>

    <p v-else>Aucun score disponible.</p>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const scores = ref([])

async function loadScores() {
  const res = await fetch('/api/scores')
  scores.value = await res.json()
}

function formatDate(date) {
  return new Date(date).toLocaleDateString('fr-FR')
}

onMounted(loadScores)
</script>

<style scoped>
.container {
  max-width: 700px;
  margin: 40px auto;
  font-family: Arial;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
  text-align: left;
}
</style>