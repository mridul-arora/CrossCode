<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/bootstrap.php"; ?>
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="assets/js/index.js"></script>
    <script src="assets/js/particle/typed.js"></script>

</head>

<body>

    <div id="particles-js">
        <div class="container">
            
            <div id="logo"><img src="assets/images/logo.png" width="200px" ></div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1" id="login">
                    <div id="typed-strings">
                        <h1>Welcome to</h1>
                        <h1>CrossCode 2.0</h1>
                    </div>
                    
                    <span id="typed"></span>
                    <script type="text/javascript">
                        var typed = new Typed('#typed', {
                            stringsElement: '#typed-strings',
                            backSpeed: 40,
                            typeSpeed: 50,
                            loop: true
                        });

                    </script>

                    <form action="check.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="uname" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="pwd" required>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="btn btn-info">Register</button>

                        </div>

                    </form>

                </div>
                <div class="col-sm-6 col-sm-offset-1" id="rules">
    
                        <h2>Rules</h2>
                        <ol>
                            <li>This is the Crossword Round.</li>
                            <li>There are 12 questions. You have to find the output of these programs and fill them in the crossword.</li>
                            <li>You will have 30 minutes to complete this round.</li>
                            <li>For each correct answer you will get 1 points.</li>
                            <li>There is no negative marking.</li>
                            <li>Submit only after filling all the answers.</li>
                            <li><strong>After submitting the answers you cannot login again.</strong></li>
                        
                        
                        </ol>
                </div>

        <script src="assets/js/particles.js"></script>
        <script src="assets/js/particle/demo/js/app.js" particle></script>
            </div>
        </div>
    </div>

</body>

</html>
