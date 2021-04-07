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
            <li class="mb-6" v-on:click="
                  (isClicked = false),
                    (isClicked2 = true),
                    (isClicked3 = true),
                    (isClicked4 = true),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Add' }"
              >
                <span>
                  <img
                    src="../assets/add.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto opacity-50"
                    v-show="isClicked"
                  />
                  <img
                    src="../assets/add_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked"
                  />
                </span>
              </router-link>
            </li>
            <li class="mb-6" v-on:click="
                  (isClicked = true),
                    (isClicked2 = false),
                    (isClicked3 = true),
                    (isClicked4 = true),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Projects' }"
                
              >
                <span>
                  <img
                    src="../assets/project.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto opacity-50"
                    v-show="isClicked2"
                  />
                  <img
                    src="../assets/project_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked2"
                  />
                </span>
              </router-link>
            </li>
            <li class="mb-6" v-on:click="
                  (isClicked = true),
                    (isClicked2 = true),
                    (isClicked3 = false),
                    (isClicked4 = true),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Clients' }"
                
              >
                <span>
                  <img
                    src="../assets/client.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto opacity-50"
                    v-show="isClicked3"
                  />
                  <img
                    src="../assets/client_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked3"
                  />
                </span>
              </router-link>
            </li>
            <li v-on:click="
                  (isClicked = true),
                    (isClicked2 = true),
                    (isClicked3 = true),
                    (isClicked4 = false),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Calendar' }"
                
              >
                <span>
                  <img
                    src="../assets/calendar.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto opacity-50"
                    v-show="isClicked4"
                  />
                  <img
                    src="../assets/calendar_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked4"
                  />
                </span>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
      <div class="mb-5" v-on:click="
            (isClicked = true),
              (isClicked2 = true),
              (isClicked3 = true),
              (isClicked4 = true),
              (isClicked5 = false)
          ">
        <router-link
          :to="{ name: 'Settings' }"
          
        >
          <span>
            <img
              src="../assets/settings.svg"
              class="rounded-full w-5 h-5 mb-3 mx-auto opacity-50"
              v-show="isClicked5"
            />
            <img
              src="../assets/settings_solid.svg"
              class="rounded-full w-5 h-5 mb-3 mx-auto"
              v-show="!isClicked5"
            />
          </span>
        </router-link>
      </div>
    </nav>
    <nav class="bg-blue w-60 justify-between flex flex-col items-start " v-show="!arrow">
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
                    class="rounded-full w-12 h-12 mb-3 mr-0.5 ml-4 border-solid border-2 border-white   "
                  />
                  <h1 class="text-white mt-2 ml-2 text-2xl font-customFont" >
                    Tomas Kovačič
                  </h1>
                </span>
              </div>
            </li>
            <li class="mb-2" v-on:click="
                  (isClicked = false),
                    (isClicked2 = true),
                    (isClicked3 = true),
                    (isClicked4 = true),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Add' }"
                
              >
                <span class="flex">
                  <img
                    src="../assets/add.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-3.5 opacity-50 mt-1"
                    v-show="isClicked"
                  />
                  <img
                    src="../assets/add_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-3.5 mt-1"
                    v-show="!isClicked"
                  />

                  <h1 class="text-white opacity-50 font-customFont text-lg" v-show="isClicked">
                    Today
                  </h1>
                  <h1 class="text-white font-customFont text-lg" v-show="!isClicked">Today</h1>
                </span>
              </router-link>
            </li>
            <li class="mb-2"  v-on:click="
                  (isClicked = true),
                    (isClicked2 = false),
                    (isClicked3 = true),
                    (isClicked4 = true),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Projects' }"
               
              >
                <span class="flex">
                  <img
                    src="../assets/project.svg"
                    class="rounded-full w-5 h-5 mb-3 opacity-50 mx-3.5 mt-1"
                    v-show="isClicked2"
                  />
                  <img
                    src="../assets/project_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-3.5 mt-1"
                    v-show="!isClicked2"
                  />
                  <h1 class="text-white opacity-50 font-customFont text-lg" v-show="isClicked2">
                    Projects
                  </h1>
                  <h1 class="text-white font-customFont text-lg" v-show="!isClicked2">Projects</h1>
                </span>
              </router-link>
            </li>
            <li class="mb-2" v-on:click="
                  (isClicked = true),
                    (isClicked2 = true),
                    (isClicked3 = false),
                    (isClicked4 = true),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Clients' }"
                
              >
                <span class="flex">
                  <img
                    src="../assets/client.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-3.5 opacity-50 mt-1"
                    v-show="isClicked3"
                  />
                  <img
                    src="../assets/client_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-3.5 mt-1"
                    v-show="!isClicked3"
                  />
                  <h1 class="text-white opacity-50 font-customFont text-lg" v-show="isClicked3">
                    Clients
                  </h1>
                  <h1 class="text-white font-customFont text-lg" v-show="!isClicked3">Clients</h1>
                </span>
              </router-link>
            </li>
            <li v-on:click="
                  (isClicked = true),
                    (isClicked2 = true),
                    (isClicked3 = true),
                    (isClicked4 = false),
                    (isClicked5 = true)
                ">
              <router-link
                :to="{ name: 'Calendar' }"
                
              >
                <span class="flex">
                  <img
                    src="../assets/calendar.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-3.5 opacity-50 mt-1"
                    v-show="isClicked4"
                  />
                  <img
                    src="../assets/calendar_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-3.5 mt-1"
                    v-show="!isClicked4"
                  />
                  <h1 class="text-white opacity-50 font-customFont text-lg" v-show="isClicked4">
                    Calendar
                  </h1>
                  <h1 class="text-white font-customFont text-lg" v-show="!isClicked4">Calendar</h1>
                </span>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
      <div class="mb-5 mr-40" v-on:click="
            (isClicked = true),
              (isClicked2 = true),
              (isClicked3 = true),
              (isClicked4 = true),
              (isClicked5 = false)
          ">
        <router-link
          :to="{ name: 'Settings' }"
          
        >
          <span class="flex">
            <img
              src="../assets/settings.svg"
              class="rounded-full w-5 h-5 mb-3 mx-3.5 opacity-50 mt-1"
              v-show="isClicked5"
            />
            <img
              src="../assets/settings_solid.svg"
              class="rounded-full w-5 h-5 mb-3 mx-3.5 mt-1"
              v-show="!isClicked5"
            />
            <h1 class="text-white opacity-50 font-customFont text-lg" v-show="isClicked5">Settings</h1>
            <h1 class="text-white font-customFont text-lg" v-show="!isClicked5">Settings</h1>
          </span>
        </router-link>
      </div>
    </nav>
    
  </div>
</template>

<script>
export default {
  data: () => {
    return {
      isClicked: true,
      isClicked2: true,
      isClicked3: true,
      isClicked4: true,
      isClicked5: true,
      arrow: true,
    };
  },
};
</script>

<style>


</style>
