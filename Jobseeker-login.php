<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLogin</title>
    <link rel= "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "css/Jobseeker-login.css">

</head>
<body>
    
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form action = "Jobseeker-validation.php" method = "post">
                <div class="form-group">
                    <label>Username</label>
                    <input type = "text" name = "user" class = "form-control" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type = "password" name = "password" class = "form-control" required>
                </div>

                <button type ="submit" class = "btn btn-primary">Login</button>
            </form>
        </div>


        <div class="col-md-6 login-right">
            <h2>SignUp Here</h2>
            <form action = "Jobseeker-registration.php" method = "post">
                <div class="form-group">
                    <label>Username</label>
                    <input type = "text" name = "user" class = "form-control" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type = "password" name = "password" class = "form-control" required>
                </div>

                

                <button type ="submit" class = "btn btn-primary">SignUp</button>
            </form>
        </div>

    </div>




</div>

</div>
</body>
</html>