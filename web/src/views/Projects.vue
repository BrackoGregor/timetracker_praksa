<template>
  <div class="w-full flex bg-gray-light">
    <ExtendedNavbar></ExtendedNavbar>
    <div class="flex flex-col w-full">
      <HeaderTable></HeaderTable>
      <div class="flex flex-row">
        <SearchField></SearchField>
        <Filter></Filter>
      </div>
            <div
        class="flex bg-white h-full items-center justify-center mx-3 mb-3 mt-3 rounded-md shadow-headerTable"
      >
        
      </div>
      <ClientTable></ClientTable>
    </div>
  </div>
</template>

<script>
import ClientTable from "../components/ClientTable";
import HeaderTable from "../components/HeaderTable";
import SearchField from "../components/SearchField";
import Filter from "../components/Filter";
import ExtendedNavbar from "../components/ExtendedNavbar";

export default {
  components: {
    ClientTable,
    HeaderTable,
    SearchField,
    Filter,
    ExtendedNavbar,
  },
};
</script>

<style>

</style>