<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Blood</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=" collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="font-size:24px;font-weight: bold">
                    <li>
                        <a href="index.html" style="color:black;font-size:24px;font-weight: bold">Home</a>
                    </li>
                    <li>
                        <a href="about.html" style="color:black;font-size:24px;font-weight: bold">About</a>
                    </li>
                    <li>
                        <a href="post.html" style="color:black;font-size:24px;font-weight: bold">Sample Post</a>
                    </li>
                    <li>
                        <a href="contact.html" style="color:black;font-size:24px;font-weight: bold">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/blood1.jpg')">
        <div class="container" style="opacity: 0">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <img src="img/blood2.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                        <h2 class="post-title">
                            Why give blood
                        </h2>
                        <h3 class="post-subtitle" style="font-weight:normal;">
                            Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.

Many people would not be alive today if donors had not generously given their blood.
                        </h3>
                  
                    
                </div>
                <hr>
                <div class="post-preview">
                   
                        <h2 class="post-title">
                            Donor Criteria
                        </h2>
                        <ul>
                            <li>Be between 16 and 60 years old</li>
                            <li>Weigh at least 45 kg</li>
                            <li>Have a haemoglobin level of at least 12.5 g/dl</li>
                            <li>Generally be in good health</li>
                            <li>Not have had any symptoms of infection for at least 1 week e.g. sore throat, cough, runny nose, diarrhea</li>
                            <li>Not have had a fever in the last 3 weeks</li>
                        </ul>
                </div>
                <hr>

            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Blood Donation 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
    <?php
        require 'connect.ini.php';
        <form class="form-inline" action="register.php" method ="POST">
            <div class="form-group">
                <input type="text" name="f_name" class="form-control">
                <input type="text" name="l_name" class="form-control">
                <input type="text" name="age" class="form-control">
                Gender: </br>
                <select name="gender" >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                BloodGroup: </br>
                <select name="bloodgroup">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>

                </select>
                <input type="text" name="bloodgroup" class="form-control">
                <textarea name="address" cols="80" rows"10"></textarea>
                <input type="text" name="phoneno" class="form-control">
                <input type="text" name="city" class="form-control">
            </div>
        </form>
    ?>
</body>

</html>
