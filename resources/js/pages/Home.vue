<template>
  <div class="home">
    <div class="container">
      <h1>🎯 Bienvenue sur le Quiz !</h1>
      <p>Choisis une catégorie pour commencer ton défi.</p>

      <router-link to="/quiz" class="btn">
        Jouer maintenant
      </router-link>
    </div>
  </div>
</template>

<style scoped>
.home {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(135deg, #FF4D9D, #FF4D9D);
  color: white;
  font-family: Arial, sans-serif;
}

.container {
  text-align: center;
  padding: 2rem;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 16px;
  backdrop-filter: blur(10px);
}

h1 {
  font-size: 2.2rem;
  margin-bottom: 1rem;
}

p {
  margin-bottom: 2rem;
  font-size: 1.1rem;
}

.btn {
  display: inline-block;
  padding: 12px 24px;
  background: white;
  color: #851299;
  font-weight: bold;
  border-radius: 8px;
  text-decoration: none;
  transition: 0.3s;
}

.btn:hover {
  transform: scale(1.05);
  background: #f3f4f6;
}
</style>