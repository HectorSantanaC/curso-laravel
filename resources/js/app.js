import './bootstrap';

import { createApp } from 'vue';
import HelloWorld from '@/components/HelloWorld.vue'
import BookList from '@/components/BookList.vue'

// Crear aplicación
createApp(BookList).mount("#app");
