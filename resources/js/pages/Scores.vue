<template>
    <div style="max-width: 600px; margin: 40px auto; font-family: sans-serif;">
        <h2>Scoreboard</h2>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr>
                    <th style="text-align: left; padding: 8px; border-bottom: 2px solid #ccc;">Pseudo</th>
                    <th style="text-align: left; padding: 8px; border-bottom: 2px solid #ccc;">Score</th>
                    <th style="text-align: left; padding: 8px; border-bottom: 2px solid #ccc;">Catégorie</th>
                    <th style="text-align: left; padding: 8px; border-bottom: 2px solid #ccc;">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="score in scores" :key="score.id">
                    <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ score.pseudo }}</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ score.score }}</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ score.category?.name }}</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ new Date(score.created_at).toLocaleDateString() }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const scores = ref([]);

async function loadScores() {
    const res = await fetch('/api/scores');
    scores.value = await res.json();
}

loadScores();
</script>