<template>
  <div class="flex flex-row h-screen">
    <div class="flex items-center justify-center bg-gray-light w-full">
      <form class="rounded-3xl bg-white shadow-login w-1/2">
        <div class="text-center">
          <h1
            class="font-customFont text-8xl font-semibold mt-7 mb-14 ml-12 mr-12"
          >
            Sign in
          </h1>
        </div>
        <div class="flex flex-col">
          <input
            name="email"
            type="email"
            autocomplete="email"
            required
            class="pl-6 py-2 mx-12 mb-8 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            placeholder="Email Address"
          />
          <input
            name="password"
            type="password"
            autocomplete="password"
            required
            class="pl-6 py-2 mx-12 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            placeholder="Password"
          />
        </div>
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
        <div class="flex flex-col">
          <button
            class="mx-12 mt-16 mb-7 text-white font-customFont text-2xl font-medium bg-red rounded-full py-2"
          >
            Sign in
          </button>
          <button
            class="mx-12 mb-12 text-white font-customFont text-2xl font-medium bg-blue rounded-full py-2"
          >
            Create Account
          </button>
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
export default {};
</script>

<style>
</style>
