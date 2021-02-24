<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Blog
              <router-link :to="{name: 'blog'}" class="float-right" v-if="!$auth.check(1)"> Create Blog </router-link>
            </div>
            <div class="card-body" v-for="blog, index in data">
              <h3>{{data[index].title}}</h3>
              <p>{{data[index].content}}</p>
              ------------------------- {{index+1}} -------------------------
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        success: false,
        has_error: false,
        error: '',
        data: []
      }
    },
    mounted() {
      this.axios.get(`http://localhost:8000/api/blog`)
      .then(response => {
        this.data = response.data
        console.log(this.data)
      })
    },
  }
</script>