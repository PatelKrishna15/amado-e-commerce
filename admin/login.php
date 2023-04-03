<?php
session_start();

?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php
// include('connection.php');
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($email == "admin@gmail.com" && $pass == "password")
    {
        $_SESSION['e_mail'] = $email;
        echo  "email or password match successfully";
        header('location:index.php');
    }else{
        echo "enter correct data";
    }
} 
    

if (isset($_SESSION['e_mail'])) {
    header('location:index.php');
}

?>

<body style="background-image: url(login_background.jpg); background-repeat:no-repeat; background-size:100%;">
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 ">
                <div class="mt-4 text-center">
                    <H2>ADMIN LOGIN </H2>
                </div>
                <div class="mt-5">
                    <div class="p-4">
                        <form method="post" class="needs-validation" action="login.php" name="loginForm" novalidate>
                            <!-- Email input -->
                            <input type="hidden" name="id" id="id">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                                <div class="invalid-feedback">
                                    Enter email.
                                </div>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="pass">Password</label>
                                <input type="password" id="pass" name="pass" class="form-control" required>
                                <div class="invalid-feedback">
                                    Enter passwowd.
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="login" id="login" class="btn btn-primary btn-block  mb-2">Login</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <!-- <p>Not a member? <a href="register_form.php">Register</a></p> -->

                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
</body>

</html>
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission of the form
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>