<template>
  <div class="flex flex-row h-full">
    <!-- Sidebar -->
    <nav class="bg-blue w-12 justify-between flex flex-col">
      <div class="mt-5 mb-10">
        <a href="#" v-on:click="arrow = !arrow">
          <img
            src="../assets/right.svg"
            class="rounded-full w-5 h-5 mb-3 mx-auto"
            v-show="arrow"
          />
          <img
            src="../assets/right_solid.svg"
            class="rounded-full w-5 h-5 mb-3 mx-auto"
            v-show="!arrow"
          />
        </a>
        <div class="mt-20">
          <ul>
            <li class="mb-6">
              <a
                href="#"
                v-on:click="
                  (isClicked = false),
                    (isClicked2 = true),
                    (isClicked3 = true),
                    (isClicked4 = true),
                    (isClicked5 = true)
                "
              >
                <span>
                  <img
                    src="../assets/add.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="isClicked"
                  />
                  <img
                    src="../assets/add_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked"
                  />
                </span>
              </a>
            </li>
            <li class="mb-6">
              <a
                href="#"
                v-on:click="
                  (isClicked = true),
                    (isClicked2 = false),
                    (isClicked3 = true),
                    (isClicked4 = true),
                    (isClicked5 = true)
                "
              >
                <span>
                  <img
                    src="../assets/project.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="isClicked2"
                  />
                  <img
                    src="../assets/project_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked2"
                  />
                </span>
              </a>
            </li>
            <li class="mb-6">
              <a
                href="#"
                v-on:click="
                  (isClicked = true),
                    (isClicked2 = true),
                    (isClicked3 = false),
                    (isClicked4 = true),
                    (isClicked5 = true)
                "
              >
                <span>
                  <img
                    src="../assets/client.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="isClicked3"
                  />
                  <img
                    src="../assets/client_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked3"
                  />
                </span>
              </a>
            </li>
            <li>
              <a
                href="#"
                v-on:click="
                  (isClicked = true),
                    (isClicked2 = true),
                    (isClicked3 = true),
                    (isClicked4 = false),
                    (isClicked5 = true)
                "
              >
                <span>
                  <img
                    src="../assets/calendar.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="isClicked4"
                  />
                  <img
                    src="../assets/calendar_solid.svg"
                    class="rounded-full w-5 h-5 mb-3 mx-auto"
                    v-show="!isClicked4"
                  />
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="mb-5">
        <a
          href="#"
          v-on:click="
            (isClicked = true),
              (isClicked2 = true),
              (isClicked3 = true),
              (isClicked4 = true),
              (isClicked5 = false)
          "
        >
          <span>
            <img
              src="../assets/settings.svg"
              class="rounded-full w-5 h-5 mb-3 mx-auto"
              v-show="isClicked5"
            />
            <img
              src="../assets/settings_solid.svg"
              class="rounded-full w-5 h-5 mb-3 mx-auto"
              v-show="!isClicked5"
            />
          </span>
        </a>
      </div>
    </nav>
    <div class="px-16 py-4 text-gray-700 bg-gray-200 h-screen w-screen">
      <!-- Content -->
    </div>
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
