import './bootstrap';

import { createApp } from 'vue';
import Books from './Components/Books.vue';

const app = createApp({});
app.component('books', Books)
app.mount('#app');
