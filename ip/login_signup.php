<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login/SignUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script type="text/javascript" src="day_night.js"></script>
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-color: rgb(253,255,222);
        }

        /*.carousel-inner img{
            width: 100%;
            height: 50%;
        }*/

        .col-sm-4{
            background-color: lightblue;
            width: 30vw;
            height: 88vh;
            border-radius: 5%;
        }

        .container-fluid{
            padding: 2vh 3vw;
            font-weight: bold;
        }

        img{
            border: 1.5px solid black;
            border-radius: 4vh;
        }

        /*#myModal{
            border-radius: 5vw;
        }
*/
        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="email"]{
            border-radius: 2vw;
            margin: 2vh;
            padding: 1vh;
            outline: none;
        }

        button[type="submit"],
        button[type="button"]{
            padding: 1.5vh;
            border-radius: 3vh;
            outline: none;
        }

        /*.modal-dialog{
            border-top-left-radius: 2vw;
            border-top-right-radius: 2vw;
        }*/

        .modal-content{
            border-top-left-radius: 2vw;
            border-top-right-radius: 2vw;
            border-bottom-left-radius: 2vw;
            border-bottom-right-radius: 2vw;
        }

        .modal-header{
            background-color: lightblue;
            border-top-left-radius: 2vw;
            border-top-right-radius: 2vw;
        }

        .modal-title{
            text-align: center;
        }

        .modal-footer{
            background-color: gray;
            border-bottom-left-radius: 2vw;
            border-bottom-right-radius: 2vw;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item" >
                <a class="nav-link" href="home.php"><span title="Home">Home</span></a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="plant_status.php"><span title="Plant Status">Plant Status</span></a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="suggested_plant.php"><span title="Suggested Plants">Suggested Plants</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" ><span title="Botanical Gardens">Botanical Gardens</span></a>
            </li>
 -->            <li class="nav-item">
                <a class="nav-link" href="about.php" ><span title="About Us">About Us</span></a>
            </li>
            <li class="nav-item">
                <?php if(isset($_SESSION['username']) && !empty($_SESSION['username']) )
                { ?>
                    <a class="nav-link" href="logout.php" ><span title="Logout">Logout</span></a>
                <?php } else{ ?>
                    <a class="nav-link" href="login_signup.php"><span title="Login">Login</span> </a>
                <?php } ?>
            </li>
            <div class="toggle"></div>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1" ></li>
                        <li data-target="#demo" data-slide-to="2" ></li>
                        <li data-target="#demo" data-slide-to="3" ></li>
                        <li data-target="#demo" data-slide-to="4" ></li>
                        <li data-target="#demo" data-slide-to="5" ></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/wallpaper.jpg" alt="lorem" width="800" height="600">
                            <div class="carousel-caption" style="color: white;">
                                <h3>Loreum ipsum</h3>
                                <p>This is simple text</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/fresh.jpg" alt="lorem" width="800" height="600">
                            <div class="carousel-caption" style="color: white;">
                                <h3>Loreum ipsum</h3>
                                <p>This is simple text</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/kitchen.jpg" alt="lorem" width="800" height="600">
                            <div class="carousel-caption" style="color: white;">
                                <h3>Loreum ipsum</h3>
                                <p>This is simple text</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/pots.jpg" alt="lorem" width="800" height="600">
                            <div class="carousel-caption" style="color: white;">
                                <h3>Loreum ipsum</h3>
                                <p>This is simple text</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/fern.jpg" alt="lorem" width="800" height="600">
                            <div class="carousel-caption" style="color: white;">
                                <h3>Loreum ipsum</h3>
                                <p>This is simple text</p>
                            </div>
                        </div>
                        <!-- <div class="carousel-item ">
                            <img src="images/f.jpeg" alt="lorem" width="800" height="600">
                            <div class="carousel-caption" style="color: black;">
                                <h3>Loreum ipsum</h3>
                                <p>This is simple text</p>
                            </div>
                        </div> -->
                    </div>
                    <a href="#demo" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#demo" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            
            <div class="col-sm-4"> 
                <form method="post" action="validation.php" >
                    <img src="usericon.jpg" class="img-fluid mx-auto d-block rounded-circle" width="200" height="200">
                    <!-- img-fluid is used to make the image responsive 
                        mx-auto d-block is used to center it as in middle
                        rounded-circle is used to make the image rounded -->
                    <p class="username">Username : <input type="text" name="username" placeholder="Enter a Username ..." required> </p>
                    <p class="password">Password : <input type="password" name="password" placeholder="Enter a password ..." required></p>
                    <p><button type="submit" class="btn-primary mx-auto d-block" name="login" >Login</button></p>
                    <p>Not have a account...Create here</p>
                    <button type="button" class="btn-success mx-auto d-block" data-toggle="modal" data-target="#myModal">SignUp</button>
                </form>
            </div>
            <div class="container">
                <form method="post" action="registration.php">
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">SignUp Form</h3>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <table>
                                        <tr class="table_row">
                                            <td>Name</td> 
                                            <td>:</td> 
                                            <td><input type="text" name="name" placeholder="Enter your name ..." required></td>
                                        </tr>

                                        <tr class="table_row">
                                            <td>Username </td>
                                            <td>:</td>  
                                            <td><input type="text" name="username" placeholder="Enter your username ..." required></td>
                                        </tr>

                                        <tr class="table_row">
                                            <td>Mobile No. </td>
                                            <td>:</td>  
                                            <td><input type="tel" name="mobile_no" placeholder="Enter your mobile no. ..." required></td>
                                        </tr>

                                        <tr class="table_row">
                                            <td>E-mail </td>
                                            <td>:</td>  
                                            <td><input type="email" name="email" placeholder="Enter your E-mail ..." required></td>
                                        </tr>

                                        <tr class="table_row">
                                            <td>Password </td>
                                            <td>:</td>  
                                            <td><input type="password" name="password" placeholder="Enter your password ..." required></td>
                                        </tr>

                                        <tr class="table_row">
                                            <td>Confirm Password </td>
                                            <td>:</td>  
                                            <td><input type="password" name="repassword" placeholder="Enter your password ..." required></td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="close_form btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="signup btn-success " >Sign Up</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>