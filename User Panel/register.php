
<?php
include('header.php');
if(isset($_POST['register'])){
    include('conn.php');
    $fn = $_POST['fn'];
    $ea = $_POST['ea'];
    $num = $_POST['num'];
    $age = $_POST['age'];
    $ps = $_POST['ps'];

    $sqlInsert = "INSERT INTO `register`(`name`, `email`, `contact`, `age`, `pass`) VALUES ('$fn','$ea','$num','$age','$ps')";
   $res = mysqli_query($conn,$sqlInsert);
   if($res){
    echo "<script>
    alert('Registered Successfully!');
    </script>";
   }
}
?>

<main class="form-signin w-100 m-auto">   
                            
                            <h2>PLEASE REGISTER YOUR ACCOUNT</h2>              
                            <form method="post">
                            <div class="form-floating">
                            <label for="floatingInput">Full Name</label>
          <input type="text" class="form-control" id="floatingInput" placeholder="type your name" name="fn">
        </div>
        <div class="form-floating">
        <label for="floatingInput">Email address</label>
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="ea">
        </div>
        <div class="form-floating">
        <label for="floatingInput"> Contact Number</label>
          <input type="number" class="form-control" id="floatingInput" placeholder="03000000000" name="num">
        </div>
        <div class="form-floating">
        <label for="floatingInput"> Age</label>
          <input type="number" class="form-control" id="floatingInput" name="age">
        </div>
       
        <div class="form-floating">
        <label for="floatingPassword">Password</label>
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="ps">
        </div>
     <br>
       
        <button class="btn w-100 py-2" type="submit" name="register">REGISTER</button>
    
      </form>
      </main>   















   <!-- Start Footer  -->
   <?php
include('footer.php');
 ?>
