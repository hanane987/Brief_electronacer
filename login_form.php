<!-- <?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['type'] = $row['user_type'];
         header('location:products_admin.php');

      }elseif ($row['user_type'] == 'user' && $row['valide'] == 1) {
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['type'] = $row['user_type'];
         header('location:user_page.php');
     } else {
      $error[] = 'L\'admin n\'a pas encore accepté ta demande d\'inscription';

   }
     
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   
   <style>
      body {
         background-image: url('images/black.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
         background-size: cover;
         background-repeat: no-repeat;
         background-attachment: fixed;
         margin: 0; /* Remove default body margin */
         font-family: Arial, sans-serif; /* Specify a fallback font family */
      }
 

.form-container {
   background:transparent;
   border-radius: 10px;
   max-width: 400px;
   margin: auto;
   padding: 20px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
   margin-top: 50px;
}

.form-container h3 {
   text-align: center;
   color: #333;
}

.form-container form {
   display: flex;
   flex-direction: column;
   align-items: center;
}

.form-container input {
   margin: 10px 0;
   padding: 10px;
   width: 100%;
   box-sizing: border-box;
}

.form-btn {
   background-color: #4CAF50;
   color: white;
   padding: 10px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
}

.form-btn:hover {
   background-color: #45a049;
}

.error-msg {
   color: #ff3333;
   margin-top: 10px;
   text-align: center;
}

p {
   text-align: center;
}

a {
   color: #0066cc;
   text-decoration: none;
}

a:hover {
   text-decoration: underline;
}

      
   </style>

</head>
<body>
  
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html> 