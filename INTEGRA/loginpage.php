<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,387;1,387&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html {
            height: 100%;
        }
        body {
            background: linear-gradient(180deg, #f87400 30%, #000000b7 100%);
        }
        .box {
            box-shadow: 5px 5px 7px 7px black;
            width: 500px;
            height: 500px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(330deg, rgba(255, 255, 255, 0.572) 2%, #0d6efd 45%);
        }
        .form-control {
            border-radius: 200px;
        }
        .btn {
            border-radius: 100px !important;
        }
        .dual-colored {
            color: #f87400;
            font-family: system-ui;
            text-shadow: 2px 2px 3px black;
        }
        .btn-primary {
            color: #fff;
            background-color: #f87400 !important;
            border-color: black !important;
        }
        .btn:hover {
            background-color: white !important;
            color: #f87400 !important;
            border-color: black !important;
        }
        .fas:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div style="position: absolute;left: 650px;top: 70px;">
        <img src="integracrop.png" alt="integra" style="height: 50px;width: 300px;">
    </div>
    <div class="box">
        <form action="functions.php" method="post" autocomplete="off">
            <h2 style="text-align: center;" class="dual-colored">LOGIN</h2>
            <div style="position: relative; top: 20px;padding: 25px;">
                <div class="form-group">
                    <label for="number" class="dual-colored" style="font-size: 20px;">User ID</label>
                    <input type="text" class="form-control" style="position: relative; top: 13px;" name="user_id" id="text" placeholder="Enter User ID" required>
                    <p class="error username-error"></p>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="position: relative; top: 30px;font-size: 20px;" class="dual-colored">Password</label>
                    <input type="password" class="form-control" name="password" style="position: relative; top: 40px;" id="password" placeholder="Password" required>
                    <i class="fas fa-eye" style="position: relative; top: 10px;left: 395px;" id="togglePassword"></i>
                    <p class="error password-error"></p>

                </div>
                <button type="submit" class="btn btn-primary gotoindex" style="position: relative; top: 65px;">LOG IN NOW</button>
                <p class="success"></p>

            </div>
        </form>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
