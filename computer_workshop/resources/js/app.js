import {createApp} from "vue";
import App from './src/App.vue';
import 'virtual:uno.css';
import {createRouter, createWebHistory} from "vue-router";
import Landing from "../views/main/Landing.vue";
import { createPinia } from 'pinia';



const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'landing',
            component: Landing
        },
    ]
});

const app = createApp(App);

app.use(createPinia());
app.use(router);
app.mount('#app');
