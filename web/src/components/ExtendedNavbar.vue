<template>
  <div class="flex flex-row h-screen shadow-sideBar">
    <div class="w-full h-full bg-blue-light overflow-y-scroll">
      <nav
        class="bg-blue-light w-60 justify-between items-center flex flex-col"
      >
        <div class="mt-5 mb-3">
          <div class="flex">
            <img src="../assets/search.svg" class="h-5 w-5 mt-1" />
            <input
              type="text"
              class="placeholder-opacity-25 w-36 bg-blue-light text-center text-white font-customFont text-xl"
              placeholder="search for clients"
            />
          </div>
          <hr class="w-44 object-center text-white opacity-50 mt-1" />
        </div>
      </nav>
      <div
        class="ml-4 mr-4 h-8 w-50 text-center"
        v-for="con in content"
        :key="con.name"
      >
        <h1 class="text-white opacity-70 font-customFont text-xl">
          {{ con.name }}
        </h1>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      content: [
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },
        { name: "Solve-x d.o.o." },

      ],
    };
  },
};
</script>

<style>
input::placeholder {
  @apply text-white;
  @apply opacity-50;
}
</style>
