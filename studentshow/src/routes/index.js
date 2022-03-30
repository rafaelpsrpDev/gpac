import Vue from "vue";
import Router from "vue-router";

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'hello-world',
        component: () => import('../components/HelloWorld.vue')
    },
    {
        path: '/listStudent',
        name: 'list-student',
        component: () => import('../components/Student/ListStudent.vue')
    },
    {
        path: '/editStudent/:id',
        name: 'edit-student',
        component: () => import('../components/Student/EditStudent.vue')
    },
    {
        path: '/newStudent',
        name: 'new-student',
        component: () => import('../components/Student/NewStudent.vue')
    }
]

const router = new Router({ routes })

export default router


