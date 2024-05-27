<template>
  <div>
    
  </div>
</template>

<script>
import axios from 'axios';

export default {
  mounted(){
    axios.get('https://jsonplaceholder.typicode.com/posts/1')
    .then(response => console.log(response));
  }
};
</script>
