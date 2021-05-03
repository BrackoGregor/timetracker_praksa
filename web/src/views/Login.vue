<template>
  <div class="flex flex-row h-screen w-full">
    <div class="flex items-center justify-center bg-gray-light w-full">
      <form
        @submit.prevent="submit"
        class="rounded-3xl bg-white shadow-login w-2/3"
      >
        <div class="text-center">
          <h1
            class="font-customFont text-8xl font-semibold mt-7 mb-14 ml-12 mr-12"
          >
            Sign in
          </h1>
        </div>
        <div class="flex flex-col">
          <input
            v-model="form.username"
            name="email"
            type="email"
            autocomplete="email"
            required
            class="pl-6 py-2 mx-12 mb-8 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
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
        
        <h1 class="pl-6 mx-12 mt-5 font-light font-customFont text-xl text-center text-red">{{text}}</h1>

        <div class="flex flex-row ml-12 mr-12 justify-between">
          <label class="flex items-center mt-8">
            <input type="checkbox" class="h-5 w-5 text-gray-600" checked /><span
              class="text-black font-customFont text-xl font-medium ml-3"
              >Remember me?</span
            >
          </label>
          <a href="#" class="text-red font-customFont text-xl font-medium mt-8"
            >Forget password?</a
          >
        </div>
        <div class="flex flex-col text-center">
          <button
            type="submit"
            class="mx-12 mt-16 mb-7 text-white font-customFont text-2xl font-medium bg-red rounded-full py-2"
          >
            Sign in
          </button>
          <router-link
            class="mx-12 mb-12 text-white font-customFont text-2xl font-medium bg-blue rounded-full py-2"
            :to="{ name: 'Register' }"
            tag="button"
            >Create Account</router-link
          >
        </div>
      </form>
    </div>

    <div class="w-5/6 h-screen bg-blue text-center">
      <h1
        class="text-white font-semibold font-customFont text-7xl mt-52 pl-4 pr-4"
      >
        Welcome Back!
      </h1>
      <p class="text-white font-customFont mt-6 text-2xl pl-4 pr-4">
        Sign in and start manage your time
      </p>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
import router from "../router"; 

export default {
  data() {
    return {
      text: "",
      form: {
        grant_type: "password",
        username: "",
        password: "",
        client_id: "2",
        client_secret: "KpKQfp5URCm8cn3h4ZPeF16kjnSLfCcuUBrTkDrv",
        scope: null,
      },
    };
  },
  methods: {
    ...mapActions({
      login: "auth/login",
    }),

    submit() {
      //console.log(this.form);
      this.login(this.form).then(()=> {
        router.replace({
          name:'Add'
        })
      }).catch(()=>{
        this.text = "The email address or password is incorrect!"
      })
    },
  },
};
</script>

<style>
</style>
