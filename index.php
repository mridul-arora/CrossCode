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
          <img src="assets/images/logo.png" style="width: 120px;height: 75px;padding:10px;" align="left" >
            <div class="container">

                <div class="row">
                    <div class="col-sm-6" id="login" >
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
                    <div class="col-sm-6"  id="rule" >
                      <pre>
                            <h2>CrossCode 2.0</h2>
                            <p align="left" ><b>Round</b> 1<br>*This is Crossword Round<br>*The Crossword contain C program<br>*rule2</p>
                            <p align="left" ><b>Round 2</b><br>This round will be hosted on HACKERRANK<br>*Timming:<br>*Guess the Logic from examples<br>*Wite the code for the logic</p>
                            <p><b>Score of both round will be Calulated for winner<b></p>
                            <p align="left" >For any query:<br>Contact:Mridul XXXXXXXXX</p>
                      </pre>
                    </div>
                </div>
            </div>
            <script src="assets/js/particles.js"></script>
            <script src="assets/js/particle/demo/js/app.js"particle></script>
        </div>
        </body>
</html>
