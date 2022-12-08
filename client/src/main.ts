import { createApp } from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import routes from './routes'
import axios from 'axios'

loadFonts()
axios.defaults.baseURL = 'http://127.0.0.1:8000'

createApp(App)
  .use(vuetify)
  .use(routes)
  .mount('#app')
