<?php require ('db.php');
if(isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLogged']){
    header('Location:http://localhost/finalBizmillion/userpannel/index.php');
}
if(isset($_POST['login'])){
   $email=mysqli_real_escape_string($db,$_POST['email']);
   $password=mysqli_real_escape_string($db,$_POST['password']);
   $query = "SELECT * FROM `user` WHERE email='$email' AND password='$password'";
   $queryRun = mysqli_query($db,$query);
   if(mysqli_num_rows($queryRun)){
    $_SESSION['isUserLoggedIn'] = true;
    $_SESSION['email'] = $email;
    header('Location:http://localhost/finalBizmillion/userpannel/index.php');
   }else{
    echo "<script>alert('Incorrect email or Password !')</script>";
   }
}
?>