<template>
  <div class="flex flex-row h-screen">
    <nav class="bg-blue w-12 justify-between flex flex-col" v-show="arrow">
      <div class="mt-5 mb-10">
        <a href="#" v-on:click="arrow = !arrow">
          <img
            src="../assets/right.svg"
            class="rounded-full w-5 h-5 mb-3 mx-auto"
            v-show="arrow"
          />
        </a>
        <div class="mt-20">
          <ul>
            <li class="mb-6" v-for="link in links" :key="link.id" >
              <router-link :to="{ name: link.route }" >
                <span>
                  <img
                    :src="link.img1"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                  />
                </span>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav
      class="bg-blue w-60 justify-between flex flex-col items-start"
      v-show="!arrow"
    >
      <div class="mt-5">
        <a href="#" v-on:click="arrow = !arrow">
          <img
            src="../assets/left.svg"
            class="rounded-full w-5 h-5 ml-4"
            v-show="!arrow"
          />
        </a>
        <div class="mt-4">
          <ul>
            <li class="mb-0">
              <div>
                <span class="flex">
                  <img
                    src="../assets/person.svg"
                    class="rounded-full w-12 h-12 mb-3 mr-0.5 ml-4 border-solid border-2 border-white"
                  />
                  <h1
                    class="text-white mt-2 ml-4 mr-4 text-2xl font-customFont"
                  >
                    Tomas Kovačič
                  </h1>
                </span>
              </div>
            </li>
            <li class="mb-2" v-for="link in links" :key="link.id">
              <router-link :to="{ name: link.route }" class="router-link-exact-active">
                <span class="flex">
                  <img
                    :src="link.img1"
                    class="rounded-full w-5 h-5 mb-3 mr-2 ml-7 mt-1"
                  />
                  <h1 class="text-white font-customFont text-lg">
                    {{ link.name }}
                  </h1>
                </span>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      arrow: true,
      links: [
        {
          id: 1,
          name: "Today",
          img1: require("../assets/add.svg"),
          img2: require("../assets/add_solid.svg"),
          route: "Add",
        },
        {
          id: 2,
          name: "Projects",
          img1: require("../assets/project.svg"),
          img2: require("../assets/project_solid.svg"),
          route: "Projects",
        },
        {
          id: 3,
          name: "Clinets",
          img1: require("../assets/client.svg"),
          img2: require("../assets/client_solid.svg"),
          route: "Clients",
        },
        {
          id: 4,
          name: "Calendar",
          img1: require("../assets/calendar.svg"),
          img2: require("../assets/calendar_solid.svg"),
          route: "Calendar",
        },
        {
          id: 5,
          name: "Settings",
          img1: require("../assets/settings.svg"),
          img2: require("../assets/settings_solid.svg"),
          route: "Settings",
        },
      ],
    };
  },
};
</script>

<style>
</style>
