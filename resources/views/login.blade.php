
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset("/assets/css/login.css")}}">
    <title>User Login</title>
</head>
<body>
    
   <form method="POST" action="/login">
    @csrf
    <h1>User Login</h1>
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="email" name="email" placeholder="email" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4"> 
      <input type="password" 
      id="password" 
      name="password" 
      placeholder="password"
      class="form-control"/>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input 
          class="form-check-input"
          name = "rememberMe"
          placeholder="email"
          type="checkbox" 
          value="" 
          id="form2Example34" checked />
          <label class="form-check-label" for="form2Example34"> Remember me </label>
        </div>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in
      </button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="/signup">Register</a></p>
  </div>
</form>
</body>
</html>
