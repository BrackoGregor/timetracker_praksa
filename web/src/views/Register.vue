<template>
  <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
  <div class="grid grid-cols-2 divide-x">
    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl mx-8">
      <div><h1>Create account</h1></div>
      <div>
        <h1>Already have an account? <a href="/login">Sign in</a></h1>
      </div>
      <div>
        <div>
          <input type="text" placeholder="First Name" required autofocus />
          <input type="text" class="form-control" placeholder="Last Name" required autofocus />
        </div>
        <div>
          <input type="email" class="form-control" placeholder="Email Adress" required autofocus/>
        </div>
        <div>
          <input type="password" class="form-control" placeholder="Password" minlength="8" required />
        </div>
        <div>
          <button type="submit">Sign up</button>
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
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
      </div>
    </div>
  </div>
</div>

</template>

<script>
export default {};
</script>
