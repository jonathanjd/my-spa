<template>
  <app-show-question :data="question"></app-show-question>
</template>

<script>
import AppShowQuestion from './AppShowQuestion';
export default {

  data() {
    return {
      question: {}
    }
  },

  created(){
    axios.get(`/api/question/${this.$route.params.slug}`)
      .then(res => this.question = res.data.data)
  },

  components: {
    AppShowQuestion: AppShowQuestion
  }

}
</script>

<style>
</style>
