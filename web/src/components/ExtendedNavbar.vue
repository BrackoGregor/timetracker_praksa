<template>
  <div class="flex flex-row h-screen shadow-sideBar">
    <div class="w-full max-h-full bg-blue-light overflow-y-scroll">
      <nav
        class="bg-blue-light w-60 justify-between items-center flex flex-col"
      >
        <div class="mt-5 mb-3">
          <div class="flex">
            <img src="../assets/search.svg" class="h-5 w-5 mt-1" />
            <input
              type="text"
              class="placeholder-opacity-25 w-36 bg-blue-light text-center text-white font-customFont text-xl"
              :placeholder="searchText"
            />
          </div>
          <hr class="w-44 object-center text-white opacity-50 mt-1" />
        </div>
      </nav>
      <div
        class="ml-4 mr-4 h-8 w-50 text-center"
        v-for="con in clients"
        :key="con.name"
      >
        <router-link :to="{ name: 'ClientsID', params: { id: con.id }}">
          <h1 class="text-white opacity-70 font-customFont text-xl" @click="sendId(con.id)">
            {{ con.name }}
          </h1>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    clients: {
      type: Array
    },
    searchText:{
      type: String
    }
  },
  data() {
    return {
      content: [],
    };
  },
  computed: {
    currentRouteName() {
      return this.$route.name.toLowerCase().trim();
    },
  },
    methods: {
      sendId(event){
        //console.log(event);
        this.$emit('currentId', event);
      }
    }

};
</script>

<style>
input::placeholder {
  @apply text-white;
  @apply opacity-50;
}

a.router-link-exact-active > h1 {
  @apply opacity-100;
}

/* width */
::-webkit-scrollbar {
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #256074;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #032a4e;
  border-radius: 15px;
  height: 40;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #032444;
}
</style>
