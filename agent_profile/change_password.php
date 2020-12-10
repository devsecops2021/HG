<?php
session_start();
include "config.php";
// $conn = mysqli_connect("localhost","markaklq","HyQsoft!@34","markaklq_rmt_tst");
    
if(isset($_POST['submit'])){
    $user_id = $_POST['user_id'];
     $old_password= $_POST['old_password'];
     $new_password= $_POST['new_password'];
      $sql = "select * from users where user_id = '$user_id' and password = '$old_password'";
   
     $query = mysqli_query($conn,$sql);
     $record = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);
     
        if($row == 1){
 
   $_SESSION['user_id'] = $user_id;

 $_SESSION['new_password'] = $new_password;

 
header('Location: otp.php');
        //   $updrow = "update users set password = '".$new_password."' , logincount ='1' where user_id = ". $user_id ."";
// header('Location: otp.php');
// if (mysqli_query($conn, $updrow)) { 
//      header('Location: user_profile.php');
//     }
  }
  else{
       echo "<script type='text/javascript'>alert('Incorrect old  Password');</script>";
      echo "<script>location.href='http://markaz.online/novR7th-QA/logout.php'</script>";
     }
}
?>
