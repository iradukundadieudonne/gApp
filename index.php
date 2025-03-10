
<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #f4f4f4;
        }
        form{
            background-color: #fff;
            width: 500px;
            
            border-radius: 7px;
            box-shadow: 0 0 10px 10px;
        }
        input{
            background: transparent;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 3px solid black;
            width: 80%;
            height: 2rem;
            font-size: 18px;
        }
        button{
            width: 80%;
            height: 2rem;
            border-radius: 7px;
            cursor: pointer;
            background-color: rgb(26, 26, 151);
            color:#fff;
            transition: all 2s;
            margin-bottom: 3rem;
        }
        button:hover{
            background-color: rgb(68, 68, 180);
        }
        h1{
            color: rgb(26, 26, 151);
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
        }
        p{
            color: black;
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif; 
        }
    </style>
</head>
<body>
    <center>
    <form action="" method="post" autocomplete="off">
    <h1><u><b><i>college George fox de Butaro</i></b></u></h1>
    <h2>Sign in</h2>
    <p>Welcome again</p>
               <label for="">email:<br><input type="email" name="email" placeholder="Email Address" required></label><br>
                <label for="">Password :<br> <input type="password" name="password" placeholder="Password" required></label><br><br>
                <button type="submit" name="sigup">Sign Up</button>

                <?php
include 'connection.php';
if(isset($_POST['sigup'])){
   
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $password = md5($pwd);
    $execute=mysqli_query($conn,"SELECT * FROM acount WHERE email='$email' AND password='$password'");
if(mysqli_num_rows($execute)){
    $_SESSION['email'] = $email;
    header('location:home.php');
}else{
    echo"
    <p style='color:red'>Invalid Password</p>
    ";
}
}
?>
                <p>If You Don't have an Account <a href="sinup.php">Create a New one Here</a></p>
                </form>
            
    </center>
</body>
</html>