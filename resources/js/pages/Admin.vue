<template>
    <div style="max-width: 800px; margin: 40px auto; font-family: sans-serif;">
        <h2>Administration</h2>

        <!-- Ajouter une catégorie -->
        <div style="margin-bottom: 30px;">
            <h3>Ajouter une catégorie</h3>
            <input v-model="newCategory" placeholder="Nom de la catégorie" style="padding: 8px; margin-right: 10px;" />
            <button @click="addCategory" style="padding: 8px 16px; cursor: pointer;">Ajouter</button>
        </div>

        <!-- Ajouter une question -->
        <div style="margin-bottom: 30px;">
            <h3>Ajouter une question</h3>
            <select v-model="newQuestion.category_id" style="padding: 8px; margin-right: 10px;">
                <option v-for="cat in categories" :key="cat.id" :value="cat.id">{{ cat.name }}</option>
            </select>
            <input v-model="newQuestion.question" placeholder="Question" style="padding: 8px; width: 300px;" />
            <div style="margin-top: 10px;" v-for="(ans, i) in newQuestion.answers" :key="i">
                <input v-model="ans.answer" :placeholder="'Réponse ' + (i+1)" style="padding: 8px; margin-right: 10px;" />
                <label><input type="radio" :value="i" v-model="newQuestion.correctIndex" /> Correcte</label>
            </div>
            <button @click="addQuestion" style="padding: 8px 16px; cursor: pointer; margin-top: 10px;">Ajouter la question</button>
        </div>

        <!-- Liste des questions -->
        <div>
            <h3>Questions existantes</h3>
            <div v-for="q in questions" :key="q.id" style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p><strong>{{ q.question }}</strong> — {{ q.category?.name }}</p>
                <ul>
                    <li v-for="a in q.answers" :key="a.id" :style="a.is_correct ? 'color: green;' : ''">{{ a.answer }}</li>
                </ul>
                <button @click="deleteQuestion(q.id)" style="padding: 4px 10px; cursor: pointer; color: red;">Supprimer</button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const categories = ref([]);
const questions = ref([]);
const newCategory = ref('');
const newQuestion = ref({
    category_id: null,
    question: '',
    correctIndex: 0,
    answers: [
        { answer: '', is_correct: false },
        { answer: '', is_correct: false },
        { answer: '', is_correct: false },
        { answer: '', is_correct: false },
    ]
});

async function loadData() {
    const [catRes, qRes] = await Promise.all([
        fetch('/api/categories'),
        fetch('/api/questions')
    ]);
    categories.value = await catRes.json();
    questions.value = await qRes.json();
}

async function addCategory() {
    await fetch('/api/categories', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name: newCategory.value }),
    });
    newCategory.value = '';
    loadData();
}

async function addQuestion() {
    const answers = newQuestion.value.answers.map((a, i) => ({
        answer: a.answer,
        is_correct: i === newQuestion.value.correctIndex,
    }));

    const res = await fetch('/api/questions', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            category_id: newQuestion.value.category_id,
            question: newQuestion.value.question,
        }),
    });
    const q = await res.json();

    for (const a of answers) {
        await fetch('/api/answers', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ question_id: q.id, ...a }),
        });
    }

    newQuestion.value = {
        category_id: null,
        question: '',
        correctIndex: 0,
        answers: [
            { answer: '', is_correct: false },
            { answer: '', is_correct: false },
            { answer: '', is_correct: false },
            { answer: '', is_correct: false },
        ]
    };
    loadData();
}

async function deleteQuestion(id) {
    await fetch(`/api/questions/${id}`, { method: 'DELETE' });
    loadData();
}

loadData();
</script>