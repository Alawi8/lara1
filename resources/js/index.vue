

<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Header from './components/Header.vue'
import Footer from './components/footer.vue';
import Body from './components/body.vue';
</script>

<template>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <Header/>
                </div>
                <div class="col-xxl-12">
                    <RouterView/>
                </div>
                <div class="col-xxl-12">
                    <Footer/>
                </div>
            </div>
        </div>
  </header>

</template>


