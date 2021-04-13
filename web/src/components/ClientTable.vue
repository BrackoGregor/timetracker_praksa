<template>
  <div class="flex flex-col items-center">
    <div>
      <table>
        <thead>
          <tr>
            <th>TEST</th>
            <th>Test</th>
          </tr>
        </thead>
      </table>
    </div>
    <div>
      <Pagination
        :total-pages="totalPages"
        :total="totalData"
        :per-page="perPage"
        :current-page="currentPage"
        @pagechanged="onPageChange"
      ></Pagination>
    </div>
  </div>
</template>

<script>
import Pagination from "../components/Pagination";

export default {
  data() {
    return {
      currentPage: 1,
      totalPages: 11,
      perPage: 10,
      totalData: 110,
    };
  },
  methods: {
    onPageChange(page) {
      console.log(page);
      this.currentPage = page;
    },
  },
  components: { Pagination },
};
</script>

<style>
</style>