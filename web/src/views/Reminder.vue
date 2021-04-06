<template>
  <div class="flex flex-col items-center justify-center h-screen">
    <div class="bg-center w-1/2">
      <img src="../../public/Assets/reminderHeader.png" alt="header_img" />
    </div>
    <div class="flex flex-col text-center items-center">
      <h1 class="font-customFont text-blue text-5xl font-bold mb-4">Ojoj!</h1>
      <h1 class="font-customFont text-blue text-4xl font-bold mb-7">
        V Timetrackerju manjka nekaj ur.
      </h1>
      <h1 class="font-customFont text-blue text-base">
        V Timetrackerju je za obdobje
        <a class="text-blue-light font-semibold"
          >od {{ dateFrom }} do {{ dateTo }}</a
        >
        zabeleženih premalo ur.
      </h1>
      <h1 class="font-customFont text-blue text-base mb-7">
        Minimalno število ur na teden je 30. Prosim, da vnesete mankajoče ure.
      </h1>
      <router-link class="" :to="{ name: 'Login' }">
        <img
          src="../../public/Assets/reminderButtonLogo.png"
          class="object-contain h-5"
          alt="pojdi v timetracker"
        />
      </router-link>
    </div>
    <hr class="w-1/3 my-7 text-gray-loginInputText" />
    <div class="text-center">
      <h1 class="font-customFont text-gray-loginInputText text-sm">
        Sporočilo je bilo generirano dne {{ dateGenerated }}
      </h1>
    </div>
    <div class="flex w-2/3 justify-center mt-7">
      <img src="../../public/Assets/logo.png" class="h-16" alt="logo" />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dateFrom: "15.03.2021",
      dateTo: "22.03.2021",
      dateGenerated: "23.03.2021 09:01:10",
    };
  },
};
</script>

<style>
</style>