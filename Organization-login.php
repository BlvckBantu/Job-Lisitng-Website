<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLogin</title>
    <link rel= "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "css/Organization-login.css">
<style>
    .mimi{
    text-align: center;
    font-size: 120px;
    font-weight: bolder;
    justify-content: center;
    margin-top: 100px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
body{
    background: url('images/Logo2.jfif');
    background-size: cover;
    background-position: center;
    
}
</style>
</head>
<body>
    
<div class="container">
    <div class="login-box">
    <div class="mimi">
    <h1>Organization Login / SignUp</h1>
    </div>
    <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form action = "Organization-validation.php" method = "post">
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
            <form action = "Organization-registration.php" method = "post">
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