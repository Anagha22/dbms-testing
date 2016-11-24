<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" >
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="username" name="username" type="username" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="password" name="password" type="password" value="">
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include("config.php");
if(isset($_POST['login']))
{   session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];

    $check_user="SELECT * from user where username='$username' AND password='$password'";
    $run=mysql_query($check_user)or die(mysql_error());
    $num_row=mysql_num_rows($run);
    $row = mysql_fetch_array($run);
    if($num_row>0)
    {
        header('location:cart.php');
        $_SESSION['username']=$row['username'];//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }


  }
?>

</html>
