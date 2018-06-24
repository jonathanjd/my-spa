import Vue from 'vue'
import VueRouter from 'vue-router'
import AppLogin from '../components/AppLogin.vue';
import AppSignup from '../components/AppSignup.vue';
import AppForum from '../components/AppForum.vue';
import AppLogout from '../components/AppLogout.vue';
import AppRead from '../components/AppRead.vue';
import AppCreate from '../components/AppCreate.vue';

Vue.use(VueRouter)

const routes = [{
    path: '/login',
    component: AppLogin
  },
  {
    path: '/signup',
    component: AppSignup
  },
  {
    path: '/forum',
    component: AppForum,
    name: 'forum'
  },
  {
    path: '/logout',
    component: AppLogout,
  },
  {
    path: '/question/:slug',
    component: AppRead,
    name: 'read'
  },
  {
    path: '/ask',
    component: AppCreate
  },
]

const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history',
})

export default router;