<template>
  <div>
    <app-edit-question v-if="editing" :data="question"></app-edit-question>
    <div v-else>
      <app-show-question :data="question" v-if="question"></app-show-question>
    </div>
  </div>
</template>

<script>
import AppShowQuestion from './AppShowQuestion';
import AppEditQuestion from './AppEdit';
export default {

  data() {
    return {
      question: null,
      editing: false
    }
  },

  created(){

    this.listen();
    this.getQuestions();

  },

  components: {
    AppShowQuestion: AppShowQuestion,
    AppEditQuestion: AppEditQuestion
  },

  methods: {
    listen() {
      EventBus.$on('startEditing', () => {
        this.editing = true;
      })

      EventBus.$on('cancelEditing', () => {
        this.editing = false;
      })
    },

    getQuestions() {
      axios.get(`/api/question/${this.$route.params.slug}`)
      .then(res => this.question = res.data.data)
    },
  }

}
</script>

<style>
</style>
