 <?php
	if (isset($_POST)){
		 $name = $_POST['uname'];
	     $psw = $_POST['psw'];
		 if($name=="user" && $psw=="word")
			header("Location: index.php");
		else
			{ echo "<script>
						alert('Wrong username or password');
						window.location.href='login.html';
						</script>";
             }
  }  
?>