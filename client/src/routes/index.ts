import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import Home from '../views/Home.vue'
import EditPlayer from '../views/Edit.vue'
import AddPlayer from '../views/AddPlayer.vue'

const routes: Array<RouteRecordRaw> = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/players/edit/:id',
        name: 'EditPlayer',
        component: EditPlayer,
        props: true
    },
    {
        path: '/players/new',
        name: 'AddPlayer',
        component: AddPlayer
    },
    
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router