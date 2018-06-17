<template>
<v-container grid-list-xs>
  <v-layout row wrap>
    <v-flex xs12>
      <v-form @submit.prevent="login" class="ma-4">

        <v-text-field
          v-model="form.email"
          label="E-mail"
          required
        ></v-text-field>

        <v-text-field
          v-model="form.password"
          label="Password"
          type="password"
          required
        ></v-text-field>

        <v-btn color="green" dark type="submit">Login</v-btn>

        </v-form>
    </v-flex>
  </v-layout>
</v-container>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: null,
        password: null
      }
    }
  },

  methods: {
    login() {
      axios.post('/api/auth/login', this.form)
      .then( res => {
        console.log(res.data);
      })
      .catch( error => {
        console.log(error.response.data);
      });
    }
  }
}
</script>

<style>
</style>
