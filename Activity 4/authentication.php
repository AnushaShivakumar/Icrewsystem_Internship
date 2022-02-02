 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Authentication Page</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="authentication_register.css">
    <link rel="stylesheet" href="authentication_login.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300&family=Cormorant:ital,wght@1,300;1,400&family=Island+Moments&display=swap"
        rel="stylesheet">
 </head>
 <body>
    <section class="container-fluid px-0">
        <div class="row aline-items-center img">
            <div class="col-6 leftpart">
                <img class="img-fluid hello" width="580"
                    src="https://cdn.pixabay.com/photo/2021/04/22/17/36/baby-panda-6199643_960_720.png" alt="">
            </div>
            <div class="col-6 rightpart">
                <div class="content aline-items-center">
                    <form action="">
                        <div class="mainbox">
                            <h2>Welcome Back</h2>

                            <p class="gap">Keep a smile on your face. Keep a spring in your step</p>
                            <div>
                                <input class="input" type="email" name="email" placeholder="Email"> <br>
                                <br>
                                <input class="input" type="password" name="password" placeholder="Password">
                            </div>
                            <p>Forgot Password?</p>
                            <div>
                                <button type="button" style="background-color: #ba5624;">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <button class="float-right" onclick="document.getElementById('new').style.display='block'">Sign Up</button>
    </section>
    <div id="new" class="modal">
        <span onclick="document.getElementById('new').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
            <div class="container newform">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Confrim Password</b></label>
                <input type="password" placeholder="Confrim Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">You agree to our
                    terms of services
                </label>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('new').style.display='none'"
                        class="cancel">Cancel</button>
                    <button type="submit" class="signup">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        var modal = document.getElementById('new');

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

        <script src="authentication.js"></script>
    </body>
 </html>