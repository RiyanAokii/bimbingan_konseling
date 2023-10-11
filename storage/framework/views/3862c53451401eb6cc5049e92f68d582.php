
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/style.css')); ?>">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>SIGNIN</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/dashboard" class="sign-in-form" method="post">
            <h2 class="title">LOGIN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
          </form>

          <!-- REGISTER -->


        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>SELAMAT DATANG!</h3>
            <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum repellat recusandae fuga mollitia ab harum quaerat optio asperiores! Et voluptatum molestias, quam atque doloribus obcaecati!
            </p>
            <!-- <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button> -->
          </div>
          <div class="left.panel.image">
          <img src="hero.png" class="image" alt="" />
        </div>
        
        </div>

    <script src="halaman/java/app.js"></script>
  </body>
</html>
<?php /**PATH C:\Laravel10\Project_BK\resources\views/sesi/index.blade.php ENDPATH**/ ?>