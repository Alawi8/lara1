<template>
  <div>
    
  </div>
</template>

<script>
import axios from 'axios';

export default {
  mounted(){
    axios.get('https://testing.meshcah.net/public/relation')
    .then(response => console.log(response));
  }
};
</script>
