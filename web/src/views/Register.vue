<template>
  <div class="flex flex-row h-screen">
    <div class="flex items-center justify-center bg-blue w-full">
      <form class="rounded-3xl bg-white shadow-login w-1/2">
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
              name="firstname"
              type="text"
              autocomplete="firstname"
              required
              class="mr-0.5 w-1/2 pl-6 py-2 mb-4 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-l-full"
              placeholder="First Name"
            />

            <input
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
            name="username"
            type="text"
            required
            class="pl-6 py-2 mx-12 mb-4 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
            placeholder="Username"
          />
          <input
            name="email"
            type="email"
            autocomplete="email"
            required
            class="pl-6 py-2 mx-12 mb-4 font-light font-customFont text-xl placeholder-gray-loginInputText bg-gray-loginInputBg rounded-full"
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

        <div class="flex flex-col">
          <button
            class="mx-12 mt-16 mb-7 text-white font-customFont text-2xl font-medium bg-red rounded-full py-2 hover:bg-opacity-80"
          >
            Sign up
          </button>
        </div>
      </form>
    </div>
    <div class="flex flex-col px-3 sm:max-w-2xl mx-8">
      <div>
        <img src="../assets/register.svg" class="flex w-10/12 h-10/12 ml-10 pt-24" />
      </div>
      <div class="my-12 ml-4 .w-80 pt-14	">
        <h1 class="text-6xl font-customFont">Solve-x TimeTracker</h1>
        <p class="font-customFont ">
          Sign up and start managing your time
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
