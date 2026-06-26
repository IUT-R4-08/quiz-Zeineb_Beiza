<template>
  <div class="quiz-container">

    <!-- Choix catégorie -->
    <div v-if="!started" class="card">
      <h2>🎯 Choisis une catégorie</h2>

      <div class="categories">
        <button
          v-for="cat in categories"
          :key="cat.id"
          @click="startQuiz(cat)"
          class="btn category-btn"
        >
          {{ cat.name }}
        </button>
      </div>
    </div>

    <!-- Quiz -->
    <div v-else-if="!finished" class="card">
      <p class="progress">
        Question {{ currentIndex + 1 }} / {{ questions.length }}
      </p>

      <h2 class="question">
        {{ currentQuestion?.question }}
      </h2>

      <div class="answers">
        <button
          v-for="answer in currentQuestion?.answers"
          :key="answer.id"
          @click="selectAnswer(answer)"
          class="btn answer-btn"
        >
          {{ answer.answer }}
        </button>
      </div>
    </div>

    <!-- Résultat -->
    <div v-else class="card">
      <h2>🏁 Quiz terminé !</h2>

      <p class="score">
        Ton score : <strong>{{ score }} / {{ questions.length }}</strong>
      </p>

      <input
        v-model="pseudo"
        placeholder="Entre ton pseudo"
        class="input"
      />

      <div class="actions">
        <button @click="saveScore" class="btn primary">
          Enregistrer
        </button>

        <button @click="restart" class="btn secondary">
          Rejouer
        </button>
      </div>
    </div>

  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const categories = ref([])
const questions = ref([])
const currentIndex = ref(0)
const score = ref(0)

const started = ref(false)
const finished = ref(false)

const pseudo = ref('')
const selectedCategory = ref(null)

const currentQuestion = computed(() =>
  questions.value[currentIndex.value]
)

async function loadCategories() {
  const res = await fetch('/api/categories')
  categories.value = await res.json()
}

async function startQuiz(category) {
  selectedCategory.value = category

  const res = await fetch('/api/questions')
  const allQuestions = await res.json()

  questions.value = allQuestions.filter(
    q => q.category_id === category.id
  )

  currentIndex.value = 0
  score.value = 0
  started.value = true
  finished.value = false
}

function selectAnswer(answer) {
  if (answer.is_correct) score.value++

  if (currentIndex.value + 1 < questions.value.length) {
    currentIndex.value++
  } else {
    finished.value = true
  }
}

async function saveScore() {
  await fetch('/api/scores', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      pseudo: pseudo.value,
      score: score.value,
      category_id: selectedCategory.value.id
    }),
  })

  router.push('/scores')
}

function restart() {
  started.value = false
  finished.value = false
  currentIndex.value = 0
  score.value = 0
  pseudo.value = ''
  selectedCategory.value = null
}

onMounted(loadCategories)
</script>

<style scoped>
.quiz-container {
  max-width: 650px;
  margin: 50px auto;
  font-family: Arial, sans-serif;
}

.card {
  background: white;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}

h2 {
  margin-bottom: 20px;
}

.progress {
  color: #666;
}

.question {
  margin-bottom: 20px;
}

.categories,
.answers {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.btn {
  padding: 12px 15px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.2s;
}

.category-btn {
  background: #f3f4f6;
}

.answer-btn {
  background: #eef2ff;
  text-align: left;
}

.btn:hover {
  transform: scale(1.02);
}

.primary {
  background: #4f46e5;
  color: white;
}

.secondary {
  background: #e5e7eb;
}

.input {
  width: 100%;
  padding: 10px;
  margin: 15px 0;
  border-radius: 8px;
  border: 1px solid #ddd;
}

.actions {
  display: flex;
  gap: 10px;
}
</style>