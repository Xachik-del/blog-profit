import { createApp } from 'vue';
import App from './App.vue';
import router from './router'; // если вы используете Vue Router

const app = createApp(App);

app.use(router); // если вы используете Vue Router

app.mount('#app');
