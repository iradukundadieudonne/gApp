
<?php
include('connection.php');
session_start()
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>George Fox || Home</title>
    <style>
        body{
            background-color: #f4f4f4;
        }
        .contents{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .contents .header{
            display: flex;
            flex-direction: column;
            
        }
        .contents .header .logo{
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        } 
        .contents .header .logo h1{
            font-family: fantasy;
            color: rgb(9, 9, 92);
            box-shadow: 0 0 10px 10px;
            border: none;
        }
        .contents .header .links {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .contents .header .links .link{
            display: flex;
            flex-direction: row;
            gap: 7rem;

        }
        .contents .header .links .link a{
            text-decoration: none;
            font-size: 20px;
            color: #333;
            font-weight: 800;
            
        }
        .contents .header .links .logout{
            display: flex;
            flex-direction: row;
            gap: 10px;
        }
        .contents .header .links .logout button{
            width: 7rem;
            height: 2.2rem;
            background-color: rgba(31, 31, 138, 0.856);
            border-color: orangered;
            cursor: pointer;
            border-radius: 6px;
        }
        .contents .header .links .logout button a{
            text-decoration: none;
            color: #fff;
        }

       

        .contents .body{
           display: flex;
           flex-direction: column;
           margin-top: 5rem;
        }
        .contents .body .form{
            width: 70%;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 0 10px;
        }
        .contents .body .form form input,#program{
            width: 50%;
            height: 2.1rem;
            border-radius: 6px;
        }
        button{
width: 40%;
 background-color: blue;
 border-radius: 20px;
        }

       
    </style>
</head>
<body>
   <div class="contents">
    <div class="header">
       <div class="logo"><h1>George Fox</h1>
       <div class="profile">
        <?php
        $user = $_SESSION['email'];
        $select = mysqli_query($conn, "SELECT * FROM acount WHERE email='$user'");
        while($data=mysqli_fetch_assoc($select)){
        ?>
        <p style="font-weight: 800;margin-right: 3rem;font-size: 20px;"><?php echo$data['name'] ?></p>
        <?php 
        }
        ?>
    </div>
       </div>

       <div class="links">

        <div class="link">
        <a href="home.php" >Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact Us</a>
        <a href="apply.php" style="text-decoration: 4px underline blue;">Apply</a>
        </div>
        <div class="logout">
            <button><a href="apply.php">Apply Now</a></button>
            <button><a href="logout.php">Logout</a></button>
            
        </div>
       </div>
    </div>

    <div class="body">
      
       <div class="form">
        <center>
        <form action="" autocomplete="off" method="POST">
<label for="">name:<br><input type="text" name="names" placeholder="name" required ></label><br><br>
<label for="">date:<br><input type="date" name="date" placeholder="date" required ></label><br><br>
<label for="program">choose:<br>
<select id="program" name="option" required>
    <option value="">choose option:
    <option value="computer system and architecture">Computer System And Architecture</option>
    <option value="accounting">Accounting</option>
    <option value="builiding construction">Building Construction</option >
</select></label><br><br>
<label for="">Email:<br><input type="email" name="email" placeholder="email" required ></label><br><br>
<label for="">phone:<br><input type="number" name="phone" placeholder="phone" required ></label><br><br>
            <button type="submit" name="apply">Apply</button>
            <?php
            include 'connection.php';
            if(isset($_POST['apply'])){
                $names=$_POST['names'];
                $date=$_POST['date'];
                $option=$_POST['option'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
 
  
            
            $sql=mysqli_query($conn,"INSERT INTO applications() VALUES(NULL,'$names','$data','$option','$email','$phone')");
            if($sql){
                echo "<script>
                alert('Application Successful');
                </script>
                ";
            }
            else{
                echo "<p style='color:red'>Application Failed !</p>
            ";
            }
        }
        
            ?>
        </form>
        </center>
       </div>
      


    </div>
</body>
</html>