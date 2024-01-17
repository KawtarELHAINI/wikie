<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['nameRole']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>wikie </title>
    
</head>

<body>
<section >
<div class="bg-gray-100 flex justify-center items-center h-screen">
     
<div class="w-1/2 h-screen hidden lg:block">
  <img src="images/wiki3.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
                
        <div class="mb-10">
                <div class="flex items-center">
                <h3 class="text-3xl font-extrabold">Sign Up</h3>
                    <img src="images/wikielogo.png" alt="Logo" class="w-16 h-16 ml-4">
                    
                </div>
                       
                    </div> 
                    <div id="form">
              <form id="form" class="space-y-4 md:space-y-6" action="/wikie/app/controller/auth.php" method="post">
              <?php
                 if (isset($_SESSION['error'])) {
                    ?>
                  <p class="text-red-600"><?= $_SESSION['error'] ?> </p>
                  <?php  
                    unset($_SESSION['error']);
                } else { ?>
                  
              <?php }  ?>  
                  <div>
                      <label for="username"  class="block text-sm font-medium text-gray-700">username</label>
                      <input id="username" type="username" name="username" class="mt-1 p-2 w-full border rounded-md" placeholder="username">
                      <p id="usernameError" class="text-red-600 font-medium"> </p>
                  </div>
                  <div>
                      <label for="email"  class="block text-sm font-medium text-gray-700">Your email</label>
                      <input id="email" type="email" name="email" class="mt-1 p-2 w-full border rounded-md" placeholder="email">
                      <p id="emailError" class="text-red-600 font-medium"> </p>
                  </div>
                  <div>
                      <label for="password"  class="block text-sm font-medium text-gray-700">password</label>
                      <input id="password" type="password" name="password" class="mt-1 p-2 w-full border rounded-md" placeholder="password">
                      <p id="passwordError" class="text-red-600 font-medium"> </p>
                  </div>
                  &
                
                  <button name="register" type="submit" class="w-full text-white hover:bg-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-500 ">Sign up</button>
                  <p class="text-sm mt-6 text-center">you already have an account <a href="login.php" class="text-gray-600 font-semibold hover:underline ml-1 whitespace-nowrap">login</a></p>
              </form>
              </div>
          </div>
      </div>
  </div>
</section>
<script src="/wikie/public/js/regexRegister.js"></script>
</body>
</html>

