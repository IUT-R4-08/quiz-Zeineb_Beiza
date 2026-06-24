<template>
  <div class="app">
    <nav class="navbar">
      <router-link to="/">Accueil</router-link>
      <router-link to="/quiz">Jouer</router-link>
      <router-link to="/scores">Scores</router-link>
      <router-link to="/admin">Admin</router-link>
    </nav>

    <div class="container">
      <router-view />
    </div>
  </div>
</template>

<style>
.app {
  background: #0B1020;
  min-height: 100vh;
  color: #FF4D9D;
  font-family: Arial;
}

/* NAVBAR */
.navbar {
  display: flex;
  justify-content: center;
  gap: 20px;
  padding: 20px;
  background: #111A33;
  border-bottom: 1px solid rgba(255, 77, 157, 0.3);
}

/* LINKS */
.navbar a {
  color: #FF4D9D;
  text-decoration: none;
  font-weight: bold;
  transition: 0.3s;
}

.navbar a:hover {
  text-shadow: 0 0 10px #FF4D9D;
}

/* CONTENT */
.container {
  padding: 20px;
}
</style>