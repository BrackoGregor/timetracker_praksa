<template>
  <div class="flex flex-col w-full">
    <HeaderTable></HeaderTable>
    <ClientTable></ClientTable>
  </div>
</template>

<script>
import ClientTable from "../components/ClientTable";
import HeaderTable from "../components/HeaderTable";
import ExtendedNavbar from "../components/ExtendedNavbar"

export default {
  components: {
    ClientTable,
    HeaderTable,
    ExtendedNavbar,
  },
};
</script>

<style>
</style>