<script setup>

import Headr from '../components/component-front/Headr.vue';
import sidebar from '../components/component-front/sidebar.vue';
import Dashmain from '../components/component-front/Dashmain.vue';

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