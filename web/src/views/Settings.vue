<template>
  <div class="w-full flex bg-gray-light">
    <div class="flex flex-col w-full">
      <HeaderTable></HeaderTable>
      <div
        class="flex flex-col bg-white h-full mx-3 mb-3 items-center rounded-md shadow-headerTable"
      >
        <div class="flex flex-row h-32 w-84 mt-5">
          <img
            src="../assets/person.svg"
            class="rounded-full w-32 h-32 mb-3 mr-0.5 ml-4 border-solid border-2 border-white"
          />
          <label
            class="ml-4 w-44 h-20 flex flex-col items-center mt-5 px-4 py-1 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white"
          >
            <svg
              class="w-8 h-8"
              fill="currentColor"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
              <path
                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"
              />
            </svg>
            <span class="mt-2 leading-normal font-customFont text-xl"
              >Change picture</span
            >
            <input type="file" class="hidden" />
          </label>
        </div>
        <div class="h-18 w-full text-center mt-10">
          <label class="font-customFont text-xl">
            First name:
            <input
              name="firstname"
              type="text"
              autocomplete="firstname"
              required
              class="w-56 pl-6 py-2 mb-8 mr-24 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            />
          </label>

          <label class="ml-14 font-customFont text-xl">
            Last name:
            <input
              name="firstname"
              type="text"
              required
              class="w-56 pl-6 py-2 mb-8 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            />
          </label>
        </div>
        <div class="h-18 w-full text-center mt-4">
          <label class="ml-7 font-customFont text-xl">
            E-mail:
            <input
              name="firstname"
              type="email"
              required
              class="w-56 pl-6 py-2 mb-8 mr-24 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            />
          </label>

          <label class="ml-14 font-customFont text-xl">
            Username:
            <input
              name="firstname"
              type="text"
              required
              class=" w-56 pl-6 py-2 mb-8 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            />
          </label>
        </div>
        <div class="h-18 w-full text-center mt-4">
          <label class="ml-4 font-customFont text-xl">
            New password:
            <input
              name="password"
              type="password"
              required
              class="w-56 pl-6 py-2 mb-8 mr-20 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            />
          </label>

          <label class="font-customFont text-xl">
            Repeat new password:
            <input
              name="password_repeat"
              type="password"
              required
              class="mr-10 w-56 pl-6 py-2 mb-8 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            />
          </label>
        </div>
        <div class="h-18 w-full text-center mt-8">
          <button
            class="text-white font-customFont text-2xl font-medium bg-red rounded-full py-2 hover:bg-opacity-80 w-52"
          >
            Save
          </button>
        </div>
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