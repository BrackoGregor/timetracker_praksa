<template>
  <div class="w-full flex bg-gray-light">
    <div class="flex flex-col w-full">
      <HeaderTable></HeaderTable>
      <div class="flex flex-row">
        <SearchField></SearchField>
        <Filter></Filter>
      </div>
      <div class="flex h-full justify-center mx-3 mb-3 mt-3">
        <TodayTable></TodayTable>
      </div>
    </div>
  </div>
</template>

<script>
import TodayTable from "../components/TodayTable";
import HeaderTable from "../components/HeaderTable";
import SearchField from "../components/SearchField";
import Filter from "../components/Filter";

export default {
  components: {
    TodayTable,
    HeaderTable,
    SearchField,
    Filter,
  },
};
</script>

<style>
</style>