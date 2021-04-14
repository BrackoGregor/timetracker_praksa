<template>
  <div class="flex flex-col w-full">
    <div class="overflow-x-auto">
      <div class="align-middle inline-block min-w-full">
        <div
          class="shadow overflow-hidden border-b border-gray-light rounded-t-md"
        >
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue">
              <tr class="font-customFont text-white">
                <th
                  scope="col"
                  class="px-6 py-3 text-center text-base font-medium uppercase tracking-wider"
                >
                  Projects
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-base font-medium uppercase tracking-wider"
                >
                  Note
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-base font-medium uppercase tracking-wider"
                >
                  Start time
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-base font-medium uppercase tracking-wider"
                >
                  End time
                </th>
                <th scope="col" class="px-6 py-3 text-cen">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-light">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center justify-center">
                    <h1 class="font-customFont">Mobilna aplikacija</h1>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h1 class="font-customFont">TODO lista</h1>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h1 class="font-customFont">11.01.2021, 8:11</h1>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h1 class="font-customFont">11.01.2021, 9:11</h1>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap text-center font-customFont font-medium"
                >
                  <a href="#" class="text-blue hover:text-blue-light">Edit</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center justify-center">
                    <h1 class="font-customFont">Mobilna aplikacija</h1>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h1 class="font-customFont">TODO lista</h1>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h1 class="font-customFont">11.01.2021, 8:11</h1>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h1 class="font-customFont">11.01.2021, 9:11</h1>
                </td>
                <td
                  class="px-6 py-4 whitespace-nowrap font-customFont font-medium text-center"
                >
                  <a href="#" class="text-blue hover:text-blue-light">Edit</a>
                </td>
              </tr>

              <!-- More items... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="flex justify-center bg-white rounded-b-md">
      <Pagination
        :total-pages="totalPages"
        :total="totalData"
        :per-page="perPage"
        :current-page="currentPage"
        @pagechanged="onPageChange"
      />
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