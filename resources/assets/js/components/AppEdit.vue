<template>
  <v-container fluid>
    <v-card class="pa-4">
      <v-form @submit.prevent="update">
        <v-text-field
            v-model="form.title"
            label="title"
            type="text"
            required
          ></v-text-field>

          <markdown-editor v-model="form.body" ref="markdownEditor"></markdown-editor>

          <v-card-actions>
            <v-btn icon small type="submit"><v-icon color="teal">save</v-icon></v-btn>
            <v-btn icon small @click="cancel"><v-icon>cancel</v-icon></v-btn>
          </v-card-actions>

      </v-form>
    </v-card>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      form: {
        title: null,
        body: null
      }
    }
  },

  props: ['data'],

  mounted() {
    this.form = this.data;
  },

  methods: {
    cancel() {
      EventBus.$emit('cancelEditing');
    },

    update() {
      axios.put(`/api/question/${this.form.slug}`, this.form).then(res => this.cancel())
    },
  }
}
</script>

<style>
</style>
