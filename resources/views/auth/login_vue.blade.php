<!doctype html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Vue.js 3 Login (with Composition API)</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<script src="https://cdn.jsdelivr.net/npm/vue@3"></script>

<div id="app">
  <div id="login">
    <div id="description">
      <h1>Login</h1>
      <p>By logging in you agree to the ridiculously long terms that you didn't bother to read.</p>
    </div>
    <div id="form">
      <form method="POST" action="{{ route('login') }}">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus v-model="email" placeholder="elon@musk.io" >

        <label for="password">Password</label>&nbsp;
        <i class="fas" :class="[passwordFieldIcon]" @click="hidePassword = !hidePassword"></i>
        <input :type="passwordFieldType" id="password" v-model="password" placeholder="**********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        <button type="submit">Log in</button>
      </form>
    </div>
  </div>
</div>

<script>
  Vue.createApp({
    setup() {
      const email = Vue.ref("");
      const hidePassword = Vue.ref(true);
      const password = Vue.ref("");

      const passwordFieldIcon = Vue.computed(() => hidePassword.value ? "fa-eye" : "fa-eye-slash");
      const passwordFieldType = Vue.computed(() => hidePassword.value ? "password" : "text");

      const doLogin = () => alert("Not implemented yet :O");

      return {
        email,
        hidePassword,
        password,

        passwordFieldIcon,
        passwordFieldType,

        doLogin
      }
    }
  }).mount("#app");
</script>