<template>
  <div class="flex flex-row h-screen">
    <div class="flex items-center justify-center bg-blue w-full">
      <form
        @submit.prevent="submit"
        class="rounded-3xl bg-white shadow-login w-1/2"
      >
        <div class="text-center">
          <h1 class="font-customFont text-5xl font-semibold mt-6 ml-12 mr-12">
            Create account
          </h1>
          <h1 class="font-customFont text-base mt-2 mb-10 ml-12 mr-12">
            Already have an account?
            <router-link :to="{ name: 'Login' }" class="text-red"
              >Sign in</router-link
            >
          </h1>
        </div>
        <div class="flex flex-row justify-center mx-12">
          <input
            v-model="form.firstname"
            name="firstname"
            type="text"
            autocomplete="firstname"
            required
            class="mr-0.5 w-1/2 pl-6 py-2 mb-4 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-l-full"
            placeholder="First Name"
          />

          <input
            v-model="form.lastname"
            name="lastname"
            type="text"
            autocomplete="lastname"
            required
            class="ml-0.5 w-1/2 pl-6 py-2 mb-4 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-r-full"
            placeholder="Last Name"
          />
        </div>
        <div class="flex flex-col">
          <input
            v-model="form.username"
            name="username"
            type="text"
            required
            class="pl-6 py-2 mx-12 mb-4 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            placeholder="Username"
          />
          <input
            v-model="form.email"
            name="email"
            type="email"
            autocomplete="email"
            required
            class="pl-6 py-2 mx-12 mb-4 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            placeholder="Email Address"
          />

          <input
            v-model="form.password"
            name="password"
            type="password"
            autocomplete="password"
            required
            class="pl-6 py-2 mx-12 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            placeholder="Password"
          />
        </div>

        <h1
          class="pl-6 mx-12 mt-4 font-light font-customFont text-xl text-red text-center"
        >
          {{ errors }}
        </h1>

        <div class="flex flex-col">
          <button
            type="submit"
            class="mx-12 mt-10 mb-7 text-white font-customFont text-2xl font-medium bg-red rounded-full py-2 hover:bg-opacity-80"
          >
            Sign up
          </button>
        </div>
      </form>
    </div>
    <div class="flex flex-col px-3 sm:max-w-2xl mx-8">
      <div>
        <img
          src="../assets/register.svg"
          class="flex w-10/12 h-10/12 ml-10 pt-24"
        />
      </div>
      <div class="my-12 ml-4 .w-80 pt-14">
        <h1 class="text-6xl font-customFont">Solve-x TimeTracker</h1>
        <p class="font-customFont">Sign up and start managing your time</p>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
import router from "../router";

export default {
  data() {
    return {
      errors: "",
      form: {
        firstname: "",
        lastname: "",
        username: "",
        email: "",
        password: "",
        id_users_roles: 1,
      },
    };
  },
  methods: {
    ...mapActions({
      register: "auth/register",
    }),

    submit() {
      this.register(this.form).then(
        (response) => {
          console.log(response);
          router.replace({
            name: "Login",
          });
        },
        (error) => {
          //this.errors = error.response.data.errors
          var str = JSON.stringify(error.response.data.errors);
          var mySubString = str.substring(
            str.lastIndexOf("[") + 1,
            str.lastIndexOf("]")
          );
          mySubString = mySubString.replace(/^"(.*)"$/, '$1')
          this.errors = mySubString.toString();
        }
      );
    },
  },
};
</script>