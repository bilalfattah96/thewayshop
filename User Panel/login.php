<?php

include('header.php');

if (isset($_POST['log'])) {
  include('conn.php');
  $e = $_POST['email'];
  $p = $_POST['pass'];
  $sqlLogin = "SELECT * FROM `register` WHERE `email` = '$e' AND `pass` = '$p'";
  $res = mysqli_query($conn, $sqlLogin);
  $row = mysqli_fetch_array($res);
  if (mysqli_num_rows($res) > 0) {
    $_SESSION['n'] = $row['name'];
    echo "<script>
    window.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('Invalid');
    </script>";
  }
}
?>




<main class="form-signin w-100 m-auto">

  <h2>PLEASE LOGIN TO YOUR ACCOUNT FIRST</h2>
  <form method="post">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="btn w-100 py-2" type="submit" name="log">LOGIN</button>

  </form>
</main>
<!-- Start Footer  -->
<?php
include('footer.php');
?>