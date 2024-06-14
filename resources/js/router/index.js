import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import PostView from "@/views/PostView.vue"; // Ваши компоненты

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/post/:id',
        name: 'PostView',
        component: PostView,
    },
    // другие маршруты
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return { top: 0 };
        }
    },
});

export default router;
