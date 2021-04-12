<template>
  <div class="w-full flex bg-gray-light">
    <div class="flex flex-col w-full">
      <HeaderTable></HeaderTable>
      <div
        class="flex bg-white h-full items-center justify-center mx-3 mb-3 rounded-md shadow-headerTable"
      >
        
      </div>
    </div>
  </div>
</template>

<script>
import HeaderTable from "../components/HeaderTable";

export default {
  components: {
    HeaderTable,
  },
};
</script>

<style>
</style>