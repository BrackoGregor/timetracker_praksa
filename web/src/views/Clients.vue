<template>
  <div class="flex flex-col w-full">
    <HeaderTable></HeaderTable>
    <ClientTable></ClientTable>
  </div>
</template>

<script>
import ClientTable from "../components/ClientTable";
import HeaderTable from "../components/HeaderTable";

export default {
  components: {
    ClientTable,
    HeaderTable,
  },
};
</script>

<style>
</style>