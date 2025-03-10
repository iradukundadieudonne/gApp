
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
    <h2>create new acount</h2>
      <label for="">name:<br><input type="text" name="name" placeholder="Name" required></label><br>
        <label for="">age:<br> <input type="number" name="age" placeholder="Enter your age" required> </label><br>
            <label for="">email:<br><input type="email" name="email" placeholder="Email Address" required></label><br>
                <label for="">Password :<br> <input type="password" name="password" placeholder="Password" required></label><br><br>
                <button type="submit" name="sigup">Sign Up</button>

                <?php
include 'connection.php';
if(isset($_POST['sigup'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $password = md5($pwd);
    $execute=mysqli_query($conn,"INSERT INTO acount() VALUES(NULL,'$name','$age','$email','$password')");
if($execute){
    echo"
    <script>alert('Account Created Successfull');</script>
    ";
    header('location:index.php');
}else{
    echo "<p style='color:red'>Sign Up Failed </p>
    ";
}
}
?>
                <p>If You Already have an account <a href="index.php">Login Here</a></p>
                </form>
            
    </center>
</body>
</html>