<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assigment_03</title>
     
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- animation css to move the student name and id in the index page -->
        <style>
            .anime 
            {
                position: relative;
                -webkit-animation: mymove 5s infinite;
                animation: mymove 5s infinite;
            }
            @-webkit-keyframes mymove 
            {
                from {left: 0px;}
                to {left: 100px;}
            }
            @keyframes mymove 
            {
                from {left: 0px;}
                to {left: 100px;}
            }
        </style>
    </head>
    <body style="background-image: url('/wallpaper1.jpg');color: white;">

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Assignment 03</a>
            <ul class="nav justify-content-end">
                <?php 
                    if(isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<li class='nav-item'>
                                <a class='nav-link active' href='profile.php'>Profile</a>
                            </li>";
                    }
                ?>
                <?php 
                    if(!isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<li class='nav-item'>
                                <a class='nav-link' href='login.php'>Login</a>
                            </li>";
                    }
                ?>
                <?php 
                    if(isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<li class='nav-item'>
                                <a class='nav-link active' href='logout.php'>Logout</a>
                            </li>";
                    }
                ?>
            </ul>
        </nav>
        <div class="container">
            <div class="row" align="center" style="padding-top: 170px;">
                <div class="col-12">
                    <h1 style="font-size: 90px;">Social Login</h1> 
                </div>
            </div>
            <div class="row" align="center" style="padding-top: 20px;">
                <div class="col-12">
                    <h2 style="font-size: 50px;">OAuth framework</h2>  
                </div>
            </div>
            <div class="row" align="center" style="padding-top: 10px;">
                <div class="col-12">
                    <div class="anime">
                        L.H.A.P.Perera. : IT 14147524
                    </div>
                    <div class="anime">
                        4th Year Cyber Security
                    </div>  
                </div>
            </div>
        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
