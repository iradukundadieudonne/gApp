
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
            <button><a href="apply.php">Apply Now</a></button>
            <button><a href="logout.php">Logout</a></button>
            
        </div>
       </div>
    </div>

    <div class="body">
      
        <div class="card-container">
            <div class="card-image">
                <img src="./image/comp.jpg" alt="pic" />
            </div>
            <div class="card-desc">
             <h2 style="text-decoration: 4px underline black;">Accounting</h2>
             <p>Description:</p>
             <textarea name="Description" id="Description">welcome on Accounting</textarea>
              
            </div>
        </div>

        <div class="card-container">
            <div class="card-image">
                <img src="./image/computer.jpg" alt="pic" />
            </div>
            <div class="card-desc">
             <h2 style="text-decoration: 4px underline black;">Computer System And Architecture</h2>
             <p>Description:</p>
             <textarea name="Description" id="Description">welcome on computer system its good ways</textarea>
              
            </div>
        </div>

        <div class="card-container">
            <div class="card-image">
                <img src="./image/masonary.jpg" alt="pic" />
            </div>
            <div class="card-desc">
             <h2 style="text-decoration: 4px underline black;">Building Construction</h2>
             <p>Description:</p>
             <textarea name="Description" id="Description">welcome on Building Construction</textarea>
              
            </div>
        </div>
      


    </div>
    <div class="">
        <footer style="background-color: whitesmoke; border-radius: 30px; box-shadow: 0 0 10px;  color: black; text-align: center; padding: 15px;  bottom: 0; width: 100%;">
            <p>&copy;Copyright2025 MyWebProgram. All Rights Reserved.</p>
            <h1>------or--------</h1>
            <p style="color: blue;">WebProgramed BY: - .Iradukunda Dieudonne</p>
            <p style="color: blue;">WebProgramed BY: - .Uwishema Jeremy</p>
        </footer> 
    
    
    </div> 
   </div> 
</body>
</html>