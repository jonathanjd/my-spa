<template>
<div>
  <app-toolbar></app-toolbar>
  <router-view></router-view>
  <app-footer></app-footer>
</div>
</template>

<script>
import AppToolbar from './AppToolbar';
import AppFooter from './AppFooter';
export default {

  components: {
    appToolbar: AppToolbar,
    appFooter: AppFooter
  }

}
</script>

<style>
</style>
