cat > resources/js/pages/Quiz.vue << 'EOF'
<template>
    <div style="max-width: 600px; margin: 40px auto; font-family: sans-serif;">
        <div v-if="!started">
            <h2>Choisis une catégorie</h2>
            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                <button v-for="cat in categories" :key="cat.id" @click="startQuiz(cat)" style="padding: 10px 20px; font-size: 16px; cursor: pointer;">
                    {{ cat.name }}
                </button>
            </div>
        </div>
        <div v-else-if="!finished">
            <p>Question {{ currentIndex + 1 }} / {{ questions.length }}</p>
            <h2>{{ currentQuestion.question }}</h2>
            <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                <button v-for="answer in currentQuestion.answers" :key="answer.id" @click="selectAnswer(answer)" style="padding: 12px 20px; font-size: 16px; cursor: pointer; text-align: left;">
                    {{ answer.answer }}
                </button>
            </div>
        </div>
        <div v-else>
            <h2>Quiz terminé !</h2>
            <p>Ton score : {{ score }} / {{ questions.length }}</p>
            <input v-model="pseudo" placeholder="Entre ton pseudo" style="padding: 10px; font-size: 16px; margin-right: 10px;" />
            <button @click="saveScore" style="padding: 10px 20px; cursor: pointer;">Enregistrer mon score</button>
            <button @click="restart" style="padding: 10px 20px; cursor: pointer; margin-left: 10px;">Rejouer</button>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();
const categories = ref([]);
const questions = ref([]);
const currentIndex = ref(0);
const score = ref(0);
const started = ref(false);
const finished = ref(false);
const pseudo = ref('');
const selectedCategory = ref(null);

const currentQuestion = computed(() => questions.value[currentIndex.value]);

async function loadCategories() {
    const res = await fetch('/api/categories');
    categories.value = await res.json();
}

async function startQuiz(category) {
    selectedCategory.value = category;
    const res = await fetch('/api/questions');
    const allQuestions = await res.json();
    questions.value = allQuestions.filter(q => q.category_id === category.id);
    currentIndex.value = 0;
    score.value = 0;
    started.value = true;
    finished.value = false;
}

function selectAnswer(answer) {
    if (answer.is_correct) score.value++;
    if (currentIndex.value + 1 < questions.value.length) {
        currentIndex.value++;
    } else {
        finished.value = true;
    }
}

async function saveScore() {
    await fetch('/api/scores', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ pseudo: pseudo.value, score: score.value, category_id: selectedCategory.value.id }),
    });
    router.push('/scores');
}

function restart() {
    started.value = false;
    finished.value = false;
}

loadCategories();
</script>
EOF