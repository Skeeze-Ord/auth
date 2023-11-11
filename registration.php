<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Registration Form in PHP with Validation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-offset-2">
            <div class="page-header">
                <h2>Registration Form in PHP with Validation</h2>
            </div>
            <p>Please fill all fields in the form</p>
            <form action="jopa.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                </div>
                <div class="form-group ">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                    <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="" maxlength="12" required="">
                    <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                    <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" value="" maxlength="8" required="">
                    <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                </div>
                <input type="submit" class="btn btn-primary" name="signup" value="submit">
                Already have a account? <a href="login.php" class="btn btn-default">Login</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>