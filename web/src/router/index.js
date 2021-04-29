import {
  createRouter,
  createWebHistory
} from "vue-router";

import store from '@/store'

const routes = [{
  path: "/login",
  name: "Login",
  component: () => import("../views/Login.vue"),
},
{
  path: "/register",
  name: "Register",
  component: () => import("../views/Register.vue"),
},
{
  path: "/settings",
  name: "Settings",
  component: () => import("../views/Settings.vue"),
  beforeEnter:(to, from, next) => {
    if(!store.getters['auth/authenticated']){
      return next({
        name:'Login'
      })
    }
    next()
  }
},
{
  path: "/clients",
  name: "Clients",
  component: () => import("../views/Clients.vue"),
},
{
  path: "/clients/:id",
  name: "ClientsID",
  component: () => import("../views/Clients.vue"),
},
{
  path: "/projects",
  name: "Projects",
  component: () => import("../views/Projects.vue"),
},
{
  path: "/add",
  name: "Add",
  component: () => import("../views/Add.vue"),
},
{
  path: "/calendar",
  name: "Calendar",
  component: () => import("../views/Calendar.vue"),
},
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});


export default router;