import Vue from 'vue'
import VueRouter from 'vue-router'
import AppLogin from '../components/AppLogin.vue';

Vue.use(VueRouter)

const routes = [{
  path: '/login',
  component: AppLogin
}, ]

const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history',
})

export default router;