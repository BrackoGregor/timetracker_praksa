<template>
  <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="grid grid-cols-2 divide-x">
      <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl mx-8">
        <div><h1 class="text-4xl">Create account</h1></div>
        <div>
          <h1>Already have an account? <a href="/login">Sign in</a></h1>
        </div>
        <div>
          <div>
            <div class="p-2">
              <div
                class="inline-flex items-center bg-white leading-none rounded-full p-2 shadow text-teal text-sm"
              >
                <span class="inline-flex px-2">
                  <input
                    type="text"
                    placeholder="First Name"
                    required
                    autofocus
                  />
                </span>
                <span class="inline-flex px-2">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last Name"
                    required
                    autofocus
                  />
                </span>
              </div>
            </div>
          </div>

          <div class="p-2">
            <div
              class="inline-flex items-center bg-white leading-none rounded-full p-2 shadow text-teal text-sm"
            >
              <span class="inline-flex px-2">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email Adress"
                  required
                  autofocus
                />
              </span>
            </div>
          </div>

          <div class="p-2">
            <div
              class="inline-flex items-center bg-white leading-none rounded-full p-2 shadow text-teal text-sm"
            >
              <span class="inline-flex px-2">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  minlength="8"
                  required
                />
              </span>
            </div>
          </div>

          <div class="p-2">
            <div
              class="bg-red inline-flex items-center leading-none rounded-full p-2 text-white shadow text-sm"
            >
              <span class="inline-flex px-2">
                <button type="submit" class="text-white">Sign up</button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="relative px-3 sm:max-w-sm mx-8">
        <div>
          <img src="../assets/register.svg" class="w-4/5 h-4/5" />
        </div>
        <div>
          <h1>TimeStamp</h1>
        </div>
        <div>
          <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            nonumy eirmod
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
