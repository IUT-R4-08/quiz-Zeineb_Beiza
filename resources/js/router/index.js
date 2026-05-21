import { createRouter, createWebHistory } from 'vue-router';
import Home from '../pages/Home.vue';
import Quiz from '../pages/Quiz.vue';
import Scores from '../pages/Scores.vue';
import Admin from '../pages/Admin.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/quiz', component: Quiz },
    { path: '/scores', component: Scores },
    { path: '/admin', component: Admin },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});