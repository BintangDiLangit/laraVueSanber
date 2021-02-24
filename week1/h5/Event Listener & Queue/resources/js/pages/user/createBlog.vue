<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Create Blog</div>
            <div class="card-body">
                <form @submit.prevent="createBlog" method="post">
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" id="title" class="form-control" v-model="title" required>
                  </div>
                  <div class="form-group">
                      <label for="content">Content</label>
                      <textarea type="text" id="content" class="form-control" v-model="content" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        title: null,
        content: null,
        success: false,
        has_error: false,
        error: '',
        data: []
      }
    },
    methods: {
      createBlog() {
        // get the redirect object
        var app = this

        this.axios.post(`http://localhost:8000/api/blog`, {
              title: app.title,
              content: app.content
            })
            .then(response => {})
                swal("Good job!", "Blog kamu akan segera kami cek!", "success");
              app.success = true
              this.$router.push({path: '/dashboard'})
      }
    }
  }
</script>