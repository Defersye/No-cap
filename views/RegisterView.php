<!-- register -->
<div class="register_container">
   <p class="register_error">Пользователь с такой почтой или номером телефона уже зарегистрирован!</p>
   <h2 class="register_title">Registration</h2>
   <form action="/register" class="register_form" method="post">
      <input type="text" id="register_name" class="register_input" placeholder="full name" required>
      <input type="email" id="register_email" class="register_input" placeholder="email" required>
      <input type="password" id="register_password" class="register_input" placeholder="password" required>
      <input type="password" id="register_confirm" class="register_input" placeholder="confirm password" required>
      <input type="file" class="register_input" accept="image/png, image/jpeg, image/jpg" placeholder="image" />
      <p class="register_p">By creating an account, you agree to our <a href="">Terms and Conditions</a>, <a href="">Privacy Policy</a></p>

      <button class="register_btn" type="submit">Create an account</button>
      <p class="register_p">Already registered? <a href="/login">Log in!</a></p>
   </form>
</div>


<!-- login -->
<div class="login_container">
   <h2 class="login_title">Logging in</h2>
   <form action="/login" class="login_form" method="post">
      <input type="email" class="login_input" placeholder="Email" required>
      <input type="password" class="login_input" placeholder="Password" required>

      <button class="login_btn" type="submit">Sign in</button>
      <!-- <p class="login_p"><a href="/forgot">Forgot password?</a></p> -->
      <p class="login_p">Don`t have an account? <a href="/register">Register now!</a></p>
   </form>
</div>

<!-- script -->
<script src="../assets/js/register.js"></script>