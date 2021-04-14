<template>
  <div>
    {{message}}
  </div>
</template>

<script>
const default_layout = "default";

export default {
  computed: {},
  data() {
      return {
          message:'這裡可以放VUE文字'
      }
  }
};


var map = L.map('map', {
    center: [51.505, -0.09],
    zoom: 13
});
</script>
