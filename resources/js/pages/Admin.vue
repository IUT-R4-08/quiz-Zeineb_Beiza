<template>
  <div class="container">

    <h1>⚙️ Administration Quiz</h1>

    <!-- ================= CATEGORIES ================= -->
    <section class="card">
      <h2>Catégories</h2>

      <input v-model="newCategory" placeholder="Nouvelle catégorie" />
      <button @click="addCategory">Ajouter</button>
        
      <h2>__________________________________________________________</h2>
      <h3 style="color: #4f46e5;">Liste des catégories existantes : </h3>
      <ul>
        <li v-for="cat in categories" :key="cat.id">
          {{ cat.name }}
        </li>
      </ul>
    </section>

    <!-- ================= QUESTIONS ================= -->
    <section class="card">
      <h2>❓ Questions</h2>

      <select v-model="selectedCategory">
        <option disabled value="">Choisir une catégorie</option>
        <option v-for="cat in categories" :key="cat.id" :value="cat.id">
          {{ cat.name }}
        </option>
      </select>

      <input v-model="question" placeholder="Question" />

      <input v-model="a1" placeholder="Réponse 1" />
      <input v-model="a2" placeholder="Réponse 2" />
      <input v-model="a3" placeholder="Réponse 3" />
      <input v-model="a4" placeholder="Réponse 4" />

      <h3 style="color: #4f46e5;">Bonne réponse</h3>
      <select v-model="correct">
        <option :value="1">Réponse 1</option>
        <option :value="2">Réponse 2</option>
        <option :value="3">Réponse 3</option>
        <option :value="4">Réponse 4</option>
      </select>

      <button @click="addQuestion">Ajouter question</button>
    </section>

    <!-- ================= LISTE QUESTIONS ================= -->
    <section class="card">
      <h2>📋 Questions existantes</h2>

      <ul>
        <li v-for="q in questions" :key="q.id">
          <strong>{{ q.question }}</strong>
          <br>
          <small>Catégorie ID: {{ q.category_id }}</small>
        </li>
      </ul>
    </section>

  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const categories = ref([])
const questions = ref([])

const newCategory = ref('')
const selectedCategory = ref('')

const question = ref('')
const a1 = ref('')
const a2 = ref('')
const a3 = ref('')
const a4 = ref('')
const correct = ref(1)

/* ================= LOAD ================= */

async function loadCategories() {
  const res = await fetch('/api/categories')
  categories.value = await res.json()
}

async function loadQuestions() {
  const res = await fetch('/api/questions')
  questions.value = await res.json()
}

/* ================= CATEGORY ================= */

async function addCategory() {
  await fetch('/api/categories', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ name: newCategory.value })
  })

  newCategory.value = ''
  loadCategories()
}

/* ================= QUESTION ================= */

async function addQuestion() {
  const res = await fetch('/api/questions', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      question: question.value,
      category_id: selectedCategory.value,
      answers: [
        { answer: a1.value, is_correct: correct.value === 1 },
        { answer: a2.value, is_correct: correct.value === 2 },
        { answer: a3.value, is_correct: correct.value === 3 },
        { answer: a4.value, is_correct: correct.value === 4 }
      ]
    })
  })

  question.value = ''
  a1.value = ''
  a2.value = ''
  a3.value = ''
  a4.value = ''

  loadQuestions()
}

/* ================= INIT ================= */

onMounted(() => {
  loadCategories()
  loadQuestions()
})
</script>

<style scoped>
.container {
  max-width: 800px;
  margin: 40px auto;
  font-family: Arial;
}

.card {
  background: #fff;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 10px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

input, select {
  display: block;
  width: 100%;
  padding: 8px;
  margin: 8px 0;
}

button {
  padding: 10px;
  background: #4f46e5;
  color: white;
  border: none;
  cursor: pointer;
  margin-top: 10px;
}
</style>