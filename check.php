<?php
$con=mysqli_connect("localhost","root","","final");
$plogin="false";
if(isset($_POST['sub']))
{
    $a=$_POST['uname'];
    $b=$_POST['psw'];
    $query=mysqli_query($con,"SELECT* FROM user WHERE user_id='$a' AND password='$b'");
    if(mysqli_num_rows($query)==1 )
        {
            $plogin="true";
            session_start();
            $_SESSION['u_id']=$a;
            header("Location:crossword.php");
        }
     else
        {
             echo "<script>
						alert('Wrong username or password');
						window.location.href='index.php';
						</script>";
        }
}
?>
