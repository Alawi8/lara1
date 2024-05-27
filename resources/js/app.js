

import './bootstrap'
import { createApp } from 'vue'
import App from './index.vue'
import router from './routes'
import axios from 'axios'

const app = createApp(App)

app.use(router)

app.mount('#app')