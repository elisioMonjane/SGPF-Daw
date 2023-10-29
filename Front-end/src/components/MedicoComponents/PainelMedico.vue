<script setup>
import sidebar from '../MedicoComponents/sidebar.vue'
import Headr from '../MedicoComponents/Headr.vue'
import Dashmain from '../MedicoComponents/Dashmain.vue'
import footer from '../MedicoComponents/footer.vue'
</script>

<template>

  <Headr/>
  <sidebar/>
  <Dashmain/>


</template>
<style>

@import '@/assets/css/demo.css';
@import '@/assets/css/bootstrap.min.css';
@import '@/assets/css/ready.css';

@font-face {
  font-family: 'MinhaFonte';
  src: url(~@/assets/fonts/line-awesome0176.eot) format('truetype');
  src: url(~@/assets/fonts/line-awesomeeb4f.eot);
  src: url(~@/assets/fonts/line-awesomeeb4f.svg);
  src: url(~@/assets/fonts/line-awesomeeb4f.ttf);
  src: url(~@/assets/fonts/line-awesomeeb4f.woff);
  src: url(~@/assets/fonts/line-awesomeeb4f.woff2);
  
}
</style>
