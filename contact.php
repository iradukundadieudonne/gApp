



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
            font-size: 70px;
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
        form{
            border-radius: 30px;
            box-shadow: 6rem ;
            width: 600px;
            height: 500px;
            font-size: 30px;
            
        }
        input{
            background: transparent;
            border-top: 0px;
            font-size: 30px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 2px solid black;
        }
        button{
            border-radius: 20px;
            background-color: blue;
            color: white;
            font-size: 30px;
            width: 40%;
        }

        .body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .text-center a {
            color: #007bff;
            text-decoration: none;
        }
        .text-center a:hover {
            text-decoration: underline;
        }

       

        .contents .body{
           display: flex;
           flex-direction: column;
           margin-top: 5rem;
        }
        .contents .body .card-container{
            width: 80%;
            border-radius: 5px;
            box-shadow: 0 0 10px;
            gap:30px;
            display: flex;
            flex-direction: row;
            
        }
        .contents .body .card-container .card-image{
           width: 40%;
           margin-top: 1rem;
           margin-bottom: 1re;

        }
        .contents .body .card-container .card-image:hover{
            box-shadow: 0 0 12px;
        }
        .contents .body .card-container .card-image img{
            width: 100%;
            border-radius: 6px;
            border-color: #f4f4f4;
           
        } 
        .contents .body .card-container .card-desc{
            width: 50%;
            font-size: 19px;
        }
        .contents .body .card-container .card-desc:hover{
            box-shadow: 0 0 10px;
            border-radius: 6px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .contents .footer{
            background-color: whitesmoke;
        }
        
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; }
        .container { max-width: 800px; margin: auto; }
    </style>
</head>
<body>
   <div class="contents">
    <div class="header">
       <div class="logo"><h1>college George fox de Butaro</h1>
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
        <a href="" style="text-decoration: 4px underline blue;">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact Us</a>
        <a href="apply.php">Apply</a>
        </div>
        <div class="logout">
            <button><a href="apply.php">Apply</a></button>
            <button><a href="logout.php">Logout</a></button>
            
        </div>
       </div>
    </div>

    <div class="body">
 
    <div class="container mt-5">
        <h2 class="text-center" style="font-size: 50px; ">Contact Us</h2>
        <p class="text-center" style="font-size: 40px; ">college George fox de Butaro</p>
        
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div><br>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div><br>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write your message here" required></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
                <div class="text-center mt-4">
                    <p><strong>Phone:</strong> <a href="tel:0780601137">+0780601137</a></p>
                </div>
            </div>
        </div>
    </div>
</html>
    
