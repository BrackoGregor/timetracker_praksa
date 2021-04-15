<template>
  <div
    class="flex bg-blue h-12 items-center justify-center mx-3 my-3 rounded-md shadow-headerTable"
  >
    <h1
      v-if="currentRouteName == 'Add'"
      class="font-customFont font-medium text-white text-2xl"
    >
      {{ currentDate }}
    </h1>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  computed: {
    currentRouteName() {
      return this.$route.name.trim();
    },
    currentDate() {
      const current = new Date();
      const date = current.toDateString();
      return date;
    },
  },
};
</script>

<style>
</style>