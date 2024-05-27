<template>

      <h1>قائمة المقالات</h1>
      <div v-if="errorMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>خطأ!</strong> {{ errorMessage }}
        <button type="button" class="close" @click="closeAlert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul>
        <li v-for="post in posts" :key="posts.id">
          <h2>{{ post.title }}</h2>
          <div v-html="post.excerpt.rendered"></div>
        </li>
      </ul>

  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        posts: [],
        errorMessage: ''
      };
    },
    created() {
      this.fetchPosts();
    },
    methods: {
      async fetchPosts() {
        try {
          const d = await axios.get('https://meshcah.net/relation');
            console.log(d);
        } catch (error) {
          console.error('Error fetching posts:', error);
          this.errorMessage = 'حدث خطأ أثناء جلب المقالات. يرجى المحاولة مرة أخرى لاحقًا.';
        }
      },
      closeAlert() {
        this.errorMessage = '';
      }
    }
  }
  </script>
  