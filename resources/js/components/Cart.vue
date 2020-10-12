<template>
  <div></div>
</template>
<script>
export default {
  props: ["product"],
  created() {
    console.log("test", this.product);
  },
};
</script>
