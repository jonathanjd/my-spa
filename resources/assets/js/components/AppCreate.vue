<template>
  <v-container grid-list-xs>
    <v-form @submit.prevent="storeQuestion" class="ma-4">

        <v-text-field
          v-model="form.title"
          label="title"
          type="text"
          required
        ></v-text-field>

        <v-select
          :items="categories"
          item-text="name"
          item-value="id"
          v-model="form.category_id"
          label="Category"
          autocomplete
        ></v-select>

        <markdown-editor v-model="form.body" ref="markdownEditor"></markdown-editor>

        <v-btn color="green" dark type="submit">Create</v-btn>

        </v-form>
  </v-container>
</template>

<script>
export default {


  data() {
    return {
      form: {
        title: null,
        category_id: null,
        body: null
      },
      categories: [],
      errors: ''
    }
  },

  created() {
    axios.get('/api/category')
      .then( res => this.categories = res.data.data)
  },

  methods: {
    storeQuestion(){
      axios.post('/api/question', this.form)
        .then( res => this.$router.push(res.data.path))
        .catch( error => this.errors = error.response.data);
    }
  }

}
</script>

<style>
</style>
