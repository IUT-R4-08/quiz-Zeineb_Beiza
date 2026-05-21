<template>
    <div>
        <nav>
            <router-link to="/">Accueil</router-link> |
            <router-link to="/quiz">Jouer</router-link> |
            <router-link to="/scores">Scores</router-link> |
            <router-link to="/admin">Admin</router-link>
        </nav>
        <router-view />
    </div>
</template>