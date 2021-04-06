import {
  createRouter,
  createWebHistory
} from "vue-router";

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
    path: "/reminder",
    name: "Reminder",
    component: () => import("../views/Reminder.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;