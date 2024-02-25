import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
import Man from '../views/Man.vue'
import Admin from '../views/Admin.vue'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [

        {
            path: '/',
            name: 'man',
            component: Man
        },

        {
            path: '/register',
            name: 'register',
            component: Register
        },

        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/admin',
            name: 'admin',
            component: Admin
        },



    ]
})


export default router
