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
    <h1
      v-else-if="currentRouteName == 'Clients'"
      class="font-customFont font-medium text-white text-2xl"
    >
      Solve-x
      <!--TODO: GET AS prop -->
    </h1>
    <h1
      v-else-if="currentRouteName == 'Projects'"
      class="font-customFont font-medium text-white text-2xl"
    >
      Project
      <!--TODO: GET AS prop -->
    </h1>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {};
  },
  computed: {
    currentRouteName() {
      return this.$route.name.trim();
    },
    currentDate() {
      return moment().format("LL");
    },
  },
};
</script>

<style>
</style>