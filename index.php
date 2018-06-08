<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/bootstrap.php"; ?>
        
        <link rel="stylesheet" type="text/css" href="Css/index.css">
        <link rel="stylesheet" href="assets/css/index.css">
        <script src="assets/js/index.js"></script>
        <script src="assets/js/particle/typed.js"></script>

    </head>
    <body>
        
        <div id="particles-js">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div id="typed-strings">
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
                        
                          <form action="check.php" method="post" >
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Username" name="uname" required>
                                </div>
                              <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter Password" name="pwd" required>
                              </div>
                            
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-info">Register</button>
                                
                                </div>

                            </form>
                        
                    </div>
                </div>
            </div>
            <script src="assets/js/particles.js"></script>
            <script src="assets/js/particle/demo/js/app.js"particle></script>
        
        
        
        
        
        </div>
        
        
    
    
    
    
    
    </body>






</html>