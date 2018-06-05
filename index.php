
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <title>CrossCode</title>
	  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
	  <meta name="author" content="Vincent Garreau" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	  <link rel="stylesheet" media="screen" href="css/style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	  <script src="particle/typed.js"></script>
	  <style type="text/css">
		input[type=text], input[type=password] {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}
		.button {
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 8px;
		    cursor: pointer;
		    width: 100%;
		}

		.button:hover {
		    opacity: 0.8;
		}
		.container {
		    position: absolute;
            width: 300px;
            height: 200px;
            z-index: 15;
            top: 30%;
            left: 50%;
            margin: -100px 0 0 -150px;
		}
		body{
				margin: 0px;
				padding: 0px;
				height: 100vh;
				background-color:black;
				}
		#particles-js{
			height:100%;
			background-color: black;
		}
		#typed{
			color: white;
			font-size: 60px;
			position: absolute;

            z-index: 15;
            top: 20%;
            left: 50%;
            margin: -100px 0 0 -150px;
		}
	  </style>
	</head>
	<body>
		    <div id="particles-js">
		    	<div id="typed-strings">
				     <h1>Hello World</h1>
				     <h1>Welcome to</h1>
				     <h1>CrossCode 2.0</h1>
				</div>
				<span id="typed"></span>
				<script type="text/javascript">
							var typed = new Typed('#typed',{
				                    stringsElement: '#typed-strings',
				                    backSpeed: 40,
				                    typeSpeed: 50,
				                    loop: true
				                  });
				 </script>
		    	<div class="container" >
                 <form  method="POST" action="check.php" style="margin: auto;">
                        <br>
                        <input style="border-radius: 8px;" type="text" placeholder="Enter Username" name="uname" required>
                        <input style="border-radius: 8px;" type="password" placeholder="Enter Password" name="psw" required>
                        <br><br><input type="submit" class="button" name="sub">
                </form>

            </div>
		<!-- scripts -->
		       <script src="particle/particles.js"></script>
		       <script src="particle/demo/js/app.js"particle></script>
		<!-- stats.js -->
		        <script src="particle/demo/js/lib/stats.js"></script>
		    </div>
	</body>
</html>
