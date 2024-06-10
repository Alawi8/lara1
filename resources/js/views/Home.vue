<template>
  <div>


    <div class="container-fluid mt-5">
      <div v-if="isLoading" class="text-center">
        <div class="spinner-border" role="status">
          <span class="sr-only"></span>
        </div>
      </div>
      <div v-else>
        <div class="row row-cols-1 g-4">
          <div class="col-xxl-3 card l-3" v-for="post in paginatedPosts" :key="post.id">
            <img .src="post.img_url" alt="Image" class="img-fluid" />
            <h2>{{ post.title }}</h2>
            <div v-html="post.slug"></div>
          </div>
        </div>
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item" :class="{ disabled: currentPage === 1 }">
              <button class="page-link" @click="prevPage">
                Previous
              </button>
            </li>
            <li class="page-item" v-for="page in totalPages" :key="page" :class="{ active: currentPage === page }">
              <button class="page-link" @click="goToPage(page)">
                {{ page }}
              </button>
            </li>
            <li class="page-item" :class="{ disabled: currentPage === totalPages }">
              <button class="page-link" @click="nextPage">
                Next
              </button>
            </li>
          </ul>
        </nav>
      </div>
      <div v-if="errorMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>خطأ!</strong> {{ errorMessage }}
        <button type="button" class="close" @click="closeAlert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <button @click="goToOtherData">Go to Other Data</button>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      posts: [],
      isLoading: true,
      errorMessage: "",
      currentPage: 1,
      postsPerPage: 8,
    };
  },
  computed: {
    totalPages() {
      return Math.ceil(this.posts.length / this.postsPerPage);
    },
    paginatedPosts() {
      const start = (this.currentPage - 1) * this.postsPerPage;
      const end = start + this.postsPerPage;
      return this.posts.slice(start, end);
    },
  },
  mounted() {
    this.fetchPosts();
  },
  methods: {
    async fetchPosts() {
      try {
        const response = await axios.get(
          "https://testing.meshcah.net/public/relation"
        );
        this.posts = response.data;
      } catch (error) {
        console.error("Error fetching posts:", error);
        this.errorMessage =
          "حدث خطأ أثناء جلب المقالات. يرجى المحاولة مرة أخرى لاحقًا.";
      } finally {
        this.isLoading = false;
      }
    },
    // pagnation
    goToPage(page) {
      this.currentPage = page;
    },
    prevPage() {
      if (this.currentPage > 1) {
        this.currentPage--;
      }
    },
    nextPage() {
      if (this.currentPage < this.totalPages) {
        this.currentPage++;
      }
    },
    closeAlert() {
      this.errorMessage = "";
    },
  },
};
</script>

<style>
.spinner-border {
  display: block;
  margin: 50px auto;
}

.pagination {
  justify-content: center;
}
</style>
