<template>
  <div
    class="flex bg-blue h-12 items-center justify-center mx-3 my-3 rounded-md shadow-headerTable"
  >
    <h1 class="font-customFont font-medium text-white text-2xl">
      {{ currentRouteName }}
    </h1>
  </div>
</template>

<script>
export default {
  computed: {
    currentRouteName() {
      return this.$route.name.trim();
    },
  },
};
</script>

<style>
</style>