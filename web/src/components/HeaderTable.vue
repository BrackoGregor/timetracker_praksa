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
      Pick a client
      <!--TODO: GET AS prop -->
    </h1>
    <h1
      v-else-if="currentRouteId == currentId"
      class="font-customFont font-medium text-white text-2xl"
    >
      {{clients[currentId-1].name}}
      <!--TODO: GET AS prop -->
    </h1>
    <h1
      v-else-if="currentRouteName == 'Projects'"
      class="font-customFont font-medium text-white text-2xl"
    >
      Project
      <!--TODO: GET AS prop -->
    </h1>
    <h1>

    </h1>
  </div>
</template>

<script>
import moment from "moment";
export default {
  props: {
    clients: Array,
    currentId: Number,
  },
  data() {
    return {};
  },
  computed: {
    currentRouteName() {
      return this.$route.name;
    },
    currentDate() {
      return moment().format("LL");
    },
    currentRouteId(){
      return this.$route.params.id;
    }
  },
};
</script>

<style>
</style>